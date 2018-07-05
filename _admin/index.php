<?php 
    include_once("tiscConfig.php");
    
    if(isset($_POST['token'])){
        if($_POST['token'] == 'iuyernkndfoomdjfkfllsdfteyrtklaaa1'){
            login($_POST['user'], $_POST['pass']);
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>TiSC Panel</title>
     <?php include_once("tiscConfig.php"); ?>
    <base href="<?php echo $baseUrlAdmin; ?>" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Tiago Colucci / 6P" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Settings Scripts -->
    <script>
        var boxtest = localStorage.getItem('boxed');

        if (boxtest === 'true') {
            document.body.className += ' boxed-layout';
        }
    </script>
    <!-- End: Settings Scripts -->

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <div class="admin-form theme-info" id="login1">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <h1 style="color: #fff;">
                               6P Manager
                            </h1>
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                
                            </div>

                        </div>

                    </div>

                    <div class="panel panel-info mt10 br-n">

                        <div class="panel-heading heading-border bg-white">
                            
                        </div>

                        <!-- end .form-header section -->
                        <form method="post" action="index.php" id="contact">
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-7 pr30">
                                        <input type="hidden" name="token" value="iuyernkndfoomdjfkfllsdfteyrtklaaa1" />
                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Usuário</label>
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="user" id="username" class="gui-input" placeholder="Digite seu usuário" />
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Senha</label>
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="pass" id="password" class="gui-input" placeholder="Digite sua senha" />
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    <div class="col-sm-5 br-l br-grey pl30">
                                        <h3 class="mb25"> Com este painel você poderá:</h3>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Gerenciar banners</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Gerenciar notícias</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Gerenciar depoimentos</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Gerenciar configurações</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" class="button btn-primary mr10 pull-right">Acessar</button>
                                
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
