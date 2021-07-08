<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <!-- <div class="ibox-title">Data Booking</div> -->
            <a href="<?php echo base_url('admin/booking') ?>" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/tambahbooking'); ?>">
                <?php  
                  if ($rows['kode_transaksi']==''){
                    $kode_transaksi = 'TRX-'.date('YmdHis');
                  }else{
                    $kode_transaksi = $rows['kode_transaksi'];
                  }
                ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"><h3><b>No. Transaksi :</b></h3></label>
                    <h2 style="font: bold; color: deeppink;"><?php echo $kode_transaksi; ?></h2>
                    <div class="col-sm-9">
                        <input class="form-control" type="hidden" name="o" value="<?php echo $kode_transaksi; ?>">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="d" placeholder="Nama Lengkap">
                        <?php echo form_error('d','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Alamat Sesuai KTP</label>
                        <textarea class="form-control" type="text" name="e" placeholder="Alamat Tempat Tinggal Saat Ini"></textarea>
                        <?php echo form_error('e','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Alamat Saat Ini</label>
                        <textarea class="form-control" type="text" name="ee" placeholder="Alamat Tempat Tinggal Saat Ini"></textarea>
                        <?php echo form_error('ee','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Status Alamat Saat Ini</label>
                        <div class="check-list">
                            <label class="ui-radio ui-radio-primary">
                                <input type="radio" name="eee" value="Milik Sendiri">
                                <span class="input-span"></span>Milik Sendiri
                            </label>
                            <label class="ui-radio ui-radio-warning">
                                <input type="radio" name="eee" value="Milik Orang Tua">
                                <span class="input-span"></span>Milik Orang Tua
                            </label>
                            <label class="ui-radio ui-radio-danger">
                                <input type="radio" name="eee" value="Kontrak/Kost">
                                <span class="input-span"></span>Kontrak/Kost
                            </label>
                        </div>
                        <?php echo form_error('eee','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="f">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('f','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Nomor KTP</label>
                        <input class="form-control" type="number" name="g" placeholder="Nomor KTP Harus 16 Digit">
                        <?php echo form_error('g','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>No Telpon</label>
                        <input class="form-control" type="number" name="b" placeholder="Nomor Telpon">
                        <?php echo form_error('b','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Mobil Yang Disewa</label>
                        <select class="form-control" name="h">
                            <option value="">Pilih Mobil</option>
                            <?php  
                                foreach ($record->result_array() as $row) {
                            ?>
                            <option value="<?php echo $row['id_mobil'] ?>">
                                <?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?>
                            </option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('h','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Lama Sewa</label>
                        <select class="form-control" name="i">
                            <option value="">Pilih Lama Sewa</option>
                            <option value="1">1 Hari</option>
                            <option value="2">2 Hari</option>
                            <option value="3">3 Hari</option>
                            <option value="4">4 Hari</option>
                            <option value="5">5 Hari</option>
                            <option value="6">6 Hari</option>
                            <option value="7">7 Hari</option>
                            <option value="8">8 Hari</option>
                            <option value="9">9 Hari</option>
                            <option value="10">10 Hari</option>
                        </select>
                        <?php echo form_error('i','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Harga Sewa</label>
                        <select class="form-control" name="j">
                            <option value="">Pilih Harga</option>
                            <?php  
                                foreach ($record->result_array() as $row) {
                            ?>
                            <option value="<?php echo $row['hrg_rental'] ?>">
                                <?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?>&nbsp;-&nbsp;<?php echo currency_format($row['hrg_rental']) ?>
                            </option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('j','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Total Bayar</label>
                        <input class="form-control" type="number" name="k" placeholder="Total Bayar=Lama Sewa X Harga Sewa">
                        <?php echo form_error('k','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Tujuan</label>
                        <input class="form-control" type="text" name="l" placeholder="Kota Tujuan ( Sedetail Mungkin )">
                        <?php echo form_error('l','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Ambil</label>
                        <input class="form-control" type="date" name="m" placeholder="Tanggal Ambil">
                        <?php echo form_error('m','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Jam Ambil</label>
                        <input class="form-control" type="time" name="mm" placeholder="Tanggal Kembali">
                        <?php echo form_error('mm','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Kembali</label>
                        <input class="form-control" type="date" name="n" placeholder="Tanggal Ambil">
                        <?php echo form_error('n','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Jam Kembali</label>
                        <input class="form-control" type="time" name="nn" placeholder="Tanggal Kembali">
                        <?php echo form_error('nn','<div style="color:red"><small>','</small></div>') ;?>
                    </div>
                </div>
                <input type="hidden" class="form-control" name="aa" value="Sewa mobil selama <?php echo $this->input->post('i') ?> hari">
                <input class="form-control" type="hidden" name="c" value="0">
                <div class="form-group">
                    <button class="btn btn-success" type="submit"><i class="fa fa-send"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>