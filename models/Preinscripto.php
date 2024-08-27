<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;



/**
 * This is the model class for table "preinscripto".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $concurso_id
 * @property string|null $doc
 *
 * @property Usuario $usuario
 * @property Concurso $concurso
 */
class Preinscripto extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'preinscripto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'concurso_id'], 'integer'],
            [['doc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'concurso_id' => Yii::t('app', 'Concurso ID'),
            'doc' => Yii::t('app', 'Doc'),
        ];
    }

    /**
     * Relación con el modelo Usuario
     * 
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'user_id']);
    }

    /**
     * Relación con el modelo Concurso
     * 
     * @return \yii\db\ActiveQuery
     */
    public function getConcurso()
    {
        return $this->hasOne(Concurso::class, ['id_concurso' => 'concurso_id']);
    }

    /**
     * {@inheritdoc}
     * @return PreinscriptoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PreinscriptoQuery(get_called_class());
    }



}
