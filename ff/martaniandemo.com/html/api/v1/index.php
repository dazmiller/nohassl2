<?php

require_once '../include/DbHandler.php';
require_once '../include/PassHash.php';
require_once '../include/Config.php';
require '.././libs/RedBean/rb.php';

/*
 * Load Models
 *
 **/
//require_once '../models/userprofile.php';

require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

// Import the necessary classes
use Cartalyst\Sentinel\Activations\EloquentActivation as Activation;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;

// Include the composer autoload file
require 'vendor/autoload.php';

// Setup a new Eloquent Capsule instance
$capsule = new Capsule;

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1:3307',
	'database' => 'nohassl',
	'username' => 'dazmiller',
	'password' => 'jasper',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
]);

$capsule->bootEloquent();
// Register a new user
//Sentinel::register([
//	'email' => 'test@example.com',
//	'password' => 'foobar',
//]);
//print_r($capsule);
//

/*
Sentinel::getRoleRepository()->createModel()->create(array(
'name' => 'Admin',
'slug' => 'admin',
'permissions' => array(
'user.create' => true,
'user.update' => true,
'user.delete' => true,
),
));

Sentinel::getRoleRepository()->createModel()->create(array(
'name' => 'User',
'slug' => 'user',
'permissions' => array(
'user.update' => true,
),
));
 */

$user = Sentinel::findById(1);
print "<pre>";
print_r($user);
print "</pre>";

$activation = Activation::exists($user);
echo ($activation);
exit;
$credentials = [
	'email' => 'test@example.com',
	'password' => 'foobar',
];

print_r(Sentinel::authenticate($credentials));

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

$app = new \Slim\Slim();

// User id from db - Global Variable
$user_id = NULL;

/**
 * Adding Middle Layer to authenticate every request
 * Checking if the request has valid api key in the 'Authorization' header
 */
function authenticate(\Slim\Route $route) {
	// Getting request headers
	$headers = apache_request_headers();
	$response = array();
	$app = \Slim\Slim::getInstance();

	// Verifying Authorization Header
	if (isset($headers['Authorization'])) {
		$db = new DbHandler();

		// get the api key
		$api_key = $headers['Authorization'];
		// validating api key
		if (!$db->isValidApiKey($api_key)) {
			// api key is not present in users table
			$response["error"] = true;
			$response["message"] = "Access Denied. Invalid Api key";
			echoRespnse(401, $response);
			$app->stop();
		} else {
			global $user_id;
			// get user primary key id
			$user_id = $db->getUserId($api_key);
		}
	} else {
		// api key is missing in header
		$response["error"] = true;
		$response["message"] = "Api key is misssing";
		echoRespnse(400, $response);
		$app->stop();
	}
}

/**
 * ----------- METHODS WITHOUT AUTHENTICATION ---------------------------------
 */
/**
 * User Registration
 * url - /register
 * method - POST
 * params - name, email, password
 */
$app->post('/register', function () use ($app) {
	// check for required params
	verifyRequiredParams(array('name', 'email', 'password'));

	$response = array();

	// reading post params
	$name = $app->request->post('name');
	$email = $app->request->post('email');
	$password = $app->request->post('password');

	// validating email address
	validateEmail($email);

	$db = new DbHandler();
	$res = $db->createUser($name, $email, $password);

	if ($res == USER_CREATED_SUCCESSFULLY) {
		$response["error"] = false;
		$response["message"] = "You are successfully registered";
	} else if ($res == USER_CREATE_FAILED) {
		$response["error"] = true;
		$response["message"] = "Oops! An error occurred while registereing";
	} else if ($res == USER_ALREADY_EXISTED) {
		$response["error"] = true;
		$response["message"] = "Sorry, this email already existed";
	}
	// echo json response
	echoRespnse(201, $response);
});

/**
 * User Login
 * url - /login
 * method - POST
 * params - email, password
 */
