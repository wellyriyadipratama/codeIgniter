<div class="box box-light">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Mahasiswa
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Mahasiswa</li>
            </ol>
        </section>

        <section class="content">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>

            <a href=" <?php echo base_url('/index.php/mahasiswa/print') ?>" class="btn btn-danger"> <i class="fa fa-print"></i> Print</a>

            <a href=" <?php echo base_url('/index.php/mahasiswa/pdf') ?>" class="btn btn-warning"> <i class="fa fa-file"></i> Export PDF</a>
            <div class="box box-light">
                <table class="table table-success table-striped">
                    <tr>
                        <th>NO</th>
                        <th>NAMA MAHASISWA</th>
                        <th>NIM</th>
                        <th>TANGGAL LAHIR</th>
                        <th>JURUSAN</th>
                        <th colspan="2">AKSI</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $mhs->nama ?></td>
                            <td><?php echo $mhs->nim ?></td>
                            <td><?php echo $mhs->tgl_lahir ?></td>
                            <td><?php echo $mhs->jurusan ?></td>

                            <td>
                                <a><?php echo anchor('index.php/mahasiswa/detail/' . $mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"> Detail</i></div>') ?></a>

                                <a onclick="javasript: return confirm('Anda yakin hapus data ini!')">
                                    <?php echo anchor('index.php/mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"> Hapus</i></div>') ?>
                                </a>

                                <a><?php echo anchor('index.php/mahasiswa/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"> Edit</i></div>') ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Form Input Data Mahasiswa</h4>
                    </div>
                    <div class="modal-body">
                        <!-- <form method="post" action="<?php echo base_url() . 'index.php/mahasiswa/tambah_aksi'; ?>"> -->

                        <?php echo form_open_multipart('index.php/mahasiswa/tambah_aksi'); ?>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nim</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option>Sistem Informasi</option>
                                <option>Teknik Informatika</option>
                                <option>Sistem Komputer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>