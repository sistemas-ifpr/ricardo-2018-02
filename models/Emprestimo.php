<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $id
 * @property int $identificador
 * @property string $data_emprestimo
 * @property int $cliente
 * @property int $funcionario_reserva
 *
 * @property Clientes $cliente
 * @property Funcionarios $funcionarioReserva
 * @property Titulos $entificador
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['identificador', 'data_emprestimo', 'cliente', 'funcionario_reserva'], 'required'],
            [['identificador', 'cliente', 'funcionario_reserva'], 'integer'],
            [['data_emprestimo'], 'safe'],
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
            'data_emprestimo' => 'Data Emprestimo',
            'cliente' => 'Cliente',
            'funcionario_reserva' => 'Funcionario Reserva',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
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
