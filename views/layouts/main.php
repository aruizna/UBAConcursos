<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        /* Estilos personalizados */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
            background-color: ##FFFFFF; /* Fondo principal de la barra de navegación */
            padding: 0 20px;
        }
        .navbar-brand img {
            max-height: 100px;
            width: auto;
            height: auto;
        }
        .navbar-items {
            display: flex;
            align-items: center;
        }
        .navbar-item {
            list-style: none;
            margin-left: 20px;
        }
        .navbar-item a {
            text-decoration: none;
            color: #1d2554; /* Texto de los enlaces del menú */
        }
        .navbar-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .navbar-toggle span {
            height: 3px;
            width: 25px;
            background-color: #1d2554; /* Color del ícono de la hamburguesa */
            margin: 4px 0;
        }
        .logout {
            margin-left: 20px;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-link {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #1d2554; /* Color del texto del dropdown */
            text-decoration: none;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #91bde1; /* Fondo del dropdown */
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            top: 100%;
            right: 0;
            width: 200px;
        }
        .dropdown-content a {
            color: #FFFFFF; /* Color del texto de los enlaces del dropdown */
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f7a600; /* Fondo al pasar el mouse sobre los enlaces del dropdown */
        }
        .dropdown.open .dropdown-content {
            display: block;
        }
        @media (max-width: 768px) {
            .navbar {
                flex-direction: row;
                justify-content: space-between;
                height: auto;
                padding: 10px;
            }
            .navbar-brand img {
                max-height: 80px;
            }
            .navbar-items {
                display: flex;
                flex-direction: row-reverse;
                align-items: center;
            }
            .dropdown-link {
                display: none;
            }
            .dropdown-link.hamburger {
                display: flex;
                align-items: center;
                cursor: pointer;
                color: #1d2554; 
                text-decoration: none;
                padding: 12px 16px;
                font-size: 30px;
                order: 4;
                margin-left: 20px;
            }
            .navbar-toggle {
                display: flex;
                order: 1;
            }
            .logout {
                order: 2;
                margin-left: 0;
            }
        }
        @media (min-width: 769px) {
            .navbar-items .dropdown-link.hamburger {
                display: none;
            }
            .navbar-items .dropdown-link {
                display: flex;
            }
            .navbar-items .dropdown-link .chevron::before {
                content: '\1d14e'; /* Unicode character for down arrow */
                font-size: 20px;
                padding: 2px
            }
        }
        @media (max-width: 576px) {
            .navbar {
                flex-wrap: nowrap;
                justify-content: center;
                padding: 10px;
            }
            .navbar-brand img {
                max-height: 60px;
            }
            .navbar-toggle {
                margin-left: 5px;
            }
            .logout {
                margin-left: 5px;
                font-size: 14px;
            }
            .navbar-menu {
                width: auto;
            }
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div class="navbar">
        <div class="navbar-brand">
            <?= Html::a(Html::img('@web/images/uba_ico.svg', ['alt' => Yii::$app->name]), Yii::$app->homeUrl) ?>
        </div>
        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="navbar-items">
                <div class="dropdown">
                    <a class="dropdown-link" onclick="toggleDropdown()">
                        Menú <span class="chevron"></span>
                    </a>
                    <a class="dropdown-link hamburger" onclick="toggleDropdown()" style="display:none;">
                        <span class="hamburger-icon">&#9776;</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="<?= Yii::$app->urlManager->createUrl(['/profile']) ?>">Mi perfil</a>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/concurso']) ?>">Llamados a concursos</a>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/concurso/tramite']) ?>">Mis concursos</a>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/site/datos-utiles']) ?>">Datos UUAA</a>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/site/documentos']) ?>">Doc. a presentar</a>
                        <?php if (Yii::$app->user->identity->is_superuser): ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['/concurso/manage']) ?>">Gestionar Llamados a Concurso</a>
    <?php endif; ?>
                    </div>
                </div>
                <div class="logout">
                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                    <?= Html::submitButton(
                        'Cerrar sesión (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout', 'style' => 'color:#1d2554;'] // Color del texto del botón de cerrar sesión
                    ) ?>
                    <?= Html::endForm() ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header>

<main id="main" class="flex-shrink-0" role="main" style="margin:0 auto;">
    <div class="container pt-0">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<script>
    function toggleDropdown() {
        const dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('open');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const mediaQuery = window.matchMedia('(max-width: 768px)');
        handleMediaChange(mediaQuery); // Initial check
        mediaQuery.addListener(handleMediaChange); // Listen for changes

        function handleMediaChange(mediaQuery) {
            const dropdownLink = document.querySelector('.dropdown-link');
            const hamburgerLink = document.querySelector('.dropdown-link.hamburger');
            if (mediaQuery.matches) {
                dropdownLink.style.display = 'none';
                hamburgerLink.style.display = 'flex';
            } else {
                dropdownLink.style.display = 'flex';
                hamburgerLink.style.display = 'none';
            }
        }
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
