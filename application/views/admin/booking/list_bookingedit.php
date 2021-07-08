<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <!-- <div class="ibox-title">Data Booking</div> -->
            <a href="<?php echo base_url('admin/booking') ?>" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </div>
        <div class="ibox-body">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/editbooking'); ?>">
                <input class="form-control" type="hidden" name="id" value="<?php echo $rows['id_booking'] ?>">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="d" value="<?php echo $rows['nama_lengkap'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Alamat Sesuai KTP</label>
                        <textarea class="form-control" type="text" name="e" value="<?php echo $rows['alamat'] ?>"><?php echo $rows['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Alamat Saat Ini</label>
                        <textarea class="form-control" type="text" name="ee" value="<?php echo $rows['alamat_saatini'] ?>"><?php echo $rows['alamat_saatini'] ?></textarea>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Status Alamat Saat Ini</label>
                        <div class="check-list">
                            <?php  
                                if ($rows["status_rmh"]=="Milik Sendiri"){
                            ?>
                            <label class="ui-radio ui-radio-primary">
                                <input type="radio" name="eee" value="Milik Sendiri" checked>
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
                            <?php }elseif($rows["status_rmh"]=="Milik Orang Tua"){ ?>
                            <label class="ui-radio ui-radio-primary">
                                <input type="radio" name="eee" value="Milik Sendiri">
                                <span class="input-span"></span>Milik Sendiri
                            </label>
                            <label class="ui-radio ui-radio-warning">
                                <input type="radio" name="eee" value="Milik Orang Tua"  checked>
                                <span class="input-span"></span>Milik Orang Tua
                            </label>
                            <label class="ui-radio ui-radio-danger">
                                <input type="radio" name="eee" value="Kontrak/Kost">
                                <span class="input-span"></span>Kontrak/Kost
                            </label>
                            <?php }else{ ?>
                            <label class="ui-radio ui-radio-primary">
                                <input type="radio" name="eee" value="Milik Sendiri">
                                <span class="input-span"></span>Milik Sendiri
                            </label>
                            <label class="ui-radio ui-radio-warning">
                                <input type="radio" name="eee" value="Milik Orang Tua">
                                <span class="input-span"></span>Milik Orang Tua
                            </label>
                            <label class="ui-radio ui-radio-danger">
                                <input type="radio" name="eee" value="Kontrak/Kost" checked>
                                <span class="input-span"></span>Kontrak/Kost
                            </label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="f">
                            <option value="<?php echo $rows['gender'] ?>" selected><?php echo $rows['gender'] ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Nomor KTP</label>
                        <input class="form-control" type="number" name="g" value="<?php echo $rows['no_ktp'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>No Telpon</label>
                        <input class="form-control" type="number" name="b" value="<?php echo $rows['no_telpon'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Mobil Yang Disewa</label>
                        <select class="form-control" name="h">
                            <?php  
                                foreach ($record->result_array() as $row) {
                                if ($rows['id_mobil'] == $row['id_mobil']){
                            ?>
                            <option value="<?php echo $row['id_mobil'] ?>" selected>
                                <?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?>
                            </option>
                            <?php }else{ ?>
                            <option value="<?php echo $row['id_mobil'] ?>">
                                <?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?>
                            </option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Lama Sewa</label>
                        <select class="form-control" name="i">
                            <option value="<?php echo $rows['lama_sewa'] ?>" selected><?php echo $rows['lama_sewa'] ?> Hari</option>
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
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Harga Sewa</label>
                        <select class="form-control" name="j">
                            <option value="<?php echo $rows['hrg_rental'] ?>" selected><?php echo currency_format($rows['hrg_rental']) ?></option>
                            <?php  
                                foreach ($record->result_array() as $row) {
                                    ($rows['hrg_rental'] == $row['hrg_rental'])
                            ?>
                            <option value="<?php echo $row['hrg_rental'] ?>">
                                <?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?>&nbsp;-&nbsp;<?php echo currency_format($row['hrg_rental']) ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Total Bayar</label>
                        <input class="form-control" type="number" name="k" value="<?php echo $rows['total'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Tujuan</label>
                        <input class="form-control" type="text" name="l" value="<?php echo $rows['tujuan'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Ambil</label>
                        <input class="form-control" type="date" name="m" value="<?php echo $rows['tgl_ambil'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Jam Ambil</label>
                        <input class="form-control" type="time" name="mm" value="<?php echo $rows['jam_ambil'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Kembali</label>
                        <input class="form-control" type="date" name="n" value="<?php echo $rows['tgl_kembali'] ?>">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Jam Kembali</label>
                        <input class="form-control" type="time" name="nn" value="<?php echo $rows['jam_kembali'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-send"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>