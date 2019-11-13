
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
<title> Data Blog </title>
    @include('Template.head') 
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <marquee>Welcome to Web Dinamis</marquee></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Bordered Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th>Nama</th>
                            <th style="width:25%"><center>Aksi</center></th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($varHuruf as $isinya)
                            <tr>
                             <td>{{$isinya}}</td>
                            <td>
                              <a href="{{$isinya}}">
                                 <i class="fas fa-eye red">Lihat|</i>
                              </a>

                              <a href="{{$isinya}}">
                                    <i class="fas fa-edit purple">Edit|</i>
                              </a>

                              <a href="{{$isinya}}">
                                    <i class="fas fa-trash-alt green">Hapus</i>      
                                </a>    
                              </td>
                            </tr>
                             @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
    
    </div>
  </div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- Main Footer -->
  @include('Template.Footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
  @include('Template.script')
</body>
</html>
