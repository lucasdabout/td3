<?php
namespace controllers\crud\viewers;

use Ajax\semantic\html\collections\form\HtmlFormInput;
use models\User;
use Ubiquity\controllers\crud\viewers\ModelViewer;
 /**
  * Class CrudUserControllerViewer
  */
class CrudUserControllerViewer extends ModelViewer{
	//use override/implement Methods
    public function getCaptions($captions, $className)
    {
        return ['Prénom','Nom','Organisatiooooooooooooooooooooooooooooooooooooooon'];
    }

    protected function getDataTableRowButtons()
    {
        return ['edit','display','delete'];
    }

    public function getModelDataTable($instances, $model, $totalCount, $page = 1)
    {
        $dt=parent::getModelDataTable($instances, $model, $totalCount, $page);
        $dt->fieldAsLabel('email','mail');
        $dt->setValueFunction('lastname',function($value,User $instance){
           return "<b>".strtoupper($value)."</b>";
        });
        return $dt;
    }

    public function getForm($identifier, $instance, $updateUrl = 'updateModel')
    {
        $form= parent::getForm($identifier,$instance,$updateUrl);
        $form->fieldAsHidden('id');
        $form->fieldAsInput('password',['inputType'=>'password','jsCallback'=>function(HtmlFormInput $input){
            $input->addTogglePasswordAction(type:1);
        }]);
        return $form;
    }

}
