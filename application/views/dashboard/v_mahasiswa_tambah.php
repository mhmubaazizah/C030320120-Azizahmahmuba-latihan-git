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
                        <h3 class="box-title">Tambah Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" action="<?php echo base_url('dashboard/mahasiswa_aksi') ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan nim mahasiswa ..">
                                    <label>Nama</label>
                                    <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan nama mahasiswa ..">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan tanggal lahir mahasiswa ..">
                                    <label>Alamat</label>
                                    <input type="text" name="mahasiswa" class="form-control" placeholder="Masukkan alamat mahasiswa ..">
                                    <?php echo
                                    form_error('mahasiswa'); ?>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btnsuccess" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>