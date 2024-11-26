<?php

use yii\db\Migration;

/**
 * Class m241124_140209_create_nuevos_concursos_20241128
 */
class m241124_140209_create_nuevos_concursos_20241128 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->batchInsert(
            "asignatura",
            ["id_asignatura", "id_facultad", "descripcion_asignatura", "habilitada", "numero_resolucion", "observaciones"],
            [
                [3006, 4, 'Proceso Atmosféricos en Pequeña Escala', 's', NULL, NULL],
                [3007, 4, 'Ondas en la Atmósfera 2', 's', NULL, NULL],
                [3008, 4, 'Introducción a la Química Biológica y Microbiología', 's', NULL, NULL],
                [3009, 4, 'Química Biológica del Metabolismo', 's', NULL, NULL],
                [3010, 4, 'Conceptos de Biología Molecular', 's', NULL, NULL],
                [3011, 4, 'Tópicos de Química Farmacológica', 's', NULL, NULL],
                [3012, 4, 'Inmunobiotecnología', 's', NULL, NULL],
                [3013, 4, 'Virología', 's', NULL, NULL],
                [3014, 10, 'Economía y Organización', 's', NULL, NULL],
                [3015, 10, 'Gerenciamiento y Organización de Obras Civiles', 's', NULL, NULL],
                [3016, 10, 'Química Electroquímica', 's', NULL, NULL],
                [3017, 10, 'Organización y Dirección Empresaria', 's', NULL, NULL],
                [3018, 10, 'Gestión Integral de la Cadena de Valor', 's', NULL, NULL],
                [3019, 10, 'Comercialización de Productos y Servicios', 's', NULL, NULL],
                [3020, 10, 'Gerenciamiento de la Calidad', 's', NULL, NULL],
                [3021, 10, 'Logística y Supply Chain', 's', NULL, NULL],
                [3022, 10, 'Estadística Aplicada', 's', NULL, NULL],
                [3023, 10, 'Ciencia de datos para la toma de decisiones', 's', NULL, NULL],
                [3024, 10, 'Estadística Aplicada Superior', 's', NULL, NULL],
                [3025, 10, 'Física de los sistemas de partículas', 's', NULL, NULL],
                [3026, 10, 'Óptica', 's', NULL, NULL],
                [3027, 10, 'Electricidad y Magnetismo', 's', NULL, NULL],
                [3028, 10, 'Física para Informátia', 's', NULL, NULL],
                [3029, 10, 'Electricidad', 's', NULL, NULL],
                [3030, 10, 'Magnetismo y Calor', 's', NULL, NULL],                
                [3031, 75, 'Introducción al Conocimiento Proyectual I', 's', NULL, NULL],
                [3032, 75, 'Introducción al Conocimiento Proyectual II', 's', NULL, NULL],                     
            ]
        );

        $this->batchInsert(
            "area_departamento",
            ["id_area_departamento", "id_facultad", "descripcion_area_departamento", "activa"],
            [
                [475, 10, 'Departamento de Física', 1],
                [476, 13, 'Carrera de Profesorado de Enseñanza Media y Superior en Psicología', 1],
                [477, 13, 'Carrera de Licenciatura en Terapia Ocupacional', 1],
            ]
        );



        $this->batchInsert(
            "concurso",
            ["numero_expediente", "id_tipo_concurso", "id_facultad", "id_categoria", "id_dedicacion", "id_area_departamento", "cantidad_de_puestos", "fecha_inicio_inscripcion", "fecha_fin_inscripcion", "hora_inicio_inscripcion", "hora_fin_inscripcion", "fecha_publicacion", "cantidad_dias_publicacion", "area", "comentario"],
            [
                ['EX-2024-02791540-   -UBA-DME#FCE',        2, 3,  4, 1, 112, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',    1, '', '' ], 
                ['EX-2024-03127531-   -UBA-DME#FCE',        4, 3,  4, 1, 436, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ], 
                ['EX-2024-03128233-   -UBA-DME#FCE',        4, 3,  4, 1, 436, 10, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, '', '' ],
                ['EX-2024-03128400-   -UBA-DME#FCE',        4, 3,  4, 1, 436, 3, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-03128801-   -UBA-DME#FCE',        4, 3,  2, 1, 436, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-03494265-   -UBA-DME#FCE',        4, 3,  3, 1, 106, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-03494288-   -UBA-DME#FCE',        4, 3,  2, 1, 106, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ], 
                ['EX-2024-03769751-   -UBA-DME#FCE',        4, 3,  4, 1, 106, 3, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-03988252-   -UBA-DME#FCE',        4, 3,  4, 1, 115, 4, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-03988310-   -UBA-DME#FCE',        4, 3,  4, 1, 115, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-04302575-   -UBA-DME#FCE',        1, 3,  4, 1, 436, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-04302618-   -UBA-DME#FCE',        1, 3,  2, 1, 436, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-04342554-   -UBA-DME#FCE',        1, 3,  4, 1, 112, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Grupo de Asignaturas del Área de Contabilidad', '' ],
                ['EX-2024-04506338-   -UBA-DME#FCE',        2, 3,  4, 1, 436, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-04509376-   -UBA-DMESA#FCEN',     2, 4,  4, 1, 409, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área Genética Toxicológica y Citogenética', '' ],
                ['EX-2024-04684893-   -UBA-DMESA#FCEN',     2, 4,  4, 3, 415, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área docente: Ciencias de la Atmósfera, Área de investigación: Micrometeorología', '' ],
                ['EX-2024-04684970-   -UBA-DMESA#FCEN',     2, 4,  4, 1, 415, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área docente: Oceanografía', '' ],
                ['EX-2024-04685898-   -UBA-DMESA#FCEN',     2, 4,  4, 3, 415, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área docente: Climatología Aplicada, Área de investigación a concursar: Climatología Aplicada', '' ],
                ['EX-2024-04685947-   -UBA-DMESA#FCEN',     2, 4,  4, 3, 415, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área docente: Sinóptica Dinámica, Área de investigación: Dinámica de la Atmósfera', '' ],
                ['EX-2024-03158313- -UBA-DMESA#FCEN',       2, 4,  4, 1, 456, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área Desarrollo y Producción de Moléculas relevantes en Biomedicina', '' ],
                ['EX-2024-01618171-   -UBA-DIMEDA#SA_FI',   4, 10, 4, 1, 470, 4, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'área de docencia: Métodos Cuantitativos, subárea: Investigación Operativa y Modelos', '' ],
                ['EX-2024-02376056-   -UBA-DIMEDA#SA_FI',   4, 10, 4, 1, 470, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Organización, subárea: Organización y Evolución de proyectos', '' ],
                ['EX-2024-02545883-   -UBA-DIMEDA#SA_FI',   4, 10, 4, 1, 434, 3, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Química Básica', '' ], 
                ['EX-2024-03429169-   -UBA-DIMEDA#SA_FI',   4, 10, 4, 1, 470, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Organización, subárea: Gestión de las Organizaciones', '' ],
                ['EX-2024-03429193-   -UBA-DIMEDA#SA_FI',   4, 10, 4, 1, 470, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Métodos Cuantitativos, subárea: Estadística', '' ],
                ['EX-2024-04603926-   -UBA-DIMEDA#SA_FI',   4, 10, 3, 1, 470, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Métodos Cuantitativos, subárea: Estadística', '' ],
                ['EX-2024-03720027-   -UBA-DIMEDA#SA_FI',   1, 10, 4, 3, 475, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Físicas Básicas, Área de investigación: Flujo en medios porosos y fracturados, erosión y transporte de sedimentos', '' ],
                ['EX-2023-07350811-   -UBA-DIMEDA#SA_FI',   1, 10, 4, 3, 475, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, 'Área de docencia: Físicas Básicas, área de investigación: Materiales magnéticos y vidrios calcogenuros en desarrollos industriales', '' ],
                ['EX-2024-04864483-   -UBA-DMEDA#FODON',    4, 12, 4, 1, null, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Cátedra Materiales Dentales', '' ],      
                ['EX-2024-05044066-   -UBA-DMRD#SHA_FPSI',  2, 13, 2, 1, 476, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-05153330-   -UBA-DMRD#SHA_FPSI',  2, 13, 2, 1, 477, 1, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-05497305-   -UBA-DMRD#SHA_FPSI',  1, 13, 4, 2,   1, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28',  1, '', '' ],
                ['EX-2024-04935800-   -UBA-DDMEA#CBC',      2, 75, 2, 1, null, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Taller de Dibujo', '' ],       
                ['EX-2024-04935977-   -UBA-DDMEA#CBC',      2, 75, 4, 1, null, 2, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Taller de Dibujo', '' ],       
                ['EX-2024-04936041-   -UBA-DDMEA#CBC',      2, 75, 2, 1, null, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Taller de Dibujo', '' ],       
                ['EX-2024-04936171-   -UBA-DDMEA#CBC',      2, 75, 2, 2, null, 6, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Taller de Dibujo', '' ],       
                ['EX-2024-04936277-   -UBA-DDMEA#CBC',      2, 75, 2, 1, null, 4, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Introducción al Conocimiento Proyectual I y II', '' ],
                ['EX-2024-04936317-   -UBA-DDMEA#CBC',      2, 75, 4, 1, null, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Introducción al Conocimiento Proyectual I y II', '' ],
                ['EX-2024-04936348-   -UBA-DDMEA#CBC',      2, 75, 2, 1, null, 4, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Introducción al Conocimiento Proyectual I y II', '' ],
                ['EX-2024-04936439-   -UBA-DDMEA#CBC',      2, 75, 2, 2, null, 5, '2024-11-24 09:00:00', '2025-02-06 18:00:00', '09:00', '18:00', '2024-11-28', 1, 'Área Introducción al Conocimiento Proyectual I y II', '' ]
            ]

        );



        
            # EX-2024-02791540-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1368,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-02791540-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03127531-   -UBA-DME#FCE  
            $sql = "
                insert INTO concurso_asignatura 
                select
                c.id_concurso,
                6,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03128233-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                18,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03128400-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                18,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03128400-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03128801-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                18,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03128801-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03494265-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                871,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03494265-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03494288-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                312,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03494288-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03769751-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                869,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03988252-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1510,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03988310-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1510,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04302575-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                220,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04302575-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04302618-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                18,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04302618-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();


                # EX-2024-04342554-   -UBA-DME#FCE
                $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1469,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04342554-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04342554-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1368,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04342554-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04342554-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2551,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04342554-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();        


            # EX-2024-04506338-   -UBA-DME#FCE
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                7,
                3
                from concurso c
                where c.numero_expediente = 'EX-2024-04506338-   -UBA-DME#FCE'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2659,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                477,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2810,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2660,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                574,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2661,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2589,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1071,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04509376-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1385,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04509376-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

// -----------------------------------------------------------------------------------------------


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                930,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2729,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2731,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                198,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2732,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3006,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2730,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1751,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2900,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3007,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1754,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2753,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2746,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2569,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2754,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2736,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2756,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2572,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2738,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2739,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2742,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2762,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2902,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2761,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2759,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2755,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2624,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2625,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2737,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2743,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2757,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2577,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2747,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2748,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2749,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2745,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                959,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2740,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2763,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2741,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2750,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2751,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2752,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2758,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684893-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2744,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684893-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                934,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2610,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2726,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2727,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                900,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                188,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2611,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2612,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2617,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2783,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2618,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2781,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04684970-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2784,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04684970-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                930,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2729,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2731,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                198,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2732,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2733,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1754,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2753,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2746,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2569,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2754,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2736,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2756,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2572,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2738,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2739,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2742,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2762,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2902,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2761,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2759,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2755,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2624,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2625,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2737,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2743,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2757,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685898-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2577,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685898-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                930,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2731,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2732,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2730,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1751,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2733,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2900,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3007,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                931,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2747,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2748,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2749,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2745,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                959,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2740,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2763,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2741,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2750,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2751,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2752,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2758,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2744,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2573,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04685947-   -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2739,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-04685947-   -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03158313- -UBA-DMESA#FCEN 
            $sql = "
                insert INTO concurso_asignatura 
                select  
                c.id_concurso,
                1274,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3008,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3009,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2808,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2603,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2777,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2605,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3010,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2774,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3011,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2797,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3012,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2790,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2772,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2764,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3013,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03158313- -UBA-DMESA#FCEN
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2652,
                4
                from concurso c
                where c.numero_expediente = 'EX-2024-03158313- -UBA-DMESA#FCEN'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-01618171-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                790,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-01618171-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2044,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-02376056-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3014,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02376056-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3015,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02376056-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2586,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-02545883-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3000,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02545883-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3001,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02545883-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3016,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02545883-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3003,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-02545883-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2585,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03429169-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3017,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429169-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3018,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429169-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3019,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429169-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3020,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429169-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3021,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03429193-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3022,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429193-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429193-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3023,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429193-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03429193-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3024,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03429193-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();            

            # EX-2024-04603926-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3022,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-04603926-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04603926-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3023,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-04603926-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04603926-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3024,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-04603926-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3025,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3026,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3027,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                171,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3028,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3029,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3030,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2860,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2863,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2861,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2862,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-03720027-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2864,
                10
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3025,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3026,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3027,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                171,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3028,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3029,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3030,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2860,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2863,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2861,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2862,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            
            # EX-2023-07350811-   -UBA-DIMEDA#SA_FI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2864,
                10
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2039,
                12
                from concurso c
                where c.numero_expediente = 'EX-2024-04864483-   -UBA-DMEDA#FODON'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04864483-   -UBA-DMEDA#FODON
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2040,
                12
                from concurso c
                where c.numero_expediente = 'EX-2024-04864483-   -UBA-DMEDA#FODON'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04864483-   -UBA-DMEDA#FODON
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                2041,
                12
                from concurso c
                where c.numero_expediente = 'EX-2024-04864483-   -UBA-DMEDA#FODON'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-05044066-   -UBA-DMRD#SHA_FPSI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                299,
                13
                from concurso c
                where c.numero_expediente = 'EX-2024-05044066-   -UBA-DMRD#SHA_FPSI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-05153330-   -UBA-DMRD#SHA_FPSI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1505,
                13
                from concurso c
                where c.numero_expediente = 'EX-2024-05153330-   -UBA-DMRD#SHA_FPSI'
            ";
            Yii::$app->db->createCommand($sql)->execute();

        
            # EX-2024-05497305-   -UBA-DMRD#SHA_FPSI
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1249,
                13
                from concurso c
                where c.numero_expediente = 'EX-2024-05497305-   -UBA-DMRD#SHA_FPSI'
            ";
            Yii::$app->db->createCommand($sql)->execute();            

            # EX-2024-04935800-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1408,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04935800-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04935977-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1408,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04935977-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936041-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1408,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936041-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936171-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                1408,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936171-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936277-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3031,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936277-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04936277-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3032,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936277-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936317-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3031,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936317-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936317-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3032,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936317-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936348-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3031,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936348-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936348-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3032,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936348-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();


            # EX-2024-04936439-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3031,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936439-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            # EX-2024-04936439-   -UBA-DDMEA#CBC
            $sql = "
                insert INTO concurso_asignatura
                select
                c.id_concurso,
                3032,
                75
                from concurso c
                where c.numero_expediente = 'EX-2024-04936439-   -UBA-DDMEA#CBC'
            ";
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Diego', 'SERRANO', '00000291',0)";
            Yii::$app->db->createCommand($sql)->execute();
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Lorena Gabriela', 'SANCHEZ', '00000292',0)";
            Yii::$app->db->createCommand($sql)->execute();            
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Rocio', 'SERAFINI', '00000293',0)";
            Yii::$app->db->createCommand($sql)->execute();            
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Martín', 'PAULUN', '00000294',0)";
            Yii::$app->db->createCommand($sql)->execute();            
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Karina Paola', 'SOTO', '00000295',0)";
            Yii::$app->db->createCommand($sql)->execute();            
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Cecilia', 'AIRASCA', '00000296',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Cruz', 'ARCE', '00000297',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariano Alberto', 'BONELLI', '00000298',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Douglas Leopoldo Luis', 'BORDOLI', '00000299',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Dalilia Vera', 'EFFRON', '00000300',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Alejandra', 'FRACASSI RAVIER', '00000301',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián Pablo', 'LERMAN', '00000302',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudio Daniel', 'MENENDEZ', '00000303',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Alejandra', 'GIORDANO', '00000304',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mario Jorge', 'VILALTELLA', '00000305',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Leopoldo', 'PAZ', '00000306',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('FlorenciaTamara', 'GOLUB', '00000307',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Andrea Mabel', 'GRONDONA', '00000308',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Fernando', 'MORONI', '00000309',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico', 'SARAVIA', '00000310',0)";
            Yii::$app->db->createCommand($sql)->execute();  
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Pablo Alejandro', 'SINGERMAN', '00000311',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariana Gloria', 'BARREÑA', '00000312',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián', 'KATZ', '00000313',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Cintia Natalia', 'GASPARINI', '00000314',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Joaquín Oscar', 'PASTOR', '00000315',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Agostina', 'MYRONEC', '00000316',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Hernán Miguel', 'D´AGOSTINO', '00000317',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Angel Gustavo', 'GRABINA', '00000318',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Raúl Alberto', 'MUÑOZ', '00000319',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gustavo', 'GONZÁLEZ', '00000320',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gabriela', 'RIGONI', '00000321',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Sebastián Javier', 'LIBERMAN', '00000322',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Alberto Omar', 'LIFRIERI', '00000323',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Oscar Alfredo', 'FREYRE', '00000324',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ofelia', 'SEOANE', '00000325',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Claudia Isabel', 'ALTIERI', '00000326',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Víctor Pablo Gustavo', 'ARISTIZABAL', '00000327',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Eduardo Salvador', 'KASTIKA', '00000328',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Diego Rodrigo', 'MILD', '00000329',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adriana Miriam', 'QUINTANA', '00000330',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Luciano Matías', 'CIMINARI SMITH', '00000331',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Federico', 'MURADIAN', '00000332',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Daniel Francisco', 'ROGOU', '00000333',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Xavier Ignacio', 'GONZALEZ', '00000334',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Juan Pablo', 'MEDINA', '00000335',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Jorge Luis', 'IRIANI', '00000336',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariana Andrea', 'MELAJ', '00000337',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Adriana Marcela', 'ROMERO', '00000338',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Gerardo Adrián', 'DIEHL', '00000339',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Javier Luis', 'GIL', '00000340',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('María Fernanda', 'STEWART HARRIS', '00000341',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariano Felipe', 'BONOLI ESCOBAR', '00000342',0)";
            Yii::$app->db->createCommand($sql)->execute();  
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Marcelo Fabián', 'PIVA', '00000343',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Josefina María', 'SILVEYRA', '00000344',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Ivana Elisabet', 'PECORA', '00000345',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Nora Beatríz', 'VITALE', '00000346',0)";
            Yii::$app->db->createCommand($sql)->execute();    
            $sql = "insert INTO profile (nombre,apellido,numero_documento,user_id) values ('Mariana Silvia', 'FUNES MOLINERI', '00000347',0)";
            Yii::$app->db->createCommand($sql)->execute();    
    

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000292',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000293',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 

        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000294',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute(); 
        
        $sql = "
            insert INTO persona_concurso_renovacion 
            select  
            c.id_concurso,
            NULL,
            '00000295',
            NULL,
            NULL,
            NULL,
            NULL,
            NULL
            from concurso c
            where c.numero_expediente = 'EX-2024-03127531-   -UBA-DME#FCE'
        ";    
        Yii::$app->db->createCommand($sql)->execute();         


        $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000296',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000297',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000298',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 


    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000299',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000300',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 
    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000301',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000302',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000303',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000304',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

    $sql = "
        insert INTO persona_concurso_renovacion 
        select  
        c.id_concurso,
        NULL,
        '00000305',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
        from concurso c
        where c.numero_expediente = 'EX-2024-03128233-   -UBA-DME#FCE'
    ";   
    Yii::$app->db->createCommand($sql)->execute(); 

             
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000306',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03128400-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
             
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000307',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03128400-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000308',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03128400-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000309',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03128801-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000310',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03128801-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();                     

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000311',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03494265-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000312',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03494265-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();               
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000313',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03494288-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();             

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000314',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000314',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000314',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03769751-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();             

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988252-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000321',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 


            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000322',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000323',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000324',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000325',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03988310-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000326',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04302575-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000327',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04302575-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute();            


            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000328',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04302618-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000329',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04342554-   -UBA-DME#FCE'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000330',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04342554-   -UBA-DME#FCE'
            ";    
            Yii::$app->db->createCommand($sql)->execute();               


             
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000331',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();              

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000332',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();  
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000333',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();  
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000334',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-01618171-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();              
   
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-02376056-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000336',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000337',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000338',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-02545883-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();             

            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000339',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03429169-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000340',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03429193-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
            
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000341',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03429193-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();    

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000342',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04603926-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 


            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-03720027-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000291',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2023-07350811-   -UBA-DIMEDA#SA_FI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 

            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000345',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-04864483-   -UBA-DMEDA#FODON'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
         
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000346',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-05497305-   -UBA-DMRD#SHA_FPSI'
            ";   
            Yii::$app->db->createCommand($sql)->execute(); 
          
            $sql = "
                insert INTO persona_concurso_renovacion 
                select  
                c.id_concurso,
                NULL,
                '00000347',
                NULL,
                NULL,
                NULL,
                NULL,
                NULL
                from concurso c
                where c.numero_expediente = 'EX-2024-05497305-   -UBA-DMRD#SHA_FPSI'
            ";   
            Yii::$app->db->createCommand($sql)->execute();     



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241124_140209_create_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241124_140209_create_nuevos_concursos_20241128 cannot be reverted.\n";

        return false;
    }
    */
}
