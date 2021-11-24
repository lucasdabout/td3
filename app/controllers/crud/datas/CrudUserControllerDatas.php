<?php
namespace controllers\crud\datas;

use Ubiquity\controllers\crud\CRUDDatas;
 /**
  * Class CrudUserControllerDatas
  */
class CrudUserControllerDatas extends CRUDDatas{
	//use override/implement Methods
    public function getFieldNames($model)
    {
        return ['firstname','lastname','email'];
    }
}
