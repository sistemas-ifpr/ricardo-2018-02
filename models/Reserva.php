<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $id
 * @property int $identificador
 * @property string $data_reserva
 * @property int $cliente
 * @property string $data_baixa_reserva
 * @property int $funcionario_reserva
 *
 * @property Clientes $cliente
 * @property Funcionarios $funcionarioReserva
 * @property Titulos $entificador
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['identificador', 'data_reserva', 'cliente', 'data_baixa_reserva', 'funcionario_reserva'], 'required'],
            [['identificador', 'cliente', 'funcionario_reserva'], 'integer'],
            [['data_reserva', 'data_baixa_reserva'], 'safe'],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente' => 'id']],
            [['funcionario_reserva'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionarios::className(), 'targetAttribute' => ['funcionario_reserva' => 'id']],
            [['identificador'], 'exist', 'skipOnError' => true, 'targetClass' => Titulos::className(), 'targetAttribute' => ['identificador' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificador' => 'Identificador',
            'data_reserva' => 'Data Reserva',
            'cliente' => 'Cliente',
            'data_baixa_reserva' => 'Data Baixa Reserva',
            'funcionario_reserva' => 'Funcionario Reserva',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarioReserva()
    {
        return $this->hasOne(Funcionarios::className(), ['id' => 'funcionario_reserva']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntificador()
    {
        return $this->hasOne(Titulos::className(), ['id' => 'identificador']);
    }
}
