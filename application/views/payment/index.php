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
                            <h4>Supplier</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item active">Data Payment</li>
                                </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="<?= base_url();?>addpayment" class="btn btn-success"><i class="mdi mdi-plus me-2"></i> Add Payment</a>
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
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold p-3 active" href="<?php echo base_url('')?>payment">All Payments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>paidPayment">Paid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>unpaidPayment">Unpaid</a>
                                    </li>
                                </ul>
                                <div class="table mt-3 tab-content">
                                    <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th>No.</th>
                                                <th>Tanggal Pembayaran</th>
                                                <th>Nama Supplier</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah Pembayaran</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach($pembayaran as $pembayaran): ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $no++?></td>
                                                <td><?= $pembayaran['tanggal_pembayaran'];?></td>
                                                <td><?= $pembayaran['nama_supplier'];?></td>
                                                <td><?= $pembayaran['nama_produk'];?></td>
                                                <td>Rp. <?= $pembayaran['jumlah_pembayaran'];?></td>
                                                <td><?= $pembayaran['jenis_pembayaran'];?></td>
                                                <td>
                                                        <div class="badge badge-soft-warning font-size-12"><?= $pembayaran['status_pembayaran'];?></div>
                                                </td>
                                                <td id="tooltip-container0">
                                                    <a href="<?php echo base_url('payment/edit') ?>/<?php echo $pembayaran['id_pembayaran'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i> </a>
                                                    <a href="<?php echo base_url('payment/hapus') ?>/<?php echo $pembayaran['id_pembayaran'] ?>" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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