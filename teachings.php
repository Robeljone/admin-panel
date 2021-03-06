
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naka Advertising ReachMe V card</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
           <p>Manage Organization</p>
        </a>
       </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: white; ">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" >
      <img src="public/images/comlog.jpg" alt="Company Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: black;">Admin Panel</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2" style="color: black;" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"  style="color:black;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
            <a href="#" class="nav-link" style="background-color: #d97b3b;">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Manage Subscription
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="organization.php" class="nav-link" style="background-color: white; ">
                  <p style="color: black;"></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="packages.php" class="nav-link" style="background-color: white;">
                 
                  <p style="color: black;">Reports</p>
                </a>
              </li>
            </ul>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Employee List</li>
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
            <h3 class="card-title">Employee Registration</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form method="post" action="#">
                        <div class="row register-form" style="margin-left: 20px;">
                                    <div class="col-md-3">
                                       <label class="form-group">User Profile</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name *" value="" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Employee Email 1*" value="" />
                                        </div>
                                        <div class="form-group">
                                          <input type="password" class="form-control"  placeholder="Employee Phone 1 *" value=""/>
                                        </div>
                                        <div class="form-group">
                                          <input type="password" class="form-control"  placeholder="Employee Phone 2 *" value=""/>
                                        </div>
                                        <div class="form-group">
                                          <select class="form-control">
                                          <option class="hidden"  >Organization</option>
                                          </select>
                                        </div>
                                    </div>
                                      <div class="col-md-3">
                                        <label class="form-group">Employeement Detail</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Employee Position *" value="" />
                                        </div>
                                        <div class="form-group">
                                         <input type="file" name="" class="form-control" accept="image/jpeg">
                                         </div>
                                         <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                         </div>
                                    </div>
               </div>
       
               </div>
           </div>
              <!-- /.col -->
            </div>
          </form>
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
</body>
</html>
