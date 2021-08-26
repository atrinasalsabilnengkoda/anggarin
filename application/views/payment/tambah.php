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
                            <h4>Add Payment</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoice</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pembayaran</a></li>
                                    <li class="breadcrumb-item active">Add Payment</li>
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
                                <form action="" method="POST">
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input class="form-control" type="hidden" placeholder="Masukkan ID" id="id_pembayaran" name="id_pembayaran">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama_sup" class="col-sm-2 col-form-label">Supplier</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="id_supplier"  name="id_supplier">
                                                <option selected="">-- Pilih Supplier --</option>
                                                <?php foreach($supplier_nama as $supplier_nama): ?>
                                                    <option value="<?php echo $supplier_nama['id_supplier']; ?>"><?php echo $supplier_nama['nama_supplier']."  ||  ".$supplier_nama['kategori']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_pembayaran" class="col-sm-2 col-form-label">Nama Produk</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Masukkan Nama Prooduk" id="nama_produk"  name="nama_produk">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggal_pembayaran" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" placeholder="Masukkan tanggal" id="tanggal_pembayaran"  name="tanggal_pembayaran">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jumlah_pembayaran" class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" placeholder="Masukkan jumlah pembayaran" id="jumlah_pembayaran"  name="jumlah_pembayaran">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="jenis_pembayaran" name="jenis_pembayaran">
                                                <option selected="">-- Pilih Jenis Pembayaran --</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Transfer">Transfer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="akun" class="col-sm-2 col-form-label">Nama Akun Bank</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="akun"  name="akun">
                                                <option selected="">-- Pilih Akun Bank --</option>
                                                <option value="-">Pembayaran Cash</option>
                                                <?php foreach($bank as $bank): ?>
                                                    <option value="<?php echo $bank['nama_akun']; ?>"><?php echo $bank['nama_akun']; ?> </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status Pembayaran</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" aria-label="Default select example" id="status_pembayaran" name="status_pembayaran">
                                                <option selected="">-- Pilih Keterangan --</option>
                                                <option value="Lunas">Lunas</option>
                                                <option value="Belum Lunas">Belum Lunas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <a href="<?= base_url();?>payment" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
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
    <script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#nama_sup" ).autocomplete({
              source: "<?php echo site_url('payment/get_autocomplete/?');?>"
              select: function (event, ui) {
                    $('[name="nama_sup"]').val(ui.item.nama_sup); 
                    $('[name="email_sup"]').val(ui.item.email_sup); 
                    $('[name="telp_sup"]').val(ui.item.telp_sup); 
                }
            });
        });
    </script>