<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_clientes".
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $celular
 * @property int $endereco
 * @property string $data_nascimento
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'telefone', 'celular', 'endereco', 'data_nascimento'], 'required'],
            [['endereco'], 'integer'],
            [['data_nascimento'], 'safe'],
            [['nome'], 'string', 'max' => 50],
            [['cpf', 'telefone', 'celular'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
            'endereco' => 'Endereco',
            'data_nascimento' => 'Data Nascimento',
        ];
    }
}
