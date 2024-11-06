<?php

namespace app\controllers;

use yii\filters\AccessControl;

use app\models\AreaDepartamento;
use app\models\Asignatura;
use app\models\Carrera;
use app\models\Categoria;
use app\models\Concurso;
use app\models\ConcursoPendiente;
use app\models\ConcursoQuery;
use app\models\Dedicacion;
use app\models\Facultad;
use app\models\PersonasHistorico;
use app\models\Preinscripto;
use app\models\Profile;
use app\models\ProfileQuery;
use app\models\TipoConcurso;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\Fpdf\Fpdf;
use yii\helpers\FileHelper;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

/**
 * ConcursoController implements the CRUD actions for Concurso model.
 */
class ConcursoController extends Controller
{
    /**
     * @inheritDoc
     */
    // public function behaviors()
    // {
    //     return array_merge(
    //         parent::behaviors(),
    //         [
    //             'access' => [
    //                 'class' => AccessControl::class,
    //                 'rules' => [
    //                     [
    //                         'actions' => ['confirmar', 'descargar', 'previsualizar', 'preinscripcion', 'index', 'view', 'create', 'update', 'delete', 'area', 'formulario', 'tramite', 'desinscribir'],
    //                         'allow' => true,
    //                         'roles' => ['@'],
    //                     ],
    //                     [
    //                         'actions' => ['previsualizar', 'preinscripcion', 'index', 'view', 'create', 'update', 'delete', 'area', 'formulario', 'tramite'],
    //                         'allow' => false,
    //                         'roles' => ['?'],
    //                     ],
    //                 ],
    //             ],
    //             'verbs' => [
    //                 'class' => VerbFilter::className(),
    //                 'actions' => [
    //                     'delete' => ['POST'],
    //                 ],
    //             ],
    //         ]
    //     );
    // }

