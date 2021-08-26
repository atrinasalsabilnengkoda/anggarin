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
                            <h4>Edit Bank</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bank</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Bank</a></li>
                                    <li class="breadcrumb-item active">Edit Bank</li>
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
                                    <input type="hidden" name="id_bank" id="id_bank" value="<?= $bank['id_bank'] ?>"/>
                                    <div class="row mb-3">
                                        <label for="nama_akun" class="col-sm-2 col-form-label">Nama Akun</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Akun Bank" id="nama_akun" name="nama_akun" value="<?= $bank['nama_akun'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="no_rek" class="col-sm-2 col-form-label">No. Rekening</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan No. Rekening" name="no_rek" id="no_rek" value="<?= $bank['no_rek'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_bank" class="col-sm-2 col-form-label">Nama Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Bank" name="nama_bank" id="nama_bank" value="<?= $bank['nama_bank'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat_bank" class="col-sm-2 col-form-label">Alamat Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Alamat Bank" name="alamat_bank" id="alamat_bank" value="<?= $bank['alamat_bank'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="telp_bank" class="col-sm-2 col-form-label">No. Telp Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" placeholder="Masukkan No. Telp Bank" name="telp_bank" id="telp_bank" value="<?= $bank['telp_bank'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="saldo_awal" class="col-sm-2 col-form-label">Saldo Awal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Masukkan Saldo Awal" name="saldo_awal" id="saldo_awal" value="<?= $bank['saldo_awal'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status Akun</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="status_akun" name="status_akun" value="<?= $bank['status_akun'] ?>">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Akun Utama</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="akun_utama" name="akun_utama" value="<?= $bank['akun_utama'] ?>">
                                                <option value="Akun Bank Utama">Akun Bank Utama</option>
                                                <option value="Akun Bank">Akun Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Update</button>
                                            <a href="<?= base_url();?>bank" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
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