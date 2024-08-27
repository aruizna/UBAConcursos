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


    public function actionNominaPreinscriptos()
    {
        $expediente = Yii::$app->request->get('expediente');
        $unidad_academica = Yii::$app->request->get('unidad_academica');

        $query = (new \yii\db\Query())
            ->select([
                'user.username',
                'user.email',
                'concurso.numero_expediente',
                'concurso.id_tipo_concurso',
                'concurso.id_facultad',
                'concurso.id_categoria',
                'concurso.id_dedicacion',
                'concurso.id_area_departamento',
                'concurso.cantidad_de_puestos',
                'concurso.fecha_inicio_inscripcion',
                'concurso.fecha_fin_inscripcion',
                'concurso.hora_inicio_inscripcion',
                'concurso.hora_fin_inscripcion',
                'concurso.fecha_publicacion',
                'preinscripto.doc'
            ])
            ->from('preinscripto')
            ->innerJoin('user', 'preinscripto.user_id = user.id')
            ->innerJoin('concurso', 'preinscripto.concurso_id = concurso.id_concurso');

        if ($expediente) {
            $query->andWhere(['concurso.numero_expediente' => $expediente]);
        }

        if ($unidad_academica) {
            $query->andWhere(['concurso.id_facultad' => $unidad_academica]);
        }

        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        $expedientesList = Concurso::find()
            ->select(['numero_expediente'])
            ->where(['>=', 'fecha_fin_inscripcion', date('Y-m-d')])
            ->indexBy('numero_expediente')
            ->column();

        $facultadesList = Facultad::find()
            ->select(['nombre_facultad'])
            ->indexBy('id_facultad')
            ->column();

        return $this->render('manage/nomina-preinscriptos', [
            'dataProvider' => $dataProvider,
            'expedientesList' => $expedientesList,
            'facultadesList' => $facultadesList,
        ]);
    }

}
