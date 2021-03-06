<?php

/**
 * This is the model class for table "secciones_expediente".
 *
 * The followings are the available columns in table 'secciones_expediente':
 * @property integer $id_expediente
 * @property integer $id_seccion
 * @property string $fecha_entrada
 * @property string $fecha_salida
 * @property string $usuario_ult_act
 * @property string $fecha_ult_act
 */
class SeccionesExpediente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'secciones_expediente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_expediente, id_seccion', 'required'),
			array('id_expediente, id_seccion', 'numerical', 'integerOnly'=>true),
			array('usuario_ult_act', 'length', 'max'=>20),
			array('fecha_entrada, fecha_salida, fecha_ult_act', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_expediente, id_seccion, fecha_entrada, fecha_salida, usuario_ult_act, fecha_ult_act', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_expediente' => 'Id Expediente',
			'id_seccion' => 'Sección',
			'fecha_entrada' => 'Fecha de Entrada',
			'fecha_salida' => 'Fecha de Salida',
			'usuario_ult_act' => 'Usuario Ult Act',
			'fecha_ult_act' => 'Fecha Ult Act',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_expediente',$this->id_expediente);
		$criteria->compare('id_seccion',$this->id_seccion);
		$criteria->compare('fecha_entrada',$this->fecha_entrada,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('usuario_ult_act',$this->usuario_ult_act,true);
		$criteria->compare('fecha_ult_act',$this->fecha_ult_act,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SeccionesExpediente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
