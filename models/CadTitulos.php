<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cad_titulos".
 *
 * @property int $id
 * @property string $titulo
 * @property string $artista
 * @property int $descricao
 * @property string $ano_lancamento
 * @property string $foto
 * @property string $tipo
 * @property Emprestimo[] $emprestimos
 * @property Reserva[] $reservas
 */
class CadTitulos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cad_titulos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'artista', 'descricao', 'ano_lancamento', 'foto', 'tipo'], 'required'],
            [['descricao'], 'integer'],
            [['ano_lancamento'], 'safe'],
            [['tipo'], 'string'],
            [['titulo', 'artista'], 'string', 'max' => 50],
            [['foto'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'artista' => 'Artista',
            'descricao' => 'Descricao',
            'ano_lancamento' => 'Ano Lancamento',
            'tipo' => 'Tipo',
            'foto' => 'Foto',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmprestimos()
    {
        return $this->hasMany(Emprestimo::className(), ['identificador' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::className(), ['identificador' => 'id']);
    }
}
