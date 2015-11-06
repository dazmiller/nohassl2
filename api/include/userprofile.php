<?php

define('REDBEAN_MODEL_PREFIX', '');
$lifeCycle = '';
class userprofile extends \RedBeanPHP\SimpleModel {

	public function test() {
		return "TEST";
	}
	public function open() {
		global $lifeCycle;
		echo "called open: " . $this->id;
	}
	public function dispense() {
		global $lifeCycle;
		$lifeCycle .= "called dispense()<BR> " . $this->bean;
	}
	public function update() {
		global $lifeCycle;
		$lifeCycle .= "called update() " . $this->bean;
	}
	public function after_update() {
		global $lifeCycle;
		$lifeCycle .= "called after_update() " . $this->bean;
	}
	public function delete() {
		global $lifeCycle;
		$lifeCycle .= "called delete() " . $this->bean;
	}
	public function after_delete() {
		global $lifeCycle;
		$lifeCycle .= "called after_delete() " . $this->bean;
	}

}

?>