<?php

define('REDBEAN_MODEL_PREFIX', '');
$lifeCycle = '';
class funeralinsuranceprofile extends \RedBeanPHP\SimpleModel {

	public function open() {
		global $lifeCycle;
		$lifeCycle .= "called open: " . $this->id;
	}

	public function update() {
		global $lifeCycle;
		$lifeCycle .= "called update() " . $this->bean;

		// validation check for firstname length > 2
		if (strlen($this->bean->firstname) < 2) {
			throw new Exception('Sorry firstname must be longer than 2 characters');
		}

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