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
                            <h4>Edit Supplier</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Supplier</a></li>
                                    <li class="breadcrumb-item active">Edit Supplier</li>
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
                                <form action = "" enctype="multipart/form-data" method="POST">
                                <input type="hidden" name="id_supplier" id="id_supplier" value="<?= $supplier['id_supplier'] ?>"/>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Supplier</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Supplier" id="nama_supplier" name="nama_supplier" value="<?= $supplier['nama_supplier'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label">No. Telp Supplier</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" placeholder="Masukkan No. Telp Supplier" id="telp_supplier" name="telp_supplier" value="<?= $supplier['telp_supplier'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Email Supplier</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" placeholder="Masukkan Email Supplier" id="email_supplier" name="email_supplier" value="<?= $supplier['email_supplier'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori" value="<?= $supplier['kategori'] ?>">
                                                <?php foreach($kategori as $kategori): ?>
                                                    <option value="<?php echo $kategori['nama_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="keterangan_supplier" name="keterangan_supplier" value="<?= $supplier['keterangan_supplier'] ?>">
                                                <option value="Lunas">Lunas</option>
                                                <option value="Belum Lunas">Belum Lunas</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <img src="<?php echo base_url('./upload/'.$supplier['gambar_supplier']); ?>"/>
                                            <input class="form-control" type="file" placeholder="Masukkan gambar" id="gambar_supplier"  name="gambar_supplier">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update
                                            </button>
                                            <a href="<?= base_url();?>supplier" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
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