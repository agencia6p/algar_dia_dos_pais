<?php 
include_once("tiscConfig.php");
include_once("inc/painel.header.php"); ?>

</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php include_once("inc/header.php"); ?>

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
                            <a href="index-painel.php">Home</a>
                        </li>
                        
                    </ol>
                </div>
                <div class="topbar-right">
                    
                    <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                        <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                            <span class="badge badge-hero badge-danger">3</span>
                        </a>
                    </div>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">

                <!-- Admin-panels -->
                <div class="admin-panels fade-onload sb-l-o-full">

                    <!-- full width widgets -->
                    <div class="row">

                        <!-- Three panes -->
                        <div class="col-md-12 admin-grid" style="display: none">
                            <div class="panel sort-disable" id="p0">
                                <div class="panel-heading">
                                    <span class="panel-title">Data Panel</span>
                                </div>
                                <div class="panel-body mnw700 of-a">
                                    <div class="row">

                                        <!-- Chart Column -->
                                        <div class="col-md-4 pln br-r mvn15">
                                            <h5 class="ml5 mt20 ph10 pb5 br-b fw700">Visitantes <small class="pull-right fw600">13,253 <span class="text-primary">(8,251 únicos)</span> </small> </h5>
                                            <div id="high-column2" style="width: 100%; height: 255px; margin: 0 auto"></div>
                                        </div>

                                        <!-- Multi Text Column -->
                                        <div class="col-md-4 br-r">
                                            <h5 class="mt5 mbn ph10 pb5 br-b fw700">Top Referências <small class="pull-right fw700 text-primary">Ver relatório </small> </h5>
                                            <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>Source</th>
                                                        <th>Count</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>www.google.com</span>
                                                        </td>
                                                        <td>1,926</td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fa fa-circle text-warning fs8 pr15"></i>
                                                            <span>www.yahoo.com</span>
                                                        </td>
                                                        <td>1,254</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                        </div>

                                        <!-- Flag/Icon Column -->
                                        <div class="col-md-4">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Fontes de tráfego <small class="pull-right fw700 text-primary">Ver estatísticas </small> </h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                        <td class="fs15 fw700 text-right">24%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-de mr5 va-b"></span>Germany</td>
                                                        <td class="fs15 fw700 text-right">7%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-fr mr5 va-b"></span>France</td>
                                                        <td class="fs15 fw700 text-right">14%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-tr mr5 va-b"></span>Spain</td>
                                                        <td class="fs15 fw700 text-right">31%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-es mr5 va-b"></span>Turkey</td>
                                                        <td class="fs15 fw700 text-right">22%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                        <td class="fs15 fw700 text-right">24%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Icon Column -->
                                        <div class="col-md-4 hidden">
                                            <h5 class="mt5 ph10 pb5 br-b fw700">Content Viewed <small class="pull-right fw700 text-primary">Refresh </small> </h5>
                                            <table class="table mbn">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th class="mw30">#</th>
                                                        <th>First Name</th>
                                                        <th>Revenue</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fs17 text-center w30">
                                                            <span class="fa fa-desktop text-warning"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Television</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$855,913</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-microphone text-primary"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Radio</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-down text-danger pr10"></i>$349,712</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-newspaper-o text-info"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Newspaper</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$1,259,742</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-facebook text-alert"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Social Media</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs17 text-center">
                                                            <span class="fa fa-bank text-alert"></span>
                                                        </td>
                                                        <td class="va-m fw600 text-muted">Investments</td>
                                                        <td class="fs14 fw700 text-muted text-right"><i class="fa fa-caret-up text-info pr10"></i>$3,512,672</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: .col-md-12.admin-grid -->

                    </div>
                    <!-- end: .row -->

                    <!-- partial width widgets -->
                    <div class="row">

                        <div class="col-md-6 col-lg-5 admin-grid">
                        </div>
                        <!-- end: .col-md-5-->

                        <div class="col-md-6 col-lg-4 admin-grid">
                        </div>
                        <!-- end: .col-md-4-->

                        <div class="col-md-6 col-lg-3 admin-grid">
                        </div>
                        <!-- end: .col-md-3-->

                    </div>
                    <!-- end: .row -->

                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->
    
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>
</body>

</html>
