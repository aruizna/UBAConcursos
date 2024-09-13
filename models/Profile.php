<?php

namespace app\models;

use Yii;
use Da\User\Model\User;

/**
 * This is the model class for table "profile".
 *
 * @property int $user_id
 * @property string|null $numero_documento
 * @property string|null $apellido
 * @property string|null $nombre
 * @property string|null $numero_legajo
 * @property string|null $id_trato
 * @property string|null $sexo
 * @property string|null $email
 * @property string|null $numero_celular_sms
 * @property string|null $proveedor_celular
 * @property int|null $gdpr_consent
 * @property string|null $cuil
 * @property string|null $estado_civil
 * @property string|null $conyuge
 * @property string|null $madre
 * @property string|null $padre
 * @property string|null $nacimiento_localidad
 * @property string|null $nacimiento_fecha
 * @property string|null $nacimiento_expedido
 * @property string|null $nacimiento_pais
 * @property string|null $domicilio_calle
 * @property string|null $domicilio_numero
 * @property string|null $domicilio_piso
 * @property string|null $domicilio_departamento
 * @property string|null $domicilio_codigo_postal
 * @property string|null $domicilio_localidad
 * @property string|null $domicilio_provincia
 * @property string|null $domicilio_pais
 * @property string|null $titulos_obtenidos
 * @property string|null $antecedentes_docentes
 * @property string|null $antecedentes_cientificos
 * @property string|null $cursos
 * @property string|null $congresos
 * @property string|null $actuacion_universidades
 * @property string|null $formacion_rrhh
 * @property string|null $sintesis_aportes
 * @property string|null $sintesis_profesional
 * @property string|null $otros_antecedentes
 * @property string|null $labor_docente
 * @property string|null $renovacion
 * @property string|null $cid
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    const SCENARIO_DEFAULT = 'default';
    const SCENARIO_DOCENTE = 'docente';

    public string $cid = '0';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    public function rules()
    {
        return [
            // Reglas para el escenario de agregar docente
            [['numero_documento', 'apellido', 'nombre'], 'required', 'on' => self::SCENARIO_DOCENTE, 'message' => 'Este campo es obligatorio.'],
            [['user_id'], 'integer', 'on' => self::SCENARIO_DOCENTE],
            [['user_id'], 'default', 'value' => 0, 'on' => self::SCENARIO_DOCENTE], // Asegura que 0 es aceptado en este escenario
            // Reglas para el escenario por defecto
            [['numero_documento', 'user_id', 'apellido', 'nombre', 'email', 'cuil', 'nacimiento_localidad', 'nacimiento_expedido', 'nacimiento_pais', 'domicilio_calle', 'domicilio_numero', 'domicilio_codigo_postal', 'domicilio_localidad', 'domicilio_provincia', 'domicilio_pais', 'nacimiento_fecha', 'estado_civil', 'numero_celular_sms'], 'required', 'on' => self::SCENARIO_DEFAULT],
            [['user_id', 'gdpr_consent', 'concurso_id'], 'integer'],
            [['titulos_obtenidos', 'antecedentes_docentes', 'antecedentes_cientificos', 'cursos', 'congresos', 'actuacion_universidades', 'formacion_rrhh', 'sintesis_aportes', 'sintesis_profesional', 'otros_antecedentes', 'labor_docente', 'renovacion', 'cargo_actual'], 'string'],
            [['numero_documento'], 'string', 'max' => 12],
            [['apellido', 'nombre', 'email'], 'string', 'max' => 100],
            [['numero_legajo', 'id_trato'], 'string', 'max' => 50],
            [['proveedor_celular'], 'string', 'max' => 10],
            [['domicilio_codigo_postal'], 'string', 'max' => 8],
            [['domicilio_codigo_postal'], 'string', 'min' => 4],
            [['cuil'], 'integer'],
            [['sexo'], 'string', 'max' => 20],
            [['numero_celular_sms'], 'string', 'max' => 15],
            [['cuil', 'estado_civil', 'conyuge', 'madre', 'padre', 'nacimiento_localidad', 'nacimiento_expedido', 'nacimiento_pais', 'domicilio_calle', 'domicilio_numero', 'domicilio_piso', 'domicilio_departamento', 'domicilio_codigo_postal', 'domicilio_localidad', 'domicilio_provincia', 'domicilio_pais'], 'string', 'max' => 45],
            [['cid'], 'safe'],
            [['cid'], 'string'],
            [['nacimiento_fecha'], function ($attribute, $params, $validator) {
                $date = strtotime($this->$attribute);
                $minAge = strtotime('-65 years -1 day');
                $maxAge = strtotime('-18 years');

                if ($date > $maxAge || $date < $minAge) {
                    $this->addError($attribute, 'The person must be between 18 and 65 years old.');
                }
            }],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'numero_documento' => Yii::t('app', 'Numero Documento'),
            'apellido' => Yii::t('app', 'Apellido'),
            'nombre' => Yii::t('app', 'Nombre'),
            'numero_legajo' => Yii::t('app', 'Numero Legajo'),
            'id_trato' => Yii::t('app', 'Id Trato'),
            'sexo' => Yii::t('app', 'Sexo'),
            'email' => Yii::t('app', 'Email'),
            'numero_celular_sms' => Yii::t('app', 'Numero Celular Sms'),
            'proveedor_celular' => Yii::t('app', 'Proveedor Celular'),
            'gdpr_consent' => Yii::t('app', 'Gdpr Consent'),
            'cuil' => Yii::t('app', 'Cuil'),
            'estado_civil' => Yii::t('app', 'Estado Civil'),
            'conyuge' => Yii::t('app', 'Conyuge'),
            'madre' => Yii::t('app', 'Madre'),
            'padre' => Yii::t('app', 'Padre'),
            'nacimiento_localidad' => Yii::t('app', 'Localidad de Nacimiento'),
            'nacimiento_fecha' => Yii::t('app', 'Fecha de Nacimiento'),
            'nacimiento_expedido' => Yii::t('app', 'Provincia de Nacimiento'),
            'nacimiento_pais' => Yii::t('app', 'País de Nacimiento'),
            'domicilio_calle' => Yii::t('app', 'Calle de Domicilio'),
            'domicilio_numero' => Yii::t('app', 'Numero de Domicilio'),
            'domicilio_piso' => Yii::t('app', 'Piso de Departamenti'),
            'domicilio_departamento' => Yii::t('app', 'Número de Departamento'),
            'domicilio_codigo_postal' => Yii::t('app', 'Codigo Postal'),
            'domicilio_localidad' => Yii::t('app', 'Localidad de Domicilio'),
            'domicilio_provincia' => Yii::t('app', 'Provincia de Domicilio'),
            'domicilio_pais' => Yii::t('app', 'Pais de Domicilio'),
            'titulos_obtenidos' => Yii::t('app', 'Titulos Obtenidos'),
            'antecedentes_docentes' => Yii::t('app', 'Antecedentes Docentes'),
            'antecedentes_cientificos' => Yii::t('app', 'Antecedentes Cientificos'),
            'cursos' => Yii::t('app', 'Cursos'),
            'congresos' => Yii::t('app', 'Congresos'),
            'actuacion_universidades' => Yii::t('app', 'Actuacion Universidades'),
            'formacion_rrhh' => Yii::t('app', 'Formacion Rrhh'),
            'sintesis_aportes' => Yii::t('app', 'Sintesis Aportes'),
            'sintesis_profesional' => Yii::t('app', 'Sintesis Profesional'),
            'otros_antecedentes' => Yii::t('app', 'Otros Antecedentes'),
            'labor_docente' => Yii::t('app', 'Labor Docente'),
            'renovacion' => Yii::t('app', 'Renovacion'),
            'cargo_actual' => Yii::t('app', 'Cargo Actual'),
            'cid' => Yii::t('app', 'cid'),
            'concurso_id' => Yii::t('app', 'Concurso ID'),
            'id' => Yii::t('app', 'Profile ID'),
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    // Definir la relación HasOne hacia el modelo Concursos
    public function getConcursos()
    {
        return $this->hasOne(Concurso::class, ['id_concurso' => 'concurso_id']);
    }

    // Definir la relación HasOne hacia el modelo Concursos
    public function getCargosActuales()
    {
        return $this->hasMany(CargosActuales::class, ['profile_id' => 'id']);
    }

    /**
     * Agregar un nuevo docente a la base de datos
     *
     * @param string $dni
     * @param string $apellido
     * @param string $nombre
     * @return array
     */
    public static function agregarDocente($dni, $apellido, $nombre)
    {
        if (empty($dni) || empty($apellido) || empty($nombre)) {
            return ['success' => false, 'message' => 'Todos los campos son obligatorios.'];
        }
    
        if (self::findOne(['numero_documento' => $dni])) {
            return ['success' => false, 'message' => 'El docente ya existe.'];
        }
    
        $docente = new self();
        $docente->scenario = self::SCENARIO_DOCENTE; // Establecer el escenario docente
        $docente->numero_documento = $dni;
        $docente->apellido = $apellido;
        $docente->nombre = $nombre;
        $docente->user_id = 0; // Ajusta según sea necesario

        if ($docente->validate() && $docente->save()) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Error al guardar el docente.', 'errors' => $docente->errors];
        }
    }

    /**
     * {@inheritdoc}
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
}
