
<?php 
session_start();
if (!isset($_SESSION['Username'])) :
    echo '<meta http-equiv="refresh" content="0; URL=Login.php"/>';
else :
    function PersonnelLogin($conn, $PersonnelAccount)
{
    $sql_query_Personnel = "SELECT `PersonnelName` FROM `personnel` WHERE `PersonnelAccount` = '{$PersonnelAccount}'";
    $sql_result_Personnel = mysqli_query($conn, $sql_query_Personnel) or die(mysql_error());
    while ($row = $sql_result_Personnel->fetch_assoc()) {
        echo $row['PersonnelName'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Umbala Project</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    
    
    <link href="vendor/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="vendor/stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="vendor/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="vendor/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <link herf="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Nav Css -->
    <link rel="stylesheet" href="vendor/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="vendor/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="#">Umbala</a>
                </h1>
                <span></span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        Management
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-laptop"></i>
                        Management Education
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="?page=edu">Education</a>
                        </li>
                        <li>
                            <a href="?page=sub">Subject</a>
                        </li>
                        <li>
                            <a href="#">Class Mate</a>
                        </li>
                      
                    </ul>
                </li>
                <li>
                    <a href="?page=per">
                    <i class="fas fa-address-book"></i>
                        Personnal
                    </a>
                </li>
                <li>
                    <a href="?page=student">
                    <i class="fas fa-address-card"></i>
                        Student
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Pages
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="#">404</a>
                        </li>
                        <li>
                            <a href="#">500</a>
                        </li>
                        <li>
                            <a href="#">Blank</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-envelope"></i>
                        Mailbox
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="far fa-window-restore"></i>
                        Widgets
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-table"></i>
                        Pricing Tables
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                        <li>
                            <a href="#">Forgot password</a>
                        </li>
                    </ul>
                </li>
                <?php 
                if (isset($_SESSION['Username']) && $_SESSION['Username'] != "") {
                    ?>
                <li>
                    <a href="?page=UpdatePersonnel1">
                        <i class="far fa-map"></i>
                        Update User
                    </a>
                </li>
                <?php 
            }
            ?>
                <li><a href="Logout.php"><i class="far fa-map"></i>
                        Logout</a></li>
                                                                                                                         
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">User notifications</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="vendor/images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>4 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="vendor/images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>6 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="vendor/images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>12 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="vendor/images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>1 days ago</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">view all notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Sed feugiat</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>Aliquam sed</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Lorem ipsum</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Cras rutrum</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="vendor/images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Activity</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
<?php 
include_once("config/connect.php");
?>
<?php 
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "edu") {
        include_once("resource/Education/Education.php");
    }
    if ($page == "addEdu") {
        include_once("resource/Education/AddEducation.php");
    }
    if ($page == "educationUpdate") {
        include_once("resource/Education/UpdateEducation.php");
    }
    if ($page == "sub") {
        include_once("resource/Subject/Subject.php");
    }
    if ($page == "addsub") {
        include_once("resource/Subject/AddSubject.php");
    }
    if ($page == "subjectupdate") {
        include_once("resource/Subject/UpdateSubject.php");
    }
    //personnal
    if ($page == "per") {
        include_once("resource/Personnal/Personnal.php");
    }
    if ($page == "addper") {
        include_once("resource/Personnal/AddPersonnal.php");
    }
    if ($page == "updateper") {
        include_once("resource/Personnal/UpdatePersonnal.php");
    }
} else
    include_once('body.php')
?>
            <!--// Countdown -->
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="https://github.com/dangtuanhuy"> Hachi </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='vendor/js/jquery-2.2.3.min.js'></script>
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src='//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
    <script language="javascript">
                              $(document).ready(function() {
                                var table = $('#myTable').DataTable( {
                                  responsive: true,
                                  "language": {
                                    // "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
                                    // "info": "Hiển thị _START_ trong tổng số _TOTAL_ dòng dữ liệu",
                                    // "infoEmpty": "Dữ liệu rỗng",
                                    // "emptyTable": "Chưa có dữ liệu nào",
                                    // "processing": "Đang xử lý...",
                                    // "search": "Tìm kiếm:",
                                    "infoEmpty": "Empty data",
                                    "emptyTable": "Data not available",
                                    "processing": "Processing...",
                                    "search": "Search:",
                                    "loadingRecords": "Loading data...",
                                    "zeroRecords": "Data not found",
                                    // "loadingRecords": "Đang load dữ liệu...",
                                    // "zeroRecords": "không tìm thấy dữ liệu",
                                    // "infoFiltered": "(Được từ tổng số _MAX_ dòng dữ liệu)",
                                    "paginate": {
                                      "first": "|<",
                                      "last": ">|",
                                      "next": ">>",
                                      "previous": "<<"
                                    }
                                  },
                                  "lengthMenu": [[10, 15, 20, 25, 30, -1], [10, 15, 20, 25, 30, "All"]]
                                } );
        //new $.fn.dataTable.FixedHeader( table );
      } );
    </script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="vendor/js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="vendor/js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                    X: "6",
                    Y: 300.00
                },
                {
                    X: "7",
                    Y: 101.98
                },
                {
                    X: "8",
                    Y: 140.00
                },
                {
                    X: "9",
                    Y: 340.00
                },
                {
                    X: "10",
                    Y: 470.25
                },
                {
                    X: "11",
                    Y: 180.56
                },
                {
                    X: "12",
                    Y: 680.57
                },
                {
                    X: "13",
                    Y: 740.00
                },
                {
                    X: "14",
                    Y: 800.89
                },
                {
                    X: "15",
                    Y: 420.57
                },
                {
                    X: "16",
                    Y: 980.24
                },
                {
                    X: "17",
                    Y: 1080.00
                },
                {
                    X: "18",
                    Y: 140.24
                },
                {
                    X: "19",
                    Y: 140.58
                },
                {
                    X: "20",
                    Y: 110.54
                },
                {
                    X: "21",
                    Y: 480.00
                },
                {
                    X: "22",
                    Y: 580.00
                },
                {
                    X: "23",
                    Y: 340.89
                },
                {
                    X: "0",
                    Y: 100.26
                },
                {
                    X: "1",
                    Y: 1480.89
                },
                {
                    X: "2",
                    Y: 1380.87
                },
                {
                    X: "3",
                    Y: 1640.00
                },
                {
                    X: "4",
                    Y: 1700.00
                }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="vendor/js/rumcaJS.js"></script>
    <script src="vendor/js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="vendor/js/moment.min.js"></script>
    <script src="vendor/js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="vendor/js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="vendor/js/simplyCountdown.js"></script>
    <link href="vendor/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='vendor/js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
                country: "Lithuania",
                value: 260
            },
            {
                country: "Ireland",
                value: 201
            },
            {
                country: "Germany",
                value: 65
            },
            {
                country: "Australia",
                value: 39
            },
            {
                country: "UK",
                value: 19
            },
            {
                country: "Latvia",
                value: 10
            }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="vendor/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
<?php
endif;
?>