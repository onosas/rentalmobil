<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Jaminan Penyewa</div>
            <a href="<?php echo base_url('admin/booking') ?>" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/tambahjaminan'); ?>">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><h3><b>No. Transaksi :</b></h3></label>
                    <h2 style="font: bold; color: deeppink;"><?php echo $no_trx; ?></h2>
                    <div class="col-sm-9">
                        <input class="form-control" type="hidden" name="a" value="<?php echo $no_trx; ?>">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="b" value="<?php echo $nama_lengkap; ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>No. KTP</label>
                        <input class="form-control" type="number" name="c" placeholder="No. KTP jaminan 2" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Pemilik KTP</label>
                        <div class="check-list">
                            <label class="ui-radio ui-radio-primary">
                                <input type="radio" name="d" value="Milik Suami">
                                <span class="input-span"></span>Milik Suami
                            </label>
                            <label class="ui-radio ui-radio-warning">
                                <input type="radio" name="d" value="Milik Istri">
                                <span class="input-span"></span>Milik Istri
                            </label>
                            <label class="ui-radio ui-radio-success">
                                <input type="radio" name="d" value="Milik Orang Tua">
                                <span class="input-span"></span>Milik Orang Tua
                            </label>
                            <label class="ui-radio ui-radio-default">
                                <input type="radio" name="d" value="Milik Saudara">
                                <span class="input-span"></span>Milik Saudara
                            </label>
                            <label class="ui-radio ui-radio-danger">
                                <input type="radio" name="d" value="Milik Teman">
                                <span class="input-span"></span>Milik Teman
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Nama Unit</label>
                        <input class="form-control" type="text" name="e" placeholder="Merk Type Unit Jaminan" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Nopol</label>
                        <input class="form-control" type="text" name="f" placeholder="Nopol Unit" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Tahun</label>
                        <input class="form-control" type="text" name="g" placeholder="Tahun Unit" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Warna</label>
                        <input class="form-control" type="text" name="h" placeholder="Warna Unit" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Atas Nama STNK</label>
                        <input class="form-control" type="text" name="m" placeholder="Atas Nama Di STNK" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>No Telp 1</label>
                        <input class="form-control" type="number" name="i" placeholder="No. Telp 1" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Pemilik No Telp</label>
                        <input class="form-control" type="text" name="j" placeholder="Pemilik No Telp" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>No Telp 2</label>
                        <input class="form-control" type="number" name="k" placeholder="No Telp 2" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Pemilik No Telp</label>
                        <input class="form-control" type="text" name="l" placeholder="Pemilik No Telp" required>
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <div class="col-sm-6 form-group">
                        <label>Multiple Upload</label>
                        <input type="file" id="fileupload" class="form-control" name="userfile[]" multiple><br>
                        *Multiple Upload Foto : Upload Foto Jaminan Bila Diperlukan, Jika Tidak Ada Abaikan Saja.
                    </div>
                    <div class="col-sm-6 form-group"></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-send"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>