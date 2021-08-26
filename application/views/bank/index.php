<div class="main-content">
                <div class="page-content">
                    <!-- start page title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                         <div class="row align-items-center">
                             <div class="col-sm-6">
                                 <div class="page-title">
                                     <h4>Bank</h4>
                                         <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Anggar.in</a></li>
                                             <li class="breadcrumb-item"><a href="javascript: void(0);">Bank</a></li>
                                             <li class="breadcrumb-item active">Data Bank</li>
                                         </ol>
                                 </div>
                             </div>
                             <div class="col-sm-6">
                                <div class="float-end d-none d-sm-block">
                                    <a href="<?= base_url();?>addbank" class="btn btn-success"><i class="mdi mdi-plus me-2"></i> Add Akun Bank</a>
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
                                        <div class="card-body">
                                            <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold p-3 active" href="<?php echo base_url('')?>bank">All Bank Accounts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>bankActive">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-3 fw-bold" href="<?php echo base_url('')?>bankUnactive">Unactive</a>
                                                </li>
                                            </ul>
                                            <div class="table mt-3 tab-content">
                                                <table id="datatable-buttons" class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th></th>
                                                            <th>No.</th>
                                                            <th>Kategori Akun</th>
                                                            <th>Nama Akun</th>
                                                            <th>Nama Bank</th>
                                                            <th>Nomor Rekening</th>
                                                            <th>Saldo Saat Ini</th>
                                                            <th>Status</th>
                                                            <th style="width: 120px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tab-pane" id="all-bank">
                                                        <?php $no=1;
                                                        foreach($bank as $bank): ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $no++?></td>
                                                            <td><?= $bank['akun_utama'];?></td>
                                                            <td><?= $bank['nama_akun'];?></td>
                                                            <td><?= $bank['nama_bank'];?></td>
                                                            <td><?= $bank['no_rek'];?></td>
                                                            <td>Rp. <?= $bank['saldo_awal'];?></td>
                                                            <td>
                                                                 <div class="badge badge-soft-success font-size-12"><?= $bank['status_akun'];?></div>
                                                            </td>
                                                            <td id="tooltip-container0">
                                                                <a href="<?php echo base_url('bank/edit') ?>/<?php echo $bank['id_bank'] ?>" class="me-3 text-primary" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i> </a>
                                                                <a href="<?php echo base_url('bank/hapus') ?>/<?php echo $bank['id_bank'] ?>" class="text-danger" data-bs-container="#tooltip-container0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
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