$app->post('/login', function () use ($app) {
	// check for required params
	verifyRequiredParams(array('email', 'password'));

	// reading post params
	$email = $app->request()->post('email');
	$password = $app->request()->post('password');
	$response = array();

	$db = new DbHandler();
	// check for correct email and password
	if ($db->checkLogin($email, $password)) {
		// get the user by email
		$user = $db->getUserByEmail($email);

		if ($user != NULL) {
			$response["error"] = false;
			$response['name'] = $user['name'];
			$response['email'] = $user['email'];
			$response['apiKey'] = $user['api_key'];
			$response['createdAt'] = $user['created_at'];
		} else {
			// unknown error occurred
			$response['error'] = true;
			$response['message'] = "An error occurred. Please try again";
		}
	} else {
		// user credentials are wrong
		$response['error'] = true;
		$response['message'] = 'Login failed. Incorrect credentials';
	}

	echoRespnse(200, $response);
});

/*
 * ------------------------ METHODS WITH AUTHENTICATION ------------------------
 */

/**
 * Listing all tasks of particual user
 * method GET
 * url /tasks
 */
$app->get('/tasks', function () use ($app) {
	//global $user_id;
	//$response = array();
	//$db = new DbHandler();

	// fetching all user tasks
	//$result = $db->getAllUserTasks(3);

//$response["error"] = false;
	//	$response["tasks"] = array();

	// looping through result and preparing tasks array
	//	while ($task = $result->fetch_assoc()) {
	////	$tmp = array();
	//	$tmp["id"] = $task["id"];
	//	$tmp["task"] = $task["task"];
	//	$tmp["status"] = $task["status"];
	//	$tmp["createdAt"] = $task["created_at"];
	//	array_push($response["tasks"], $tmp);
	//}

	//$tasks = R::getAll('tasks');
	//print_r($tasks);
	//exit;
	$sql = 'SELECT * FROM tasks';
	$rows = R::getAll($sql);

	print_r($rows);
	exit;
	//echoRespnse(200, json_encode($tasks));
});

/**
 * Listing single task of particual user
 * method GET
 * url /tasks/:id
 * Will return 404 if the task doesn't belongs to user
 */
$app->get('/tasks/:id', 'authenticate', function ($task_id) {
	global $user_id;
	$response = array();
	$db = new DbHandler();

	// fetch task
	$result = $db->getTask($task_id, $user_id);

	if ($result != NULL) {
		$response["error"] = false;
		$response["id"] = $result["id"];
		$response["task"] = $result["task"];
		$response["status"] = $result["status"];
		$response["createdAt"] = $result["created_at"];
		echoRespnse(200, $response);
	} else {
		$response["error"] = true;
		$response["message"] = "The requested resource doesn't exists";
		echoRespnse(404, $response);
	}
});

/**
 * Creating new task in db
 * method POST
 * params - name
 * url - /tasks/
 */
$app->post('/tasks', function () use ($app) {

	echo "hello world";
	exit;

	// check for required params
	verifyRequiredParams(array('title', 'firstname'));

	$allPostVars = $app->request->post();

	$profile = R::dispense('userprofile');
	$profile->title = $allPostVars['title'];
	$profile->firstname = $allPostVars['firstname'];
	$profile->middlename = $allPostVars['middlename'];
	$profile->lastname = $allPostVars['lastname'];
	$profile->dob = $allPostVars['dob'];
	$profile->numdependents = $allPostVars['numdependents'];
	$profile->ausdrivlicnum = $allPostVars['ausdrivlicnum'];
	$profile->email_primary = $allPostVars['email_primary'];
	$profile->mobile = $allPostVars['mobile'];
	$profile->home_ph = $allPostVars['home_ph'];
	$profile->work_ph = $allPostVars['work_ph'];
	$profile->unit_num = $allPostVars['unit_num'];
	$profile->street = $allPostVars['street'];
	$profile->suburb = $allPostVars['suburb'];
	$profile->postcode = $allPostVars['postcode'];
	$profile->state = $allPostVars['state'];
	$profile->gender = $allPostVars['gender'];
	$datetime = date_create()->format('Y-m-d');

	$profile->date_joined = $datetime;
	//echo ($profile->test());

	//print_r($allPostVars);
	//$profile = R::dispense('tasks');
	//$profile->task = $allPostVars['task'];
	//$profile->user_id = $allPostVars['user_id'];
	$id = R::store($profile);
	//echo $id;
	//$bandmember = R::load('userprofile', $id);
	//R::trash($bandmember);
	global $lifeCycle;
	echo $lifeCycle;

	exit;

	$response = array();
	$task = $app->request->post('task');
	$user_id = $app->request->post('user_id');
	// global $user_id;
	$db = new DbHandler();

	// creating new task
	$task_id = $db->createTask($user_id, $task);

	if ($task_id != NULL) {
		$response["error"] = false;
		$response["message"] = "Task created successfully";
		$response["task_id"] = $task_id;
		echoRespnse(201, $response);
	} else {
		$response["error"] = true;
		$response["message"] = "Failed to create task. Please try again";
		echoRespnse(200, $response);
	}
});

