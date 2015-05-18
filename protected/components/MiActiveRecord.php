<?php

class MiActiveRecord extends CActiveRecord {

    public static $db1;

    public function behaviors() {
        return array(
            'CamposBehavior' => array(
                'class' => 'ext.CamposBehavior',
//                'campoFechaCreacion' => 'creado',
                'campoFechaActualizacion' => 'fecha_ult_act',
                'campoUsuarioCC' => 'usuario_ult_act',
//                'campoIp' => 'ip',
            ),
        );
    }

    protected static function getDatos1DbConnection() {
        if (self::$db1 != null)
            return self::$db1;
        else {
            self::$db1 = Yii::app()->db1;
            if (self::$db1 instanceof CDbConnection) {
                self::$db1->setActive(true);
                return self::$db1;
            } else
                throw new CDbException(Yii::t('yii', 'Active Record requires a "db1" CDbConnection application component.'));
        }
    }

}
