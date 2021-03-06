<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESgXSW_pldKC4m-JoB9rzDm1dCvaqKW4"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GPS-Platform&nbsp;&nbsp;&nbsp;</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-left">
                <!-- เมนูด้านบน -->
                <!-- Tracking -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="http://www.google.com">
                        <i class="fa fa-envelope fa-fw"></i>
                        <span>Tracking</span>
                    </a>
                </li>
                <!-- ประวัติย้อนหลัง -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="" href="http://www.facebook.com">
                        <i class="fa fa-tasks fa-fw"></i>
                        <span>History</span>
                    </a>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- ระบบจัดการฐานข้อมูล -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>
                        <span>Data management</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i> 1.............หัวข้อที่ 1................</a>
                        </li>
                        <!-- <li class="divider"></li> -->
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i> 2........หัวข้อที่ 2.......</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out fa-fw"></i> 3......................หัวข้อที่ 3........................</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- รายงาน -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <span>Report </span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="./report1.php">
                                <i class="fa fa-edit fa-fw"></i> รายงานสรุปการเดินทาง</a>
                        </li>
                        <li>
                            <a href="./report2.php">
                                <i class="fa fa-edit fa-fw"></i> รายงานความเร็วเกินพิกัด</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-edit fa-fw"></i> รายงานการเข้าสถานี</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="./report4.php">
                                <i class="fa fa-edit fa-fw"></i> รายงานจอดรถไม่ดับเครื่องยนต์</a>
                        </li>
                        <li>
                            <a href="./report5.php">
                                <i class="fa fa-edit fa-fw"></i> รายงานจอดรถดับเครื่องยนต์</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="./report6.php">
                                <i class="fa fa-edit fa-fw"></i> รายงานสถานะ</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-edit fa-fw"></i> รายงานกราฟ</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- ผู้ใช้ -->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <span>User</span>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <l i>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                </ul>
                <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--ใส่ data table  -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">รายงานการเข้าสถานี</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div id="panel-default">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <p class="fa fa-truck"></p>
                                <label>Car Group</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>1000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <p class="fa fa-truck"></p>
                                <label>Car</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <i class="fa fa-calendar">
                                </i>
                                <label>Date Start</label>
                                <input type="date" class="form-control" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <i class="fa fa-calendar">
                                </i>
                                <label>Date End</label>
                                <input type="date" class="form-control" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <span class="glyphicon glyphicon-time"></span>
                                <label>Time Start</label>
                                <input type="time" class="form-control" placeholder="Select Date">
                            </div>
                        </div>
                        <div class="col-md-2 in-col-centered">
                            <div class="form-group">
                                <span class="glyphicon glyphicon-time"></span>
                                <label>Time End</label>
                                <input type="time" class="form-control" placeholder="Select Date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-5"></div> -->
        <div class="col-md-1  in-col-centered" style="width: 150px;">
                                                <div class="form-group">
                                                    <label>Over Time</label>
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control numeric" id="fieldOverTime" name="overTime" maxlength="4" required="">
                                                        <div class="help-block with-errors"></div>
                                                        <span class="input-group-addon">
                                                             <span>นาที</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
        <div class="col-lg-12 text-center">
            <div class="form-group">
                </br>
                <button type="submit" class="btn btn-sm btn-primary text-bold disabled " id="btnSearch">
                    <span>Search</span>
                    &nbsp;&nbsp;
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <button type="button" class="btn btn-success">Excel</button>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example"
                                    role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                                                style="width: 207px;">Rendering engine</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 246px;">Browser</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                                style="width: 226px;">Platform(s)</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                                                style="width: 181px;">Engine version</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 138px;">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko2</td>
                                            <td>Mozilla 1.02</td>
                                            <td>Win 95+ / OSX.12+</td>
                                            <td class="center">12</td>
                                            <td class="center">A2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker();
        });
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>