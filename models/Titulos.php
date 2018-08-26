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
 */
class Titulos extends \yii\db\ActiveRecord
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
            [['titulo', 'artista', 'descricao', 'ano_lancamento'], 'required'],
            [['descricao'], 'integer'],
            [['ano_lancamento'], 'safe'],
            [['titulo', 'artista'], 'string', 'max' => 50],
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
        ];
    }
}
