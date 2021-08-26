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
                            <h4>Orders</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggaran.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                                    <li class="breadcrumb-item active">Data Order</li>
                                </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="<?= base_url();?>addorder" class="btn btn-success"><i class="mdi mdi-plus me-2"></i>Add Order</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->    

        <div class="container-fluid">
            <div id="flash_tmbh" data-flash="<?= $this->session->flashdata('msg');?>"></div>
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link fw-bold p-3 active" href="<?php echo base_url('')?>order">All Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>paidOrder">Paid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>unpaidOrder">Unpaid</a>
                                    </li>
                                </ul>
                                <div class="table mt-3 tab-content">
                                    <table id="datatable-buttons" class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th>No.</th>
                                                <th>Tanggal</th>
                                                <th>Pelanggan</th>
                                                <th>Email</th>
                                                <th>Item</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach($order as $orders): ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $no++?></td>
                                                <td><?= $orders['tanggal_order'];?></td>
                                                <td><?= $orders['nama_customer'];?></td>
                                                <td><?= $orders['email_customer'];?></td>
                                                <td><?= $orders['nama_produk'];?></td>
                                                <td><?= $orders['jumlah_order'];?></td>
                                                <td>Rp. <?= $orders['total_order'];?></td>
                                                <td>
                                                    <div class=" badge badge-soft-warning"><?= $orders['status_order'];?></div>
                                                </td>
                                                <td id="tooltip-container1">
                                                <a href="<?php echo base_url('order/edit') ?>/<?php echo $orders['id_order'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i> </a>
                                                    <a href="<?php echo base_url('order/hapus') ?>/<?php echo $orders['id_order'] ?>" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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