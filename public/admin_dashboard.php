<?php
/**
 * Created by PhpStorm.
 * User: ShanikaWije
 * Date: 3/26/2017
 * Time: 3:30 PM
 */

session_start();

require 'functions.php';

$Date = date("F j, Y");

if(isset($_SESSION['AccountID'])) {
    $currentAccountID = $_SESSION['AccountID'];
    if (!isAdmin($currentAccountID)) {
        if(isVolunteer($currentAccountID)){
            $message = 'This is not Admin, redirecting';
            header("Location: /volunteer_dashboard.php");
        }
        else{
            header("Location: /applicant_dashboard.php");
        }
    }
}


?><li><a href="logout.php">Logout</a></li>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wildlife Center of Virginia | Admin Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>
<body>
<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/raina.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Raina Krasner</strong>
                             </span> <span class="text-muted text-xs block">Outreach Coordinator<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">

                    </div>
                </li>

                <li class = "active">
                    <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Who's Here</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Calendar</span></a></li>
                <li>
                <li>
                    <a href="#"><i class="fa fa-search"></i> <span class="nav-label">Search</span></a>
                </li>
                <li>
                    <a href="/pending_apps.php"><i class="fa fa-clipboard"></i> <span class="nav-label">Applications</span>  </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">My Profile</span>  </a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navigation -->


    <!-- TOP WHITE BAR WITH HAMBURGER MENU & LOGOUT BUTTON -->
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div class = "notify-text-desc">
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div class = "notify-text-desc">
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div class = "notify-text-desc">
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong id = "notify-text">See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        <!-- BEGINNING OF HEADER -->
        <div class = "row">
            <div class = "col-sm-12">
                <header id = "admin-header-background" class="image-bg-fluid-height ">
                    <div class = "text-overlay">


                        <h3 class = "date"><?php echo $Date ?></h3>
                        <h1 class = "welcome-user"> HELLO RAINA </h1>

                    </div>
                </header>
            </div>
        </div>


        <div class="wrapper wrapper-content admin-wrapper">
            <div class="row">
                <div class = "col-sm-12">

                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">

                            <!-- BEGINNING OF TOP LINKS -->
                            <a href = "#">
                                <div class="ibox-title">
                                    <!-- top green bar decoration -->
                                </div>
                                <div class="ibox-content-dash centered">
                                    <i class="fa fa-users enlarge-icons centered"></i>
                                    <div>
                                        <h2 class = "icon-title centered">WHO'S HERE</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">

                            <!-- BEGINNING OF TOP LINKS -->
                            <a href = "#">
                                <div class="ibox-title">
                                    <!-- top green bar decoration -->
                                </div>
                                <div class="ibox-content-dash centered">
                                    <i class="fa fa-calendar enlarge-icons centered"></i>
                                    <div>
                                        <h2 class = "icon-title centered">CALENDAR</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">

                            <!-- BEGINNING OF TOP LINKS -->
                            <a href = "#">
                                <div class="ibox-title">
                                    <!-- top green bar decoration -->
                                </div>
                                <div class="ibox-content-dash centered">
                                    <i class="fa fa-search enlarge-icons centered"></i>
                                    <div>
                                        <h2 class = "icon-title centered">SEARCH</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="ibox float-e-margins">

                            <!-- BEGINNING OF TOP LINKS -->
                            <a href = "#">
                                <div class="ibox-title">
                                    <!-- top green bar decoration -->
                                </div>
                                <div class="ibox-content-dash centered">
                                    <i class="fa fa-user enlarge-icons centered"></i>
                                    <div>
                                        <h2 class = "icon-title centered">PROFILE</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>




                </div><!-- end col sm 12-->
            </div><!-- END OF ROW 1 ICONS -->


            <div class = "row">
                <div class = "col-sm-12">
                    <div class = "col-sm-4 col-sm-offset-2 vol-stats">
                        <h1 class = "counter">
                            542
                        </h1>
                        <h3 class = "counter-label">HOURS VOLUNTEERED</h3>
                    </div><!--end of hour count -->

                    <div class = "col-sm-4 vol-stats">
                        <h1 class = "counter">
                            1,276
                        </h1>
                        <h3 class = "counter-label">MILES DRIVEN</h3>

                    </div><!-- end of miles count -->
                </div>

            </div> <!-- END OF ROW 2 TOTAL MILES & HOURS -->


            <div class="col-sm-12">

                <div id="calendar"></div>
            </div>
        </div><!-- end row -->
    </div> <!-- end row -->



</div>

<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>

<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Jvectormap -->
<script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- EayPIE -->
<script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>

<!-- Sparkline -->
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="js/demo/sparkline-demo.js"></script>


<script>
    $(document).ready(function() {
        $('.chart').easyPieChart({
            barColor: '#f8ac59',
//                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        $('.chart2').easyPieChart({
            barColor: '#1c84c6',
//                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        var data2 = [
            [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
            [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
            [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
            [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
            [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
            [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
            [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
            [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
        ];

        var data3 = [
            [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
            [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
            [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
            [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
            [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
            [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
            [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
            [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
        ];


        var dataset = [
            {
                label: "Number of orders",
                data: data3,
                color: "#1ab394",
                bars: {
                    show: true,
                    align: "center",
                    barWidth: 24 * 60 * 60 * 600,
                    lineWidth:0
                }

            }, {
                label: "Payments",
                data: data2,
                yaxis: 2,
                color: "#1C84C6",
                lines: {
                    lineWidth:1,
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.2
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                splines: {
                    show: false,
                    tension: 0.6,
                    lineWidth: 1,
                    fill: 0.1
                },
            }
        ];


        var options = {
            xaxis: {
                mode: "time",
                tickSize: [3, "day"],
                tickLength: 0,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Arial',
                axisLabelPadding: 10,
                color: "#d5d5d5"
            },
            yaxes: [{
                position: "left",
                max: 1070,
                color: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Arial',
                axisLabelPadding: 3
            }, {
                position: "right",
                clolor: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: ' Arial',
                axisLabelPadding: 67
            }
            ],
            legend: {
                noColumns: 1,
                labelBoxBorderColor: "#000000",
                position: "nw"
            },
            grid: {
                hoverable: false,
                borderWidth: 0
            }
        };

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }

        var previousPoint = null, previousLabel = null;

        $.plot($("#flot-dashboard-chart"), dataset, options);

        var mapData = {
            "US": 298,
            "SA": 200,
            "DE": 220,
            "FR": 540,
            "CN": 120,
            "AU": 760,
            "BR": 550,
            "IN": 200,
            "GB": 120,
        };

        $('#world-map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: "transparent",
            regionStyle: {
                initial: {
                    fill: '#e4e4e4',
                    "fill-opacity": 0.9,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 0
                }
            },

            series: {
                regions: [{
                    values: mapData,
                    scale: ["#1ab394", "#22d6b1"],
                    normalizeFunction: 'polynomial'
                }]
            },
        });
    });
</script>
</body>
</html>
