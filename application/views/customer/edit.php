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
                            <h4>Edit Customer</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Customers</a></li>
                                    <li class="breadcrumb-item active">Edit Customer</li>
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
                                <input type="hidden" name="id_customer" id="id_customer" value="<?= $customer['id_customer'] ?>"/>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Masukkan Nama" name="nama_customer" id="nama_customer" value="<?= $customer['nama_customer'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" placeholder="Masukkan Email" id="email_customer" name="email_customer"value="<?= $customer['email_customer']?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">No. Telp</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" placeholder="Masukkan No. Telp" id="telp_customer" name="telp_customer" value="<?= $customer['telp_customer']?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example" name="keterangan_order" id="keterangan_order" >
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum Lunas">Belum Lunas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Bergabung</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date"  id="tanggal_bergabung" name="tanggal_bergabung" value="<?= $customer['tanggal_bergabung']?>">
                                    </div>
                                </div>
                                <br>
                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Update
                                        </button>
                                        <a href="<?= base_url();?>customer" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
                                    </div>
                                </div>
                                <form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div>

            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->