    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title ;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('setting');?>"><small>Member</small></a></li>
              <li class="breadcrumb-item"><small><?php echo $title; ?></small></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Default box -->
        <div class="card">
          <div class="card-header bg-success">
            <h4 class="card-title"><strong>Selamat Datang</strong></h4>
          </div>
          <div class="card-body">
            <p class="text-justify">Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box">
                  <div class="inner">
                    <br>
                    <br>
                    <i class="fas fa-home"></i>
                    <br>
                    <br>
                  </div>
                  <div class="icon">
                    <i class="fas fa-home"></i>
                  </div>
                  <a href="<?php echo base_url();?>" class="small-box-footer bg-info">
                    Home
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box">
                  <div class="inner">
                    <br>
                    <br>
                    <i class="fas fa-book"></i>
                    <br>
                    <br>
                  </div>
                  <div class="icon">
                    <i class="fas fa-book"></i>
                  </div>
                  <a href="<?php echo base_url('member/master');?>" class="small-box-footer bg-info">
                    Data Master
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box">
                  <div class="inner">
                    <br>
                    <br>
                    <i class="fas fa-tools"></i>
                    <br>
                    <br>
                  </div>
                  <div class="icon">
                    <i class="fas fa-tools"></i>
                  </div>
                  <a href="<?php echo base_url('member/pertukaran');?>" class="small-box-footer bg-info">
                    Data Perawatan
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box">
                  <div class="inner">
                    <br>
                    <br>
                    <i class="fas fa-file-alt"></i>
                    <br>
                    <br>
                  </div>
                  <div class="icon">
                    <i class="fas fa-file-alt"></i>
                  </div>
                  <a href="<?php echo base_url('member/laporan');?>" class="small-box-footer bg-info">
                    Data Laporan
                  </a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box">
                  <div class="inner">
                    <br>
                    <br>
                    <i class="fas fa-sign-out-alt"></i>
                    <br>
                    <br>
                  </div>
                  <div class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                  </div>
                  <a href="<?php echo base_url('auth/logout')?>" class="small-box-footer bg-info" data-toggle="modal" data-target="#logOutModal">Sign out</a>
                </div>
              </div>

              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->