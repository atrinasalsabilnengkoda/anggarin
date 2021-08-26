<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <div class="main-content">
            <div class="page-content">
                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                     <div class="row align-items-center">
                         <div class="col-sm-6">
                             <div class="page-title">
                                 <h4>Dashboard</h4>
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                         <li class="breadcrumb-item active">Dashboard</li>
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
                                        <h1 class="header-title mb-4 float-sm-start">Grafik Pendapatan dan Pengeluaran Tahun ini</h1>
                                        <div class="clearfix"></div>
                                       

                                        <div class="row align-items-center">
                                            <div class="col-xl-9">

                                                <div>
                                                    <canvas id="my_chart"></canvas>
                                                </div>

                                            </div>


                                            <div class="col-xl-3">
                                                <div class="dash-info-widget mt-4 mt-lg-0 py-4 px-3 rounded">

                                                  

                                                    <div class="media dash-main-border pb-2 mt-2">
                                                        <div class="avatar-sm mb-3 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                    <i class="mdi mdi-currency-inr text-primary font-size-18"></i>
                                                                </span>
                                                        </div>
                                                       <div class="media-body ps-3">
                                                        <h3 class="font-size-15">Rp.</h3>
                                                        <h4 class="font-size-25"><td><?php echo $total_pendapatan; ?></td></h4>
                                                        <p class="text-muted">Total <a href="#" class="text-primary">Pendapatan <i class="mdi mdi-arrow-right"></i></a>
                                                        </p>

                                                       </div>
                                                      
                                                    </div>


                                                    <div class="media mt-4 dash-main-border pb-2">
                                                        <div class="avatar-sm mb-3 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                    <i class="mdi mdi-credit-card-outline text-primary font-size-18"></i>
                                                                </span>
                                                        </div>
                                                        <div class="media-body ps-3">
                                                             <h3 class="font-size-15">Rp.</h3>
                                                             <h4 class="font-size-25"><?php echo $total_pengeluaran; ?></h4>
                                                        <p class="text-muted">Total <a href="#" class="text-primary">Pengeluaran <i class="mdi mdi-arrow-right"></i></a></p>
                                                        </div>
                                                    </div>

                                                 

                                                    <div class="media mt-4">
                                                        <div class="avatar-sm mb-2 mt-2">
                                                            <span class="avatar-title rounded-circle bg-white shadow">
                                                                    <i class="mdi mdi-eye-outline text-primary font-size-18"></i>
                                                                </span>
                                                        </div>
                                                       <div class="media-body ps-3">
                                                             <h3 class="font-size-15">Rp.</h3>
                                                             <h4 class="font-size-25"><?php echo $total_pendapatan-$total_pengeluaran; ?></h4>
                                                        <p class="text-muted mb-0">Total <a href="#" class="text-primary">Keuntungan <i class="mdi mdi-arrow-right"></i></a></p>
                                                       </div>
                                                    </div>
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
                                                    <h5 class="font-size-22"><?php echo $jumlah_order; ?></h5>

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
                                                    <p class="font-size-16">Users</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                                <i class="mdi mdi-account-outline text-success font-size-20"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo $jumlah_customer; ?></h5>

                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="header-title mb-5">Products of the Month</h3>
                                        <div class="table">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Produk</th> 
                                                        <th>Harga</th>
                                                        <th>Stok</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($top_product as $top_product): ?>
                                                    <tr>
                                                        <td><?= $top_product['nama_produk'];?></td>
                                                        <td>Rp. <?= $top_product['harga_jual'];?></td>
                                                        <td><?= $top_product['jumlah_produk'];?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
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
                        if (count($income)>0) {
                            foreach ($income as $data) {
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
                            if (count($income)>0) {
                            foreach ($income as $data) {
                                echo $data->total_order . ", ";
                            }
                            }
                        ?>
                        ]
                    }, {
                        label: 'Jumlah Pengeluaran',
                        backgroundColor: '#34c38f',
                        borderColor: '#34c38f',
                        columnWidth:'20%',
                        endingShape:'rounded',
                        data: [
                        <?php
                            if (count($outcome)>0) {
                            foreach ($outcome as $data) {
                                echo $data->jumlah_pembayaran . ", ";
                            }
                            }
                        ?>
                        ]
                    }]
                },
            });
            
            </script>