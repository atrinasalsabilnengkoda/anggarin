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
                            <h4>Edit Order</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Orders</a></li>
                                    <li class="breadcrumb-item active">Edit Order</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action = "" method="POST">
                                    <input type="hidden" name="id_order" id="id_pembayid_orderaran" value="<?= $order['id_order'] ?>"/>
                                    <div class="row mb-3">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Order</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" id="tanggal_order" name="tanggal_order" value="<?= $order['tanggal_order'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="id_customer"  name="id_customer" value="<?= $order['nama_cust'] ?>">
                                                <?php foreach($customer as $customer): ?>
                                                    <option value="<?php echo $customer['id_customer']; ?>"><?php echo $customer['nama_customer']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_sup" class="col-sm-2 col-form-label">Nama Produk</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="id_produk"  name="id_produk">>
                                                <?php foreach($product as $product): ?>
                                                    <option value="<?php echo $product['id_produk']; ?>"><?php echo $product['nama_produk']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Jumlah</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Masukkan Jumlah Item" id="jumlah_order" name="jumlah_order" value="<?= $order['jumlah_order'] ?>"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="status_order" name="status_order" value="<?= $order['status_order'] ?>">
                                                <option value="Proses">Proses</option>
                                                <option value="Selesai">Selesai</option>
                                                <option value="Batal">Batal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update
                                            </button>
                                            <a href="<?= base_url();?>order" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
                                        </div>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div>

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->