        /**
     * new ABM behavior
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'actions' => ['confirmar', 'descargar', 'previsualizar', 'preinscripcion', 'index', 'view', 'update', 'delete', 'area', 'formulario', 'tramite', 'desinscribir', 'pending', 'manage', 'publish', 'publish-confirm', 'get-departamentos', 'get-asignaturas', 'buscar-docente', 'nomina-preinscriptos', 'agregar-docente'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                        [
                            'actions' => ['create'],
                            'allow' => true,
                            'roles' => ['@'],
                            'matchCallback' => function ($rule, $action) {
                                return Yii::$app->user->identity->is_superuser;
                            },
                        ],
                        [
                            'actions' => ['previsualizar', 'preinscripcion', 'index', 'view', 'update', 'delete', 'area', 'formulario', 'tramite'],
                            'allow' => false,
                            'roles' => ['?'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    private $pdf;
    public function __construct($id, $module, $config = [])
    {
        $this->pdf = new Fpdi();
        parent::__construct($id, $module, $config);
    }

    public function actionPrevisualizar()
    {
        if ($this->request->isPost) {
            $id = $_POST['id'];
            $profile = Profile::findOne(['user_id' => Yii::$app->user->id, "concurso_id" => $id]);

            try {
                $adjuntos = FileHelper::findFiles('attachments/antecedentes', [
                    'only' => ['*' . $profile->cuil . '_' . '*' . 'pdf'],
                ]);
                $pdf = new Fpdi();
                $width = $pdf->GetPageWidth('A4') - 20;
                $lineHeight = 10; // Altura de cada línea

                $pdf->AddPage();
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->Cell(40, 10, 'Formulario de inscripcion', 0, 1);

                $pdf->SetFont('Arial', 'B', 14, '', true, 'UTF-8');
                $pdf->Cell(40, 10, 'Datos del Aspirante', 0, 1);

                ($profile->user_id) && $pdf->Cell(40, 10, 'userid: ' . Yii::$app->user->id, 0, 1);


                $pdf->SetFont('Arial', '', 12, '', true, 'UTF-8');
                ($profile->numero_documento) && $pdf->Cell(40, 10, 'Documento: ' . $profile->numero_documento, 0, 1);
                ($profile->cuil) && $pdf->Cell(40, 10, 'CUIL: ' . $profile->cuil, 0, 1);
                ($profile->apellido) && $pdf->Cell(40, 10, 'Apellido: ' . $profile->apellido, 0, 1);
                ($profile->nombre) && $pdf->Cell(40, 10, 'Nombre: ' . $profile->nombre, 0, 1);
                ($profile->numero_celular_sms) && $pdf->Cell(40, 10, 'Telefono: ' . $profile->numero_celular_sms, 0, 1);
                ($profile->email) && $pdf->Cell(40, 10, 'Email: ' . $profile->email, 0, 1);

                $pdf->SetFont('Arial', 'B', 14, '', true, 'UTF-8');
                $pdf->Cell(40, 10, 'Datos Filiatorios', 0, 1);

                $pdf->SetFont('Arial', '', 12, '', true, 'UTF-8');
                ($profile->estado_civil) && $pdf->Cell(40, 10, 'Estado civil: ' . $profile->estado_civil, 0, 1);
                ($profile->conyuge) && $pdf->Cell(40, 10, 'Nombre y Apellido del Conyuge / Concubino: ' . $profile->conyuge, 0, 1);
                ($profile->madre) && $pdf->Cell(40, 10, 'Nombre y Apellido de la Madre: ' . $profile->madre, 0, 1);
                ($profile->padre) && $pdf->Cell(40, 10, 'Nombre y Apellido del Padre: ' . $profile->padre, 0, 1);

                $pdf->SetFont('Arial', 'B', 14, '', true, 'UTF-8');
                $pdf->Cell(40, 10, 'Lugar y Fecha de Nacimiento', 0, 1);

                $fecha_nacimiento_parts = explode('-', $profile->nacimiento_fecha);
                if (count($fecha_nacimiento_parts) === 3) {
                    $profile->nacimiento_fecha = $fecha_nacimiento_parts[2] . '/' . $fecha_nacimiento_parts[1] . '/' . $fecha_nacimiento_parts[0];
                }

                $pdf->SetFont('Arial', '', 12, '', true, 'UTF-8');
                ($profile->nacimiento_fecha) && $pdf->Cell(40, 10, 'Fecha Nacimiento: ' . $profile->nacimiento_fecha, 0, 1);
                ($profile->nacimiento_localidad) && $pdf->Cell(40, 10, 'Localidad: ' . $profile->nacimiento_localidad, 0, 1);
                ($profile->nacimiento_expedido) && $pdf->Cell(40, 10, 'Autoridad de expedicion: ' . $profile->nacimiento_expedido, 0, 1);
                ($profile->nacimiento_pais) && $pdf->Cell(40, 10, 'Pais: ' . $profile->nacimiento_pais, 0, 1);

                $pdf->SetFont('Arial', 'B', 14, '', true, 'UTF-8');
                $pdf->Cell(40, 10, 'Domicilio', 0, 1);

                $pdf->SetFont('Arial', '', 12, '', true, 'UTF-8');
                ($profile->domicilio_calle) && $pdf->Cell(40, 10, 'Calle: ' . $profile->domicilio_calle, 0, 1);
                ($profile->domicilio_numero) && $pdf->Cell(40, 10, 'Numero: ' . $profile->domicilio_numero, 0, 1);
                ($profile->domicilio_piso) && $pdf->Cell(40, 10, 'Piso: ' . $profile->domicilio_piso, 0, 1);
                ($profile->domicilio_departamento) && $pdf->Cell(40, 10, 'Departamento: ' . $profile->domicilio_departamento, 0, 1);
                ($profile->domicilio_codigo_postal) && $pdf->Cell(40, 10, 'CP: ' . $profile->domicilio_codigo_postal, 0, 1);
                ($profile->domicilio_localidad) && $pdf->Cell(40, 10, 'Localidad: ' . $profile->domicilio_localidad, 0, 1);
                ($profile->domicilio_provincia) && $pdf->Cell(40, 10, 'Provincia: ' . $profile->domicilio_provincia, 0, 1);
                ($profile->domicilio_pais) && $pdf->Cell(40, 10, 'Pais: ' . $profile->domicilio_pais, 0, 1);

                $pdf->SetFont('Arial', 'B', 14, '', true, 'UTF-8');
                $pdf->Cell(40, 10, 'Antecedentes', 0, 1);
                $pdf->SetFont('Arial', '', 12, '', true, 'UTF-8');
                ($profile->titulos_obtenidos) && $pdf->MultiCell($width, 10, utf8_decode('TITULOS UNIVERSITARIOS OBTENIDOS: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->titulos_obtenidos) / $width);
                $height = $lines * $lineHeight;
                ($profile->titulos_obtenidos) && $pdf->MultiCell($width, 10, utf8_decode($profile->titulos_obtenidos), 0, 'L');

                ($profile->antecedentes_docentes) && $pdf->MultiCell($width, 10, utf8_decode('ANTECEDENTES DOCENTES E INDOLE DE LAS TAREAS DESARROLLADAS: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->antecedentes_docentes) / $width);
                $height = $lines * $lineHeight;
                ($profile->antecedentes_docentes) && $pdf->MultiCell($width, 10, utf8_decode($profile->antecedentes_docentes), 0, 'L');

                ($profile->antecedentes_cientificos) && $pdf->MultiCell($width, 10, utf8_decode('ANTECEDENTES CIENTÍFICOS, CONSIGNANDO LAS PUBLICACIONES: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->antecedentes_cientificos) / $width);
                $height = $lines * $lineHeight;
                ($profile->antecedentes_cientificos) && $pdf->MultiCell($width, 10, utf8_decode($profile->antecedentes_cientificos), 0, 'L');

                ($profile->cursos) && $pdf->MultiCell($width, 10, utf8_decode('CURSOS DE ESPECIALIZACIÓN SEGUIDOS, CONFERENCIAS Y TRABAJOS DE INVESTIGACIÓN REALIZADOS SEAN ELLOS EDITOS O INEDITOS: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->cursos) / $width);
                $height = $lines * $lineHeight;
                ($profile->cursos) && $pdf->MultiCell($width, 10, utf8_decode($profile->cursos), 0, 'L');

                ($profile->congresos) && $pdf->MultiCell($width, 10, utf8_decode('PARTICIPACIÓN EN CONGRESOS O ACONTECIMIENTOS SIMILARES NACIONALES O INTERNACIONALES: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->congresos) / $width);
                $height = $lines * $lineHeight;
                ($profile->congresos) && $pdf->MultiCell($width, 10, utf8_decode($profile->congresos), 0, 'L');

                ($profile->actuacion_universidades) && $pdf->MultiCell($width, 10, utf8_decode('1- ACTUACIÓN EN UNIVERSIDADES E INSTITUTOS NACIONALES, PROVINCIALES Y PRIVADOS REGISTRADOS EN EL PAIS O EN EL EXTERIOR'), 0, 'L');
                ($profile->actuacion_universidades) && $pdf->MultiCell($width, 10, utf8_decode('2- CARGOS QUE DESEMPEÑO O DESEMPEÑA EN LA ADMINISTRACIÓN PÚBLICA O EN LA ACTIVIDAD PRIVADA, EN EL PAIS O EN EL EXTRANJERO: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->actuacion_universidades) / $width);
                $height = $lines * $lineHeight;
                ($profile->actuacion_universidades) && $pdf->MultiCell($width, 10, utf8_decode($profile->actuacion_universidades), 0, 'L');

                ($profile->formacion_rrhh) && $pdf->MultiCell($width, 10, utf8_decode('FORMACIÓN DE RECURSOS HUMANOS: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->formacion_rrhh) / $width);
                $height = $lines * $lineHeight;
                ($profile->formacion_rrhh) && $pdf->MultiCell($width, 10, utf8_decode($profile->formacion_rrhh), 0, 'L');

                ($profile->sintesis_aportes) && $pdf->MultiCell($width, 10, utf8_decode('SÍNTESIS DE LOS APORTES ORIGINALES EFECTUADOS EN EL EJERCICIO DE LA ESPECIALIDAD RESPECTIVA: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->sintesis_aportes) / $width);
                $height = $lines * $lineHeight;
                ($profile->sintesis_aportes) && $pdf->MultiCell($width, 10, utf8_decode($profile->sintesis_aportes), 0, 'L');

                ($profile->sintesis_profesional) && $pdf->MultiCell($width, 10, utf8_decode('SÍNTESIS DE LA ACTUACIÓN PROFESIONAL Y/O DE EXTENSIÓN UNIVERSITARIA: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->sintesis_profesional) / $width);
                $height = $lines * $lineHeight;
                ($profile->sintesis_profesional) && $pdf->MultiCell($width, 10, utf8_decode($profile->sintesis_profesional), 0, 'L');

                ($profile->otros_antecedentes) && $pdf->MultiCell($width, 10, utf8_decode('OTROS ELEMENTOS DE JUICIO QUE CONSIDERE VALIOSOS: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->otros_antecedentes) / $width);
                $height = $lines * $lineHeight;
                ($profile->otros_antecedentes) && $pdf->MultiCell($width, 10, utf8_decode($profile->otros_antecedentes), 0, 'L');

                ($profile->labor_docente) && $pdf->MultiCell($width, 10, utf8_decode('PLAN DE LABOR DOCENTE, DE INVESTIGACIÓN CIENTÍFICA Y TECNOLÓGICA Y DE EXTENSIÓN UNIVERSITARIA QUE, EN LÍNEAS GENERALES, DESARROLLARÁ EN CASO DE OBTENER EL CARGO CONCURSADO: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->labor_docente) / $width);
                $height = $lines * $lineHeight;
                ($profile->labor_docente) && $pdf->MultiCell($width, 10, utf8_decode($profile->labor_docente), 0, 'L');

                ($profile->renovacion) && $pdf->MultiCell($width, 10, utf8_decode('INFORME DE LOS PROFESORES QUE RENUEVAN SOBRE EL CUMPLIMIENTO DEL PLAN DE ACTIVIDADES DOCENTES, DE INVESTIGACIÓN Y/O EXTENSIÓN PRESENTADO EN EL CONCURSO ANTERIOR: '), 0, 'L');
                $lines = ceil($pdf->GetStringWidth($profile->renovacion) / $width);
                $height = $lines * $lineHeight;
                ($profile->renovacion) && $pdf->MultiCell($width, 10, utf8_decode($profile->renovacion), 0, 'L');

                // $pdf->SetLanguageArray('UTF-8');
                $pdf->Output('attachments/formularios/tmp.pdf', 'F');

                if (filesize('attachments/formularios/tmp.pdf') > 50000000) {
                    Yii::$app->session->setFlash('error', 'El formulatio debe tener peso un máximo de 50MB');
                    return true;
                }
                $pdf->Output('attachments/formularios/Recibo_Preinscripcion-' . $profile->cuil . '_' . $id . '.pdf', 'F');
            } catch (Exception $e) {
                Error($e->getMessage());
                Yii::$app->session->setFlash('error', 'Hubo un error al preinscribirse');
                return false;
            }
        }
        return false;
    }


    public function actionConfirmar()
    {
        $id = Yii::$app->request->post('id');
        $preinscripto = new Preinscripto();
        $preinscripto->user_id = Yii::$app->user->id;
        $preinscripto->concurso_id = $id;

        if ($preinscripto->save(false)) {
            Yii::$app->session->setFlash('success', 'Se preinscribió correctamente');
            return true;
        }
        return false;
    }

    public function actionDescargar($ruta)
    {
        $rutaCompleta = 'attachments/formularios/' . $ruta;
        // return($rutaCompleta);


        // if (file_exists($rutaCompleta)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($rutaCompleta) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($rutaCompleta));
        readfile($rutaCompleta);
        exit;
        // } 
    }

    public function actionDesinscribir()
    {
        if ($this->request->isPost) {
            try {
                $pid = $_POST['pid'];

                $profile = Profile::findOne(['user_id' => Yii::$app->user->id]);
                $preinscripciones = Preinscripto::find()->where(['user_id' => Yii::$app->user->id, 'concurso_id' => $pid])->all();


                foreach ($preinscripciones as $preinscripcion) {
                    $concurso = Concurso::findOne(['id_concurso' => $preinscripcion->concurso_id]);
                    $facultad = Facultad::findOne(['id_facultad' => $concurso->id_facultad]);


                    $files = FileHelper::findFiles('attachments/formularios', [
                        'only' => ['*' . $profile->cuil . '_' . $concurso->id_concurso . '*' . 'pdf'],
                    ]);
                    foreach ($files as $file) {
                        FileHelper::unlink($file);
                    }

                    $preinscripcion->delete();
                }
                return json_encode(['success' => true]);
            } catch (Throwable $e) {
                return json_encode(['error' => false]);
            }
        }
    }

    public function actionIndex($ua = '%', $ar = '%')
    {
        $profile = Profile::find(['user_id' => Yii::$app->user->id])->one();
        
        // Ajuste: Filtrar concursos cuya inscripción ya haya comenzado
        $searchModel = Concurso::find()->where(['<=', 'fecha_inicio_inscripcion', date('Y-m-d H:i:s')]);
        
        $dataProvider = new ActiveDataProvider([
            'query' => $searchModel,
            'sort' => [
                'defaultOrder' => [
                    'id_concurso' => SORT_DESC,
                ]
            ],
        ]);
    
        $facultad = Facultad::find("id_facultad", "nombre_facultad")->orderBy(['nombre_facultad' => SORT_ASC])->all();
    
        return $this->render('index', [
            'model' => $dataProvider,
            'searchModel' => $searchModel,
            'facultad' => $facultad,
            'ua' => $ua,
            'ar' => $ar,
            'profile' => $profile
        ]);
    }
    
    public function actionPreinscripcion($id)
    {
        $concurso = Concurso::findOne(['id_concurso' => $id]);
    
        // Restricción para permitir preinscripción solo si ya ha comenzado la inscripción
        if (strtotime($concurso->fecha_inicio_inscripcion) > time()) {
            Yii::$app->session->setFlash('error', 'La inscripción para este concurso aún no ha comenzado.');
            return $this->redirect(['index']);
        }
    
        $preinscripto = new Preinscripto();
        $preinscripto->user_id = Yii::$app->user->id;
        $preinscripto->concurso_id = $id;
        $profile = Profile::findOne(['user_id' => Yii::$app->user->id]);
    
        $file = FileHelper::findFiles('attachments/formularios', [
            'only' => ['*' . $profile->cuil . '_' . $id . '*' . 'pdf'],
        ]);
    
        if ($this->request->isPost) {
            if ($preinscripto->save(false)) {
                Yii::$app->session->setFlash('success', 'Se preinscribió correctamente');
                return true;
            }
            return false;
        }
        
        return $this->renderPartial('_preinscribirse', [
            'file' => basename($file[0]),
            'id' =>  $id
        ]);
    }
    

    public function actionViewNominaPreinscriptos($id_concurso)
    {
        $query = (new Query())
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
            ])
            ->from('preinscripto')
            ->innerJoin('user', 'preinscripto.user_id = user.id')
            ->innerJoin('concurso', 'preinscripto.concurso_id = concurso.id_concurso')
            ->where(['concurso.id_concurso' => $id_concurso]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('nomina-preinscriptos', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Concurso model.
     * @param int $id_concurso Id Concurso
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_concurso)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_concurso),
        ]);
    }

    // /**
    //  * Creates a new Concurso model.
    //  * If creation is successful, the browser will be redirected to the 'view' page.
    //  * @return string|\yii\web\Response
    //  */
    // public function actionCreate()
    // {
    //     $model = new Concurso();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id_concurso' => $model->id_concurso]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }


