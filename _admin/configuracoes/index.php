<?php

//include_once("../inc/painel.sessions.php"); 
include_once("../tiscConfig.php");
include_once(TISC_PATH . "inc/painel.header.php"); 

$consultaTool = $bd->exec("select * from _institucional where id = 1");

while($result = $bd->fetch_array($consultaTool)){
    $empresa   = $result['empresa'];     
    $email     = $result['email'];
    $chamada   = str_replace('<br />', '',($result['chamada']));
    $texto     = str_replace('<br />', '',($result['texto']));
    $palavras  = $result['palavrasChave'];
    $descricao = $result['descricao'];
    $img       = $result['img'];
}
?>
<!-- Summernote CSS  -->
<link rel="stylesheet" type="text/css" href="vendor/editors/summernote/summernote.css" />
<link rel="stylesheet" type="text/css" href="vendor/editors/summernote/summernote-bs3.css" />

</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php include_once(TISC_PATH . "inc/header.php"); ?>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="#">Página inicial</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="#">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="configuracoes/">Configurações</a>
                        </li>
                        
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                    <!-- full width widgets -->
                    <div class="row">

                        <div class="col-md-12">
                           
                            <div class="panel panel-visible">
                                
                                <div class="panel-body pn">
                                    
                                    <div class="panel-heading">
                                        <span class="panel-title">Editar informações</span>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="configuracoes/action.php" enctype="multipart/form-data" method="post">
                                            <input type="hidden" name="action" value="editConfig" />
                                            <input type="hidden" name="imgOld" value="<?php echo $img; ?>" />
                                            <input type="hidden" name="id" value="1" />
                                            
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">Empresa</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="empresa" class="form-control" placeholder="" value="<?php echo $empresa; ?>" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">E-mail</label>
                                                <div class="col-lg-8">
                                                    <input type="email" name="email" class="form-control"value="<?php echo $email; ?>"  placeholder="" />
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="col-lg-3 control-label" for="">Chamada</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control textarea" name="chamada" rows="6"><?php echo $chamada; ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label" for="">Texto</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control textarea summernote" name="texto" rows="12"><?php echo $texto; ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">Palavras-chave</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="palavras" class="form-control" value="<?php echo $palavras; ?>"  placeholder="" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">Descrição do site</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="descricao" class="form-control" value="<?php echo $descricao; ?>"  placeholder="" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb25">
                                                <label class="col-md-3 control-label">Trocar imagem?</label>
                                                <div class="col-md-9">
                                                    <label class="checkbox-inline mr10">
                                                    <input type="checkbox" name="trocarImg" value="1" />Sim, quero trocar a imagem</label>
                                                    
                                                    <img src="../images/upload/_THUMB_<?php echo $img; ?>" width="120" />
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-3 control-label">Imagem</label>
                                                <div class="col-lg-8">
                                                    <input type="file" name="arquivo[]" id="arquivo" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                           
                                            <br /><br />
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label" for=""></label>
                                                <div class="col-lg-2" style="">
                                                    <button type="submit" class="btn btn-hover btn-primary btn-block" style="float: left"> 
                                                        <i class="fa fa-check"></i> Salvar
                                                    </button>
                                                </div>
                                                
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: .row -->

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->
    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
       <!-- Summernote JS -->
    <script type="text/javascript" src="vendor/editors/summernote/summernote.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            
            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS   
            Demo.init();

            $('#datetimepicker1').mask('99/99/9999');
             $('.summernote').summernote({
                height: 355, //set editable area's height
                focus: false, //set focus editable area after Initialize summernote
                oninit: function() {
                    
                },
                onChange: function(contents, $editable) {},
                toolbar: [
                //['style', ['style']], // no style button
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', [ 'link']], // no insert buttons
                //['table', ['table']], // no table button
                //['help', ['help']] //no help button
              ]
            });

            function bin(data) {
                var letter, bins = {};
                for (var i = 0, ien = data.length; i < ien; i++) {
                    letter = data[i].charAt(0).toUpperCase();

                    if (bins[letter]) {
                        bins[letter] ++;
                    } else {
                        bins[letter] = 1;
                    }
                }
                return bins;
            }
        });
    </script>
</body>

</html>
