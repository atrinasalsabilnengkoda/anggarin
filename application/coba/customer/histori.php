<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Customers</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggaran.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Customer</a></li>
                                    <li class="breadcrumb-item active">Riwayat Pembelian</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body  pt-0">
                                <br>
                                <h4>Nama Pelanggan : <?php echo $data_customer; ?></h4>
                                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold p-3 active" href="#">Histori Order</a>
                                    </li>
                                </ul>
                                <div class="table">
                                    <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="ordercheck">
                                                        <label class="form-check-label" for="ordercheck">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Tanggal</th>
                                                <th>Item</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($histori as $customer): ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                        <label class="form-check-label" for="ordercheck1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                
                                                <td><a href="javascript: void(0);" class="text-dark fw-bold"><?= $customer['tanggal_order'];?></a> </td>
                                                <td><?= $customer['nama_produk'];?></td>
                                                <td><?= $customer['jumlah_order'];?></td>
                                                <td><?= $customer['total_order'];?></td>
                                                <td>
                                                    <div class=" badge badge-soft-warning"><?= $customer['status_order'];?></div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->