/**
 * Creating new fresh user profile
 * first time profile create (upon registration)
 * method POST
 * params  - name
 *         - d.o.b
 *         - email
 *         - phone_home
 *         - phone_mob
 *         - contact_preffered
 *         - Unit_house_number
 *         - Propery_name
 *         - street_name
 *         - Suburb
 *         - state
 *         - postcode
 *         - gender
 *         - no_children
 *         - relationship_status
 *
 *
 * url - /profile/create
 */
$app->post('/profile/create', function () use ($app) {
	// check for required params
	verifyRequiredParams(array('profile'));

	$response = array();
	$profile = $app->request->post('profile');
	$user_id = $app->request->post('user_id');
	// global $user_id;
	$db = new DbHandler();

	// creating new task
	$profile_id = $db->createProfile($user_id, $profile);

	if ($task_id != NULL) {
		$response["error"] = false;
		$response["message"] = "Task created successfully";
		$response["task_id"] = $task_id;
		echoRespnse(201, $response);
	} else {
		$response["error"] = true;
		$response["message"] = "Failed to create task. Please try again";
		echoRespnse(200, $response);
	}
});

/**
 * Updating existing task
 * method PUT
 * params task, status
 * url - /tasks/:id
 */
$app->put('/tasks/:id', 'authenticate', function ($task_id) use ($app) {
	// check for required params
	verifyRequiredParams(array('task', 'status'));

	global $user_id;
	$task = $app->request->put('task');
	$status = $app->request->put('status');

	$db = new DbHandler();
	$response = array();

	// updating task
	$result = $db->updateTask($user_id, $task_id, $task, $status);
	if ($result) {
		// task updated successfully
		$response["error"] = false;
		$response["message"] = "Task updated successfully";
	} else {
		// task failed to update
		$response["error"] = true;
		$response["message"] = "Task failed to update. Please try again!";
	}
	echoRespnse(200, $response);
});

/**
 * Deleting task. Users can delete only their tasks
 * method DELETE
 * url /tasks
 */
$app->delete('/tasks/:id', 'authenticate', function ($task_id) use ($app) {
	global $user_id;

	$db = new DbHandler();
	$response = array();
	$result = $db->deleteTask($user_id, $task_id);
	if ($result) {
		// task deleted successfully
		$response["error"] = false;
		$response["message"] = "Task deleted succesfully";
	} else {
		// task failed to delete
		$response["error"] = true;
		$response["message"] = "Task failed to delete. Please try again!";
	}
	echoRespnse(200, $response);
});

/**
 * Verifying required params posted or not
 */
function verifyRequiredParams($required_fields) {
	$error = false;
	$error_fields = "";
	$request_params = array();
	$request_params = $_REQUEST;
	// Handling PUT request params
	if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
		$app = \Slim\Slim::getInstance();
		parse_str($app->request()->getBody(), $request_params);
	}
	foreach ($required_fields as $field) {
		if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
			$error = true;
			$error_fields .= $field . ', ';
		}
	}

	if ($error) {
		// Required field(s) are missing or empty
		// echo error json and stop the app
		$response = array();
		$app = \Slim\Slim::getInstance();
		$response["error"] = true;
		$response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
		echoRespnse(400, $response);
		$app->stop();
	}
}

/**
 * Validating email address
 */
function validateEmail($email) {
	$app = \Slim\Slim::getInstance();
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$response["error"] = true;
		$response["message"] = 'Email address is not valid';
		echoRespnse(400, $response);
		$app->stop();
	}
}

/**
 * Echoing json response to client
 * @param String $status_code Http response code
 * @param Int $response Json response
 */
function echoRespnse($status_code, $response) {
	$app = \Slim\Slim::getInstance();
	// Http response code
	$app->status($status_code);

	// setting response content type to json
	$app->contentType('application/json');

	echo json_encode($response);
}

$app->run();
?>