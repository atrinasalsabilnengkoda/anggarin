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
                            <h4>Add Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Product</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <?php if (validation_errors()):?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors() ?>
                                </div>
                            <?php endif ?>
                                                                            
                                
                                   

                                            <form action="<?= base_url();?>addproduct" enctype="multipart/form-data" method="POST">
                                               
                                                <div class="mb-3">
                                                    <label class="form-label" for="productname">Nama Produk</label>
                                                    <input id="productname" name="nama_produk" id="nama_produk" type="text" class="form-control">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturername">Harga Beli</label>
                                                            <input id="manufacturername" name="harga_beli" id="harga_beli" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturerbrand">Harga Jual</label>
                                                            <input id="manufacturerbrand" name="harga_jual" id="harga_jual" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Jumlah</label>
                                                            <input id="price" name="jumlah_produk" id="number" type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Supplier</label>
                                                            <select class="form-select" name="supplier" id="supplier" aria-label="Default select example">
                                                            <option selected="">-- Pilih Supplier --</option>
                                                                <?php foreach($supplier as $supplier): ?>
                                                                    <option value="<?php echo $supplier['nama_supplier']; ?>"><?php echo $supplier['nama_supplier']; ?> </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Kategori</label>
                                                            <select class="form-select" name="kategori" id="kategori" aria-label="Default select example">
                                                            <option selected="">-- Pilih Kategori --</option>
                                                                <?php foreach($kategori as $kategori): ?>
                                                                    <option value="<?php echo $kategori['nama_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?> </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Deskripsi Produk</label>
                                                    <textarea class="form-control" id="deskripsi_produkc" rows="5" name="deskripsi_produk"></textarea>
                                                </div>
                                               

                                                <h4 class="header-title">Gambar Produk</h4>
                                                <p class="card-title-desc">Upload product image</p>
                                                <div class="tab-pane" id="product-img">                                          
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted mdi mdi-cloud-download-outline"></i>
                                                        </div>
                                                    </div>
                                                </div>                                               
                                                <div class="fallback">
                                                    <input name="gambar_produk" type="file" multiple id="gambar_produk" />
                                                </div>
                                            <br>
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <a href="<?= base_url();?>product" type="reset" class="btn btn-secondary waves-effect" role="button" aria-pressed="true">Cancel</a>
                                                </div>
                                            </div>
                                            </form>

                                           
            
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