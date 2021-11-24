<?php
namespace controllers\crud\files;

use Ubiquity\controllers\crud\CRUDFiles;
 /**
  * Class CrudUserControllerFiles
  */
class CrudUserControllerFiles extends CRUDFiles{
	public function getViewIndex(){
		return "CrudUserController/index.html";
	}

	public function getViewForm(){
		return "CrudUserController/form.html";
	}

	public function getViewDisplay(){
		return "CrudUserController/display.html";
	}


}
