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
                            <h4>Add Bank</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bank</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Bank</a></li>
                                    <li class="breadcrumb-item active">Add Bank</li>
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
                                <form action="<?= base_url();?>addbank" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input class="form-control" type="hidden" placeholder="Masukkan ID" id="id_bank" name="id_bank">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_akun" class="col-sm-2 col-form-label">Nama Akun</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Akun Bank" id="nama_akun" name="nama_akun">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="no_rek" class="col-sm-2 col-form-label">No. Rekening</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan No. Rekening" id="no_rek" name="no_rek">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_bank" class="col-sm-2 col-form-label">Nama Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Bank" id="nama_bank" name="nama_bank">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat_bank" class="col-sm-2 col-form-label">Alamat Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Alamat Bank" id="alamat_bank" name="alamat_bank">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="telp_bank" class="col-sm-2 col-form-label">No. Telp Bank</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" placeholder="Masukkan No. Telp Bank" id="telp_bank" name="telp_bank">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="saldo_awal" class="col-sm-2 col-form-label">Saldo Awal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Masukkan Saldo Awal" id="saldo_awal" name="saldo_awal">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status Akun</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="status_akun" name="status_akun">
                                                <option selected="">-- Pilih Status --</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Akun Utama</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="akun_utama" name="akun_utama">
                                                <option selected="">-- Pilih Keterangan Akun --</option>
                                                <option value="Akun Bank Utama">Akun Bank Utama</option>
                                                <option value="Akun Bank">Akun Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                            Submit
                                        </button>
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