@extends('layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Barang</span>
                  <span class="info-box-number">
                  <h2>3</h2>
                  </span>
              </div>

              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-archive"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customer</span>
                  <span class="info-box-number">
                  <h2>4</h2>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number"><h2>2</h2></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pegawai</span>
                <span class="info-box-number"><h2>3</h2></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Rekap Bulanan</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Top Barang Terlaris</a>
                      <a href="#" class="dropdown-item">Penjualan Bulanan</a>
                      <a href="#" class="dropdown-item"></a>
                      <a class="dropdown-divider">Rata-Rata Harga Barang</a>
                      <a href="#" class="dropdown-item">Stok Barang</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Desember 2023 - 31 Desember 2023</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Penyelesaian Tujuan</strong>
                    </p>

                    <div class="progress-group">
                     Top Barang Terlaris
                      <span class="float-right"><b>90</b>/100</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                    Penjualan Bulanan
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Rata-Rata Harga Barang</span>
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                    Stok Barang
                      <span class="float-right"><b>210</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$43.671,78</h5>
                      <span class="description-text">TOTAL PENJUALAN</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$15.853,9</h5>
                      <span class="description-text">TOTAL CUSTOMER</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$31.097,90</h5>
                      <span class="description-text">TOTAL LABA</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1450</h5>
                      <span class="description-text">PENCAPAIAN TUJUAN</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
          
            
            <div class="row">        
            <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Browser MARKET SHARE</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class="chart-responsive">
                      <canvas id="pieChart" height="150"></canvas>
                    </div>
                    <!-- ./chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                      <li><i class="far fa-circle text-danger"></i> Kulkas</li>
                      <li><i class="far fa-circle text-success"></i>Televisi</li>
                      <li><i class="far fa-circle text-warning"></i> Komputer</li>
                      <li><i class="far fa-circle text-info"></i>Speaker</li>
                      <li><i class="far fa-circle text-primary"></i> Mesin Cuci</li>
                      <li><i class="far fa-circle text-secondary"></i> AC</li>
                    </ul>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Speaker
                      <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        23%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Televisi
                      <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 15%
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      AC
                      <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 2%
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.footer -->
            </div>
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Barang Yang Baru Ditambahkan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <!-- <div class="product-img">
                      <img src="dist/img/13.jfif" alt="Product Image" class="img-size-50">
                    </div> -->
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Smartwatch & Wearables
                        <span class="badge badge-warning float-right">4-6Jt</span></a>
                      <span class="product-description">
                      Pemantauan kesehatan, notifikasi pintar
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <!-- <div class="product-img">
                      <img src="dist/img/13.jfif" alt="Product Image" class="img-size-50">
                    </div> -->
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">Kamera & Aksesoris
                        <span class="badge badge-info float-right">8-15Jt</span></a>
                      <span class="product-description">
                      Lensa dengan berbagai fokus untuk hasil foto yang kreatif
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <!-- <div class="product-img">
                      <img src="dist/img/13.jfif" alt="Product Image" class="img-size-50">
                    </div> -->
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">
                      Gadget & Smartphone <span class="badge badge-danger float-right">
                        3-15Jt
                      </span>
                      </a>
                      <span class="product-description">
                      Abadikan momen indah dengan kamera terbaik di kelasnya
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <!-- <div class="product-img">
                      <img src="dist/img/12.jpg" alt="Product Image" class="img-size-50">
                    </div> -->
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"> Gaming Gear
                        <span class="badge badge-success float-right">5-10Jt</span></a>
                      <span class="product-description">
                      Mouse dan keyboard gaming dengan respons cepat
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">Lihat Semua Barang</a>
              </div>
              <!-- /.card-footer -->
            </div>
            </div>
            </div>
            <!-- /.card -->

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>