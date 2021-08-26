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
                            <h4>Report</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Report</a></li>
                                    <li class="breadcrumb-item active">Laporan Laba Rugi</li>
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
                                <h4 class="header-title">Laba Kotor Pendapatan</h4>
                                <p class="card-title-desc">Menampilkan Ringkasan Laba Kotor Pendapatan per empat bulan</p>
                                <div class="table-rep-plugin">
                                    <!-- Dropdown Tahun -->
                                    <div class="btn-group mt-1 me-1">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All Years <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?php echo base_url('')?>profitloss2020">2020</a>
                                            <a class="dropdown-item" href="<?php echo base_url('')?>profitloss2021">2021</a>
                                            <a class="dropdown-item" href="<?php echo base_url('')?>profitloss2022">2022</a>
                                        </div>
                                    </div>
                                    <table id="tech-companies-1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th data-priority="1"> </th>
                                                <th data-priority="3">Januari-April</th>
                                                <th data-priority="1">Mei-Agustus</th>
                                                <th data-priority="3">September-December</th>
                                                <th data-priority="3">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Pendapatan</th>
                                                <th>Rp. <?php echo $pendapatan_janaprAllYears; ?></th>
                                                <th>Rp. <?php echo $pendapatan_meiaugAllYears; ?></th>
                                                <th>Rp. <?php echo $pendapatan_sepdesAllYears; ?></th>
                                                <th>Rp. <?php echo $pendapatan_janaprAllYears+$pendapatan_meiaugAllYears+$pendapatan_sepdesAllYears; ?></th>
                                            </tr>
                                            <tr>
                                                <th><p><strong>Laba Kotor</strong></p></th>  
                                                <th>Rp. <?php echo $labakotor_pendapatanAllYears = $pendapatan_janaprAllYears+$pendapatan_meiaugAllYears+$pendapatan_sepdesAllYears; ?></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Laba Kotor Tagihan</h4>
                                <p class="card-title-desc">Menampilkan Ringkasan Laba Kotor Tagihan per empat bulan</p>
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th data-priority="1"> </th>
                                        <th data-priority="3">Januari-April</th>
                                        <th data-priority="1">Mei-Agustus</th>
                                        <th data-priority="3">September-December</th>
                                        <th data-priority="3">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Tagihan</th>
                                        <th>Rp. <?php echo $pengeluaran_janaprAllYears; ?></th>
                                        <th>Rp. <?php echo $pengeluaran_meiaugAllYears; ?></th>
                                        <th>Rp. <?php echo $pengeluaran_sepdesAllYears; ?></th>
                                        <th>Rp. <?php echo $pengeluaran_janaprAllYears+$pengeluaran_meiaugAllYears+$pengeluaran_sepdesAllYears; ?></th>
                                    </tr>
                                    <tr>
                                        <th><p><strong>Laba Kotor</strong></p></th>
                                        <th>Rp. <?php echo $labakotor_pengeluaranAllYears = $pengeluaran_janaprAllYears+$pengeluaran_meiaugAllYears+$pengeluaran_sepdesAllYears; ?></th>
                                    </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                    
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Laba Bersih</th>
                                        <th>Rp. <?php echo $labakotor_pendapatanAllYears-$labakotor_pengeluaranAllYears; ?></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->