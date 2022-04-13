<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EOTC</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="public/dist/css/socialmedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li>
                    <a class="nav-link" data-slide="true" href="index.php" role="button">
                        <i class="fas fa-lock"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" data-slide="true" role="button">
                        <p>Manage Day Teachings</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: white; ">
            <!-- Brand Logo -->
            <a href="dashboard.php" class="brand-link">
                <img src="public/images/comlog.jpg" alt="Company Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light" style="color: black;">Admin Panel</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2" style="color: black;">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false" style="color:black;">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #d97b3b;">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Manage Teachings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="dayteach.php" class="nav-link" style="background-color: white; ">
                                        <p style="color: black;">Manage Day Teachings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="allteachings.php" class="nav-link" style="background-color: white; ">
                                        <p style="color: black;">Manage Teachings</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #d97b3b;">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Manage Messages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="messages.php" class="nav-link" style="background-color: white; ">
                                        <p style="color: black;">Manage Message</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #d97b3b;">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Manage Medias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="video.php" class="nav-link" style="background-color: white; ">
                                        <p style="color: black;">Manage Video Teachings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="othermedia.php" class="nav-link" style="background-color: white; ">
                                        <p style="color: black;">Manage audio/article Teachings</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

            </div>
        </aside>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Manage day Teach</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content" style="margin-left: 2px;">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Manage Daily Teachings</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <label class="form-group">Full-Name</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                            <label class="form-group">Date-Published</label>
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                            <label class="form-group">Images</label>
                            <div class="form-group">
                                <input type="file" class="form-control" accept="image/*" placeholder="Please input Full Name *" value=""
                                    required="required" />
                            </div>
                        </div>
                    </div>
            </section>
            <section class="content" style="margin-left: 2px;">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">List of day teach</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Full-Name</th>
                                        <th>Date-Published</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Full-Name</th>
                                        <th>Date-Published</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="public/dist/js/demo.js"></script>
    <script src="public/dist/js/demo.js"></script>
</body>
</html>