    /**
      * New intermediate Concurso model, this creates a pending approval Concurso
      * If creation is successful, the browser will be redirected to the 'index' page.
      * @return string|\yii\web\Response
    */
public function actionCreate()
{
    $model = new ConcursoPendiente();

    // Obtener datos para los desplegables
    $tiposConcurso = TipoConcurso::find()->all();
    $tiposConcursoList = ArrayHelper::map($tiposConcurso, 'id_tipo_concurso', 'descripcion_tipo_concurso');

    $facultades = Facultad::find()->all();
    $facultadesList = ArrayHelper::map($facultades, 'id_facultad', 'nombre_facultad');

    $categorias = Categoria::find()->where(['mostrar_en_propuesta' => 's'])->all();
    $categoriasList = ArrayHelper::map($categorias, 'id_categoria', 'descripcion_categoria');

    $dedicaciones = Dedicacion::find()->all();
    $dedicacionesList = ArrayHelper::map($dedicaciones, 'id_dedicacion', 'descripcion_dedicacion');

    $asignaturas = Asignatura::find()->all();
    $asignaturasList = ArrayHelper::map($asignaturas, 'id_asignatura', 'descripcion_asignatura');

    if ($this->request->isPost && $model->load($this->request->post())) {
        Yii::info("Datos POST recibidos: " . json_encode($this->request->post()), __METHOD__);

        // Asignación de asignaturas_seleccionadas en formato JSON
        $asignaturasSeleccionadas = Yii::$app->request->post('ConcursoPendiente')['asignaturas_seleccionadas'] ?? '[]';
        if (is_string($asignaturasSeleccionadas)) {
            $model->asignaturas_seleccionadas = $asignaturasSeleccionadas;
        } elseif (is_array($asignaturasSeleccionadas)) {
            $model->asignaturas_seleccionadas = json_encode($asignaturasSeleccionadas);
        }

        // Procesar el valor del docente seleccionado desde el campo oculto
        $model->docente = Yii::$app->request->post('ConcursoPendiente')['docente'] ?? null;

        Yii::info("Valor de asignaturas_seleccionadas antes de guardar: " . $model->asignaturas_seleccionadas, __METHOD__);

        // Validación y guardado del modelo
        if ($model->validate() && $model->save()) {
            Yii::$app->session->setFlash('success', 'Concurso pendiente creado correctamente.');
            return $this->redirect(['index']);
        } else {
            Yii::$app->session->setFlash('error', 'Error al guardar el concurso pendiente: ' . Json::encode($model->errors));
        }
    }

    return $this->render('manage/create', [
        'model' => $model,
        'tiposConcursoList' => $tiposConcursoList,
        'facultadesList' => $facultadesList,
        'categoriasList' => $categoriasList,
        'dedicacionesList' => $dedicacionesList,
    ]);
}



    
    
