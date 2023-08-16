<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mahasiswa
            <small>Politeknik Negeri Banjarmasin</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-9">
                <a href="<?php echo base_url() . 'dashboard/mahasiswa_tambah'; ?>" class="btn btn-sm btn-primary">Tambah Mahasiswa</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th width="10%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mahasiswa as $k) {
                                ?>
                                    <tr>
                                        <td><?php echo
                                            $no++; ?></td>
                                        <td><?php echo $k->NIM_mahasiswa; ?></td>
                                        <td><?php echo $k->nama_mahasiswa; ?></td>
                                        <td><?php echo $k->TL_mahasiswa; ?></td>
                                        <td><?php echo $k->alamat_mahasiswa; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/mahasiswa_edit/' . $k->id_mahasiswa; ?>" class="btn btn-warning btnsm"> <i class="fa fa-pencil"></i> </a>
                                            <a href="<?php echo base_url() . 'dashboard/mahasiswa_hapus/' . $k->id_mahasiswa; ?>" class="btn btn-danger btnsm"> <i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>