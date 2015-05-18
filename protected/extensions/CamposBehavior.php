<?php
class CamposBehavior extends CActiveRecordBehavior {
	
	public $campoFechaActualizacion = 'fecha_ult_act';
	public $campoUsuarioCC = 'usuario_ult_act';

	public $setActualizacionAlCrear = true;

	public function beforeSave($event) {

            $this->getOwner()->{$this->campoFechaActualizacion} = date('Y-m-d H:i:s');
            $this->getOwner()->{$this->campoUsuarioCC} = Yii::app()->user->name;
	}

}