    // Acción para obtener los departamentos (áreas)
    public function actionGetDepartamentos($id_facultad)
    {
        $departamentos = AreaDepartamento::find()
            ->where(['id_facultad' => $id_facultad, 'activa' => 1])
            ->all();

        return $this->asJson(ArrayHelper::map($departamentos, 'id_area_departamento', 'descripcion_area_departamento'));
    }

    // Acción para obtener asignaturas
    public function actionGetAsignaturas($term = '', $id_facultad = null)
    {
        $query = Asignatura::find()->where(['like', 'descripcion_asignatura', $term]);

        if ($id_facultad) {
            $query->andWhere(['id_facultad' => $id_facultad]);
        }

        $asignaturas = $query->all();

        $result = [];
        foreach ($asignaturas as $asignatura) {
            $result[] = [
                'label' => $asignatura->descripcion_asignatura,
                'value' => $asignatura->id_asignatura,
            ];
        }

        return $this->asJson($result);
    }

    public function actionBuscarDocente()
    {
        $dni = Yii::$app->request->get('dni');
        $apellido = Yii::$app->request->get('apellido');
        $nombre = Yii::$app->request->get('nombre');
        $page = Yii::$app->request->get('page', 1); // Página actual, por defecto es 1
        $pageSize = 10; // Número de resultados por página, ajusta según sea necesario
    
  
        $query = Profile::find();
    
        if ($dni) {
            $query->andWhere(['numero_documento' => $dni]);
        }
        if ($apellido) {
            $query->andWhere(['like', 'apellido', $apellido]);
        }
        if ($nombre) {
            $query->andWhere(['like', 'nombre', $nombre]);
        }
    
        // Contar el total de resultados
        $totalCount = $query->count();
    
        // Calcular el offset y limitar los resultados para la paginación
        $query->offset(($page - 1) * $pageSize)
              ->limit($pageSize);
    
        // Obtener los resultados paginados
        $resultados = $query->all();
    
        // Calcular el total de páginas
        $totalPages = ceil($totalCount / $pageSize);
    
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    
        return [
            'docentes' => $resultados,
            'totalPages' => $totalPages,
            'currentPage' => $page,
        ];
    }
    
    



