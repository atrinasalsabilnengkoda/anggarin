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
                            <h4>Edit Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Product</a></li>
                                    <li class="breadcrumb-item active">Edit Product</li>
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
                                
                                <!-- <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                    <ul>
                                        <li >
                                            <a href="#basic-info" class="nav-link" data-toggle="tab">
                                                <span class="step-number">Basic Info</span>
                                            </a>
                                        </li>
                                       
                                    </ul> -->
                                    <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_produk" id="id_produk" value="<?= $produk['id_produk'] ?>"/>
                                                <div class="mb-3">
                                                    <label class="form-label" for="productname">Nama Produk</label>
                                                    <input id="nama_produk" name="nama_produk" type="text" class="form-control" value="<?= $produk['nama_produk'] ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturername">Harga Beli</label>
                                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?= $produk['harga_beli'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        
                                                        <div class="mb-3">
                                                            <label class="form-label" for="manufacturerbrand">Harga Jual</label>
                                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control"  value="<?= $produk['harga_jual'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Jumlah</label>
                                                            <input id="jumlah_produk" name="jumlah_produk" type="number" class="form-control"  value="<?= $produk['jumlah_produk'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Kategori</label>
                                                            <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                                                                <?php foreach($kategori as $kategori): ?>
                                                                    <option value="<?php echo $kategori['nama_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?> </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="control-label">Supplier</label>
                                                            <select class="form-select" aria-label="Default select example" id="supplier" name="supplier">
                                                            <?php foreach($supplier as $supplier): ?>
                                                                    <option value="<?php echo $supplier['nama_supplier']; ?>"><?php echo $supplier['nama_supplier']; ?> </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Deskripsi Produk</label>
                                                    <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="5"  value="<?= $produk['deskripsi_produk'] ?>"></textarea>
                                                </div>

                                                <h4 class="header-title">Gambar Produk</h4>
                                                <p class="card-title-desc">Upload product image</p>
                                                <div class="tab-pane" id="product-img">
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3" >
                                                            <img src="<?php echo base_url('./upload/'.$produk['gambar_produk']); ?>"/>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="fallback">
                                                    <input name="gambar_produk" type="file" multiple  id="gambar_produk" name="gambar_produk" value="<?php echo base_url('./upload/'.$produk['gambar_produk']); ?>" />
                                                    <input name="old_gambar" type="hidden" multiple  id="old_gambar" value="<?php echo base_url('./upload/'.$produk['gambar_produk']); ?>" />
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
<!-- 
                                    
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="basic-info">
                                            <h4 class="header-title">Basic Information</h4>
                                            <p class="card-title-desc">Fill all information below</p>

                                            
                                          
            
                                        </div>
                                       
                                        
                                    </div>
                                     -->
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