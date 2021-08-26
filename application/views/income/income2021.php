<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<body>
<div class="main-content">
    <div class="page-content">
        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Report</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Report</a></li>
                                    <li class="breadcrumb-item active">Laporan Pendapatan Tahun 2021</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- end page title -->    

        <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-sm-right">
                                    <h3 class="header-title">Grafik Pendapatan Tahun 2021</h3>
                                </div><br>
                                <div class="row align-items-center">
                                    <div class="col-xl-9">

                                        <div>
                                            <canvas id="my_chart"></canvas>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Orders</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                            </div>
                                            <h5 class="font-size-22"><?php echo $jumlah_order2021; ?></h5>

                                            
                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Customers</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-success">
                                                        <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                    </span>
                                            </div>
                                            <h5 class="font-size-22"><?php echo $jumlah_customer2021; ?></h5>

                                            
                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="btn-group mt-1 me-1">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                2021 <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('')?>income2020">2020</a>
                                <a class="dropdown-item" href="<?php echo base_url('')?>income2022">2022</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('')?>income">Semuanya</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Januari</th>
                                            <th>Februari</th>
                                            <th>Maret</th>
                                            <th>April</th>
                                            <th>Mei</th>
                                            <th>Juni</th>
                                            <th>Juli</th>
                                            <th>Agustus</th>
                                            <th>September</th>
                                            <th>Oktober</th>
                                            <th>November</th>
                                            <th>Desember</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rp. <?php echo $pendapatan_jan2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_feb2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_mar2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_apr2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_mei2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_jun2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_jul2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_agu2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_sep2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_okt2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_nov2021; ?></td>
                                            <td>Rp. <?php echo $pendapatan_des2021; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0"></script>
  <script type="text/javascript">
    var ctx = document.getElementById('my_chart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
          <?php
            if (count($graph2021)>0) {
              foreach ($graph2021 as $data) {
                echo "'" .$data->month ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Pendapatan',
            backgroundColor: '#525ce5',
            borderColor: '#525ce5',
            columnWidth:'20%',
            endingShape:'rounded',
            data: [
              <?php
                if (count($graph2021)>0) {
                   foreach ($graph2021 as $data) {
                    echo $data->total_order . ", ";
                  }
                }
              ?>
            ]
        }]
    },
});
 
  </script>
</body>