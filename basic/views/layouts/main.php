<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
    </head>
     <script>
        $(document).ready( function() {             
             $('#w2').removeClass('dropdown-menu').addClass('sub-menu');
        } );
    </script>
    <body>

<?php $this->beginBody() ?>
        <div class="wrap">
            <header id="header">      
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 overflow">
                            <div class="social-icons pull-right">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-inverse" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php
                            NavBar::begin([
                                'brandLabel' => Html::img('@web/images/logoban.png', ['alt' => Yii::$app->name]),
                                'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    'class' => 'navbar navbar',
                                ],
                            ]);
                            echo Nav::widget([
                                'options' => ['class' => 'nav navbar-nav navbar-right'],
                                'items' => [
                                    ['label' => 'Banca de talentos',
                                        'url' => ['#'],
                                        'items' =>
                                        [
                                            ['label' => 'TipoFormacion', 'url' => ['/tipo-formacion/index']],
                                            ['label' => 'AreaConocimiento', 'url' => ['/area-conocimiento/index']],
                                            ['label' => 'Perfil', 'url' => ['/perfil/index']],
                                            ['label' => 'Empresa', 'url' => ['/empresa/index']],
                                            ['label' => 'Formulario', 'url' => ['/formulario/index']],                                            
                                            ['label' => 'Conocimiento', 'url' => ['/conocimiento/index']],
                                            ['label' => 'ExperienciaLaboral', 'url' => ['/experiencia-laboral/index']],
                                            ['label' => 'Formacion', 'url' => ['/formacion/index']],
                                            ['label' => 'Seleccion', 'url' => ['/seleccion/index']],
                                        ]
                                    ],
                                    ['label' => 'Papi Kostic',
                                        'url' => ['#'],
                                        'items' =>
                                        [                                            
                                            ['label' => 'Pregunta', 'url' => ['/pregunta/index']],
                                            ['label' => 'Respuesta', 'url' => ['/respuesta/index']],                                            
                                        ]
                                    ],
                                    ['label' => 'Inicio', 'url' => ['/site/index']],
                                    ['label' => 'Quienes Somos', 'url' => ['/site/about']],
                                    ['label' => 'Contactenos', 'url' => ['/site/contact']],
                                    Yii::$app->user->isGuest ?
                                            ['label' => 'Login', 'url' => ['/site/login']] :
                                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                        'url' => ['/site/logout'],
                                        'linkOptions' => ['data-method' => 'post']],
                                ],
                            ]);
                            NavBar::end();
                            ?>
                            <!--                    <a class="navbar-brand" href="index.html">
                                                    <h1><img src="images/logo.png" alt="logo"></h1>
                                                </a>
                            -->
                        </div>
                        <div class="collapse navbar-collapse">
                         
                                        <div class="search">
                                            <form role="form">
                                                <i class="fa fa-search"></i>
                                                <div class="field-toggle">
                                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                                </div>
                                            </form>
                                        </div>
                    </div>
                </div>
            </header>         

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                   <?= $content ?>
            </div>
        </div>


        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center bottom-separator">
                        <img src="images/home/under.png" class="img-responsive inline" alt="">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="testimonial bottom">
                            <h2>Testimonial</h2>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/home/profile1.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                    <h3><a href="#">- Jhon Kalis</a></h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/home/profile2.png" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                    <h3><a href="">- Abraham Josef</a></h3>
                                </div>
                            </div>   
                        </div> 
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="contact-info bottom">
                            <h2>Contacts</h2>
                            <address>
                                E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                                Phone: +1 (123) 456 7890 <br> 
                                Fax: +1 (123) 456 7891 <br> 
                            </address>

                            <h2>Address</h2>
                            <address>
                                Unit C2, St.Vincent's Trading Est., <br> 
                                Feeder Road, <br> 
                                Bristol, BS2 0UY <br> 
                                United Kingdom <br> 
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-form bottom">
                            <h2>Send a message</h2>
                            <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                                </div>                        
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="copyright-text text-center">
                            <p class="pull-left">&copy; Insoftline <?= date('Y') ?></p>                        
                            <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        <!--    <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy; Insoftline <?= date('Y') ?></p>
                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
            </footer>-->

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
