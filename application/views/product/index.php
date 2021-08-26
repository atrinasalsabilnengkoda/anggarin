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
                            <h4>Products</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Data Product</li>
                                </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="<?= base_url();?>addproduct" class="btn btn-success"><i class="mdi mdi-plus me-2"></i>Add Product</a>
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
                            <div class="card-body  pt-0">
                                <div class="table">
                                    <table id="datatable-buttons" class="table table-centered datatable dt-responsive nowrap ">
                                        <thead class="thead-light">
                                            <tr>
                                                <th></th>
                                                <th>No.</th>
                                                <th>Gambar</th>
                                                <th>Nama Item</th>
                                                <th>Jumlah</th>
                                                <th>Kategori</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Status</th>
                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1;
                                            foreach($produk as $produk): ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?= $no++?></td>
                                                    <td>
                                                        <img src="<?php echo base_url('./upload/'.$produk['gambar_produk']); ?>" width="42" class="me-3" alt=""/>
                                                    </td>
                                                    <td><?= $produk['nama_produk'];?></td>
                                                    <td><?= $produk['jumlah_produk'];?></td>
                                                    <td><?= $produk['kategori'];?></td>
                                                    <td><?= $produk['harga_beli'];?></td>
                                                    <td><?= $produk['harga_jual'];?></td>
                                                    <td><div class="badge badge-soft-warning font-size-12"><?php echo $status_order; ?></td></div>
                                                    <td id="tooltip-container0">
                                                    <a href="<?php echo base_url('product/edit') ?>/<?php echo $produk['id_produk'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i> </a>
                                                    <a href="<?php echo base_url('product/hapus') ?>/<?php echo $produk['id_produk'] ?>" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" id="flash_hps"  data-flash="<?= $this->session->flashdata('msg_hapus');?>"><i class="mdi mdi-trash-can font-size-18"></i></a>
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