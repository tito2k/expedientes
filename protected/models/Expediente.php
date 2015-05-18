<?php

/**
 * This is the model class for table "expediente".
 *
 * The followings are the available columns in table 'expediente':
 * @property integer $id
 * @property integer $nro_entrada
 * @property integer $correlativo
 * @property string $memorando
 * @property string $oficio
 * @property string $fecha_entrada
 * @property string $descripcion
 * @property string $usuario_ult_act
 * @property string $fecha_ult_act
 *
 * The followings are the available model relations:
 * @property Seccion[] $seccions
 */
class Expediente extends MiActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expediente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'required'),
			array('correlativo', 'validarNoTodosVacios'),
			array('nro_entrada', 'numerical'),
			array('memorando, oficio', 'length', 'max'=>15),
			array('usuario_ult_act', 'length', 'max'=>20),
			array('fecha_ult_act', 'length', 'max'=>45),
			array('fecha_entrada', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nro_entrada, correlativo, memorando, oficio, fecha_entrada, descripcion, usuario_ult_act, fecha_ult_act', 'safe', 'on'=>'search'),
		);
	}

	public function validarNoTodosVacios($attribute, $params) {
		if ( (strlen($this->correlativo) == 0) and  (strlen($this->memorando) == 0) and (strlen($this->oficio) == 0) ) {
			$this->addError($attribute, "Debe ingresar Correlativo, Memorando u Oficio");
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'seccions' => array(self::MANY_MANY, 'Seccion', 'secciones_expediente(id_expediente, id_seccion)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nro_entrada' => 'Nro. Entrada',
			'correlativo' => 'Correlativo',
			'memorando' => 'Memorando',
			'oficio' => 'Oficio',
			'fecha_entrada' => 'Fecha de Entrada',
			'descripcion' => 'Descripción',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nro_entrada',$this->nro_entrada);
		$criteria->compare('correlativo',$this->correlativo);
		$criteria->compare('memorando',$this->memorando,true);
		$criteria->compare('oficio',$this->oficio,true);
		$criteria->compare('fecha_entrada',$this->fecha_entrada,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expediente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave() {

	    if (parent::beforeSave()) {

			if ($this->fecha_entrada!=null)
				$this->fecha_entrada = strftime('%Y-%m-%d', strtotime(str_replace("/", "-", $this->fecha_entrada)));

			if ($this->isNewRecord)	    	
	        	$this->nro_entrada=$this->dbConnection->createCommand('SELECT IFNULL(MAX(nro_entrada)+1,1) FROM expediente')->queryScalar();

	        return true;
		}
	}

}
