<?php
namespace controllers;
use controllers\crud\datas\CrudUserControllerDatas;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\CrudUserControllerViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\CrudUserControllerEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\CrudUserControllerFiles;
use Ubiquity\controllers\crud\CRUDFiles;
use Ubiquity\attributes\items\router\Route;

#[Route(path: "/users",inherited: true,automated: true)]
class CrudUserController extends \Ubiquity\controllers\crud\CRUDController{

	public function __construct(){
		parent::__construct();
		\Ubiquity\orm\DAO::start();
		$this->model='models\\User';
		$this->style='';
	}

	public function _getBaseRoute() {
		return '/users';
	}
	
	protected function getAdminData(): CRUDDatas{
		return new CrudUserControllerDatas($this);
	}

	protected function getModelViewer(): ModelViewer{
		return new CrudUserControllerViewer($this,$this->style);
	}

	protected function getEvents(): CRUDEvents{
		return new CrudUserControllerEvents($this);
	}

	protected function getFiles(): CRUDFiles{
		return new CrudUserControllerFiles();
	}


}
