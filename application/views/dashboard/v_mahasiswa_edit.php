<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mahasiswa
            <small>Politeknik Negeri Banjarmasin</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url() . 'dashboard/mahasiswa'; ?>" class="btn btn￾sm btn-primary">Kembali</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <?php foreach ($mahasiswa as $k) { ?>
                            <form method="post" action="<?php echo
                                                        base_url('dashboard/mahasiswa_update') ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input type="hidden" name="id" value="<?php echo $k->id_mahasiswa; ?>">
                                        <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan nim mahasiswa .." value="<?php echo $k->NIM_mahasiswa; ?>">
                                        <label>Nama</label>
                                        <input type="hidden" name="id" value="<?php echo $k->id_mahasiswa; ?>">
                                        <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan nama mahasiswa .." value="<?php echo $k->nama_mahasiswa; ?>">
                                        <label>Tanggal Lahir</label>
                                        <input type="hidden" name="id" value="<?php echo $k->id_mahasiswa; ?>">
                                        <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan tempat lahir mahasiswa .." value="<?php echo $k->TL_mahasiswa; ?>">
                                        <label>Alamat</label>
                                        <input type="hidden" name="id" value="<?php echo $k->id_mahasiswa; ?>">
                                        <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan alamat mahasiswa .." value="<?php echo $k->alamat_mahasiswa; ?>">
                                        <?php echo
                                        form_error('mahasiswa'); ?>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-success" value="Update">
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>