    /** 
     * This lists the pending Concursos 
     * 
     */

     public function actionPending()
     {
         $dataProvider = new ActiveDataProvider([
             'query' => ConcursoPendiente::find(),
             'pagination' => [
                 'pageSize' => 20,
             ],
             'sort' => [
                 'defaultOrder' => [
                     'id_concurso_pendiente' => SORT_DESC,
                 ],
             ],
         ]);
 
         return $this->render('manage/pending', [
             'dataProvider' => $dataProvider,
         ]);
     }

    // /**
    //  * Updates an existing Concurso model.
    //  * If update is successful, the browser will be redirected to the 'view' page.
    //  * @param int $id_concurso Id Concurso
    //  * @return string|\yii\web\Response
    //  * @throws NotFoundHttpException if the model cannot be found
    //  */
    // public function actionUpdate($id_concurso)
    // {
    //     $model = $this->findModel($id_concurso);

    //     if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id_concurso' => $model->id_concurso]);
    //     }

    //     return $this->render('update', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionUpdate($id)
    {
        $model = ConcursoPendiente::findOne($id);
    
        if (!$model) {
            Yii::$app->session->setFlash('error', 'El concurso no fue encontrado.');
            return $this->redirect(['pending']);
        }
    
        // Procesa la solicitud POST
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'El concurso ha sido actualizado exitosamente.');
            } else {
                Yii::$app->session->setFlash('error', 'No se pudo actualizar el concurso: ' . implode(', ', $model->getFirstErrors()));
            }
            return $this->redirect(['pending']);
        }
            return $this->render('update', ['model' => $model]);
    }

    
    /**
     * Deletes an existing Concurso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_concurso Id Concurso
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_concurso)
    {
        $this->findModel($id_concurso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Concurso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_concurso Id Concurso
     * @return Concurso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_concurso)
    {
        if (($model = Concurso::findOne(['id_concurso' => $id_concurso])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionArea()
    {
        $parameter = Yii::$app->request->post('facultad');
        $departamento = AreaDepartamento::find()
            ->where(['id_facultad' => $parameter])
            ->orderBy(['descripcion_area_departamento' => SORT_ASC])
            ->all();
        return Json::encode($departamento);
    }

    public function actionFormulario($id)
    {
        $dataProvider = Concurso::find()->where(['id_concurso' => $id])->one();
        return $this->renderPartial('_formulario', [
            'model' => $dataProvider,
        ]);
    }

    public function actionTramite($ua = '%', $ar = '%')
    {
        $searchModel = Concurso::find();
        $dataProvider = new ActiveDataProvider([
            'query' => Concurso::find(),
            'sort' => [
                'defaultOrder' => [
                    'id_concurso' => SORT_DESC,
                ]
            ],

        ]);
        $facultad = Facultad::find("id_facultad", "nombre_facultad")->orderBy(['nombre_facultad' => SORT_ASC])->all();
        return $this->render('tramite', [
            'model' => $dataProvider,
            'searchModel' => $searchModel,
            'facultad' => $facultad,
            'ua' => $ua,
            'ar' => $ar
        ]);
    }

    public function actionManage()
{
    return $this->render('manage/index');
}




public function actionPublish()
{
    $dataProvider = new ActiveDataProvider([
        'query' => ConcursoPendiente::find(),
        'pagination' => [
            'pageSize' => 20,
        ],
        'sort' => [
            'defaultOrder' => [
                'id_concurso_pendiente' => SORT_DESC,
            ],
        ],
    ]);

    return $this->render('manage/publish', [
        'dataProvider' => $dataProvider,
    ]);
}

public function actionPublishConfirm($id)
{
    $concursoPendiente = ConcursoPendiente::findOne($id);

    if ($concursoPendiente !== null) {
        $concurso = new Concurso();

        // Asignar atributos desde concursoPendiente excluyendo id_concurso
        $concurso->attributes = $concursoPendiente->getAttributes(null, ['id_concurso_pendiente', 'id_concurso']);

        // Asegurar que las fechas se formatean correctamente como datetime
        if (!empty($concursoPendiente->fecha_sorteo_publicada)) {
            $concurso->fecha_sorteo_publicada = date('Y-m-d H:i:s', strtotime($concursoPendiente->fecha_sorteo_publicada));
        } else {
            $concurso->fecha_sorteo_publicada = null;
        }

        if (!empty($concursoPendiente->fecha_entrevista_prueba_publicada)) {
            $concurso->fecha_entrevista_prueba_publicada = date('Y-m-d H:i:s', strtotime($concursoPendiente->fecha_entrevista_prueba_publicada));
        } else {
            $concurso->fecha_entrevista_prueba_publicada = null;
        }

        // Guardar el registro en la tabla 'concurso'
        if ($concurso->save()) {
            // Obtener el ID del concurso recién insertado
            $idConcurso = $concurso->id_concurso;

            // 1. Insertar asignaturas en 'concurso_asignatura'
            $asignaturasSeleccionadas = $concursoPendiente->asignaturas_seleccionadas;

            // Verificar si $asignaturasSeleccionadas es un string JSON y decodificar si es necesario
            if (is_string($asignaturasSeleccionadas)) {
                $asignaturasSeleccionadas = json_decode($asignaturasSeleccionadas, true);
            }

            // Proceder solo si $asignaturasSeleccionadas es un array y no está vacío
            if (is_array($asignaturasSeleccionadas) && !empty($asignaturasSeleccionadas)) {
                foreach ($asignaturasSeleccionadas as $idAsignatura) {
                    Yii::$app->db->createCommand()->insert('concurso_asignatura', [
                        'id_concurso' => $idConcurso,
                        'id_asignatura' => $idAsignatura,
                        'id_facultad' => $concursoPendiente->id_facultad,
                    ])->execute();
                }
            }

            // 2. Insertar docente en 'persona_concurso_renovacion' si existe
            if ($concursoPendiente->docente) {
                Yii::$app->db->createCommand()->insert('persona_concurso_renovacion', [
                    'id_concurso' => $idConcurso,
                    'id_tipo_documento' => 1, // Asume tipo de documento 1 (puedes ajustarlo según corresponda)
                    'numero_documento' => $concursoPendiente->docente,
                    'id_categoria' => $concursoPendiente->id_categoria,
                    'id_dedicacion' => $concursoPendiente->id_dedicacion,
                ])->execute();
            }

            // Eliminar el registro de 'concurso_pendiente'
            $concursoPendiente->delete();
            Yii::$app->session->setFlash('success', 'El concurso ha sido publicado exitosamente.');
        } else {
            $errors = $concurso->getErrors();
            Yii::$app->session->setFlash('error', 'No se pudo publicar el concurso: ' . json_encode($errors));
        }
    } else {
        Yii::$app->session->setFlash('error', 'Concurso no encontrado.');
    }

    return $this->redirect(['publish']);
}




public function actionNominaPreinscriptos()
{
    $expediente = Yii::$app->request->get('expediente');
    $unidad_academica = Yii::$app->request->get('unidad_academica');

    $query = (new \yii\db\Query())
    ->select([
        'preinscripto.id',
        'user.username',
        'user.email',
        'concurso.numero_expediente',
        'tipo_concurso.descripcion_tipo_concurso', // Tipo de concurso
        'preinscripto.doc',
        'concurso.cantidad_de_puestos',
        'concurso.fecha_inicio_inscripcion',
        'concurso.fecha_fin_inscripcion',
        'concurso.hora_inicio_inscripcion',
        'concurso.hora_fin_inscripcion',
        'concurso.fecha_publicacion',
        // Subconsulta para obtener el nombre de la facultad
        '(SELECT facultad.nombre_facultad FROM facultad WHERE facultad.id_facultad = concurso.id_facultad LIMIT 1) AS nombre_facultad',
        // Subconsulta para obtener la descripción de la categoría
        '(SELECT categoria.descripcion_categoria FROM categoria WHERE categoria.id_categoria = concurso.id_categoria LIMIT 1) AS descripcion_categoria',
        // Subconsulta para obtener la dedicación
        '(SELECT dedicacion.descripcion_dedicacion FROM dedicacion WHERE dedicacion.id_dedicacion = concurso.id_dedicacion LIMIT 1) AS descripcion_dedicacion',
        // Subconsulta para obtener el área/departamento
        '(SELECT area_departamento.descripcion_area_departamento FROM area_departamento WHERE area_departamento.id_area_departamento = concurso.id_area_departamento LIMIT 1) AS descripcion_area_departamento'
    ])
    ->from('preinscripto')
    ->innerJoin('user', 'preinscripto.user_id = user.id')
    ->innerJoin('concurso', 'preinscripto.concurso_id = concurso.id_concurso')
    ->innerJoin('tipo_concurso', 'concurso.id_tipo_concurso = tipo_concurso.id_tipo_concurso');


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

public function actionAgregarDocente()
{
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $data = \Yii::$app->request->getRawBody();
    $data = json_decode($data, true);

    $dni = $data['dni'] ?? null;
    $apellido = $data['apellido'] ?? null;
    $nombre = $data['nombre'] ?? null;
    $user_id = $data['user_id'] ?? 0;

    // Crear una nueva instancia de Profile y establecer el escenario
    $docente = new Profile();
    $docente->scenario = Profile::SCENARIO_DOCENTE;
    $docente->numero_documento = $dni;
    $docente->apellido = $apellido;
    $docente->nombre = $nombre;
    $docente->user_id = $user_id;

    // Verifica y muestra los atributos antes de la validación y guardado
    Yii::info("Datos del modelo antes de guardar: " . json_encode($docente->attributes));

    if ($docente->validate() && $docente->save()) {
        return ['success' => true];
    } else {
        // Mostrar errores detallados de validación
        Yii::info("Errores al guardar el docente: " . json_encode($docente->errors));
        return ['success' => false, 'message' => 'Error al guardar el docente: ' . implode(', ', array_map(fn($errors) => implode(', ', $errors), $docente->errors)),
 'errors' => $docente->errors];
    }
}

}