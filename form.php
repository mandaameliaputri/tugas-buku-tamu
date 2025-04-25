<?php include('template/header.php') ?>
<?php include('template/sidebar.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No telepon</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter no">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pesan</label>
                  <textarea name = "pesan_tamu" cols= "30" rows="5"></textarea>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="submit" class="btn btn-primary">Reset</button>
            </form>
          </div>