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
                                    <li class="breadcrumb-item active">Data Supplier</li>
                                </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="<?= base_url();?>addsupplier" class="btn btn-success"><i class="mdi mdi-plus me-2"></i> Add Supplier</a>
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
                                    <a class="nav-link fw-bold p-3 " href="<?php echo base_url('')?>supplier">All Suppliers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-bold active" href="<?php echo base_url('')?>paidSupplier">Paid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>unpaidSupplier">Unpaid</a>
                                </li>
                            </ul>
                            <div class="table mt-3 tab-content">
                                    <table id="datatable-buttons" class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th>No.</th>
                                                <th >Gambar</th>
                                                <th>Nama Supplier</th>
                                                <th>Email</th>
                                                <th>Telp</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th style="width: 150px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach($paid_supplier as $supplier): ?>
                                            <tr>
                                                <td></td>
                                                <td><?= $no++?></td>
                                                <td><img src="<?php echo base_url('./upload/'.$supplier['gambar_supplier']); ?>" width="42" class="me-3" alt=""/></td>
                                                <td><?= $supplier['nama_supplier'];?></td>
                                                <td><?= $supplier['email_supplier'];?></td>
                                                <td><?= $supplier['telp_supplier'];?></td>
                                                <td><?= $supplier['kategori'];?></td>
                                                <td>
                                                        <div class="badge badge-soft-warning font-size-12"><?= $supplier['keterangan_supplier'];?></div>
                                                </td>
                                                <td id="tooltip-container0">
                                                    <a href="<?php echo base_url('supplier/histori') ?>/<?php echo $supplier['id_supplier'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="top" title="Histori"><i class="mdi mdi-history font-size-18"></i></a>
                                                    <a href="<?php echo base_url('supplier/edit') ?>/<?php echo $supplier['id_supplier'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i> </a>
                                                    <a href="<?php echo base_url('supplier/hapus') ?>/<?php echo $supplier['id_supplier'] ?>" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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