<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox ibox-warning">
                <div class="ibox-head">
                    <div class="ibox-title"><i class="fa fa-car"></i> Foto Mobil</div>
                    <div class="ibox-tools">
                        <a type="submit" href="<?php echo base_url('admin/booking') ?>" class="btn btn-primary btn-lg m-r-5" data-toggle="tooltip" data-original-title="Kembali"><i class="fa fa-reply font-14"></i> Kembali</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <img style="width: 100%;" src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox ibox-primary">
                <div class="ibox-head">
                    <div class="ibox-title"><i class="fa fa-clipboard"></i> Data Mobil</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <!-- <div class="table-responsive"> -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Merk</th>
                                    <td><?php echo $row['nama_merk'] ?></td>
                                </tr>
                                <tr>
                                    <th>Mobil</th>
                                    <td><?php echo $row['nama_mobil'] ?></td>
                                </tr>
                                <tr>
                                    <th>Nopol</th>
                                    <td><?php echo $row['nopol'] ?></td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td><?php echo $row['warna'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td><?php echo $row['tahun'] ?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Kursi</th>
                                    <td><?php echo $row['jml_kursi'] ?></td>
                                </tr>
                                <tr>
                                    <th>Harga Rental</th>
                                    <td><?php echo currency_format($row['hrg_rental']) ?></td>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <td><?php echo tgl_indo($row['created_at']) ?></td>
                                </tr>
                            </thead>
                        </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox ibox-success">
                <div class="ibox-head">
                    <div class="ibox-title"><i class="fa fa-users"></i> Data Pelanggan</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <!-- <div class="table-responsive"> -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. Transaksi</th>
                                <td style="color: red; font: bold;"><?php echo $row['no_trx'] ?></td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><?php echo $row['nama_lengkap'] ?></td>
                            </tr>
                            <tr>
                                <th>No KTP</th>
                                <td><?php echo $row['no_ktp'] ?></td>
                            </tr>
                            <tr>
                                <th>Alamat Sesuai KTP</th>
                                <td><?php echo $row['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Tinggal Saat Ini</th>
                                <td><?php echo $row['alamat_saatini'] ?></td>
                            </tr>
                            <tr>
                                <th>No Telpon</th>
                                <td><?php echo $row['no_telpon'] ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?php echo $row['gender'] ?></td>
                            </tr>
                            <tr>
                                <th>Lama Sewa</th>
                                <td><?php echo $row['lama_sewa'] ?> Hari</td>
                            </tr>
                            <tr>
                                <th>Total Bayar</th>
                                <td><?php echo currency_format($row['total']) ?></td>
                            </tr>
                            <tr>
                                <th>Tujuan</th>
                                <td><?php echo $row['tujuan'] ?></td>
                            </tr>
                            <tr style="background-color: limegreen; color: white;">
                                <th>Tanggal Ambil</th>
                                <td><?php echo tgl_indo($row['tgl_ambil']) ?>&nbsp;<?php echo $row['jam_ambil'] ?></td>
                            </tr>
                            <tr style="background-color: deeppink; color: white;">
                                <th>Tanggal Kembali</th>
                                <td><?php echo tgl_indo($row['tgl_kembali']) ?>&nbsp;<?php echo $row['jam_kembali'] ?></td>
                            </tr>
                            <tr  style="background-color: purple; color: white;">
                                <th>Tanggal Daftar</th>
                                <td><?php echo tgl_indo($row['tanggal_daftar']) ?></td>
                            </tr>
                        </thead>
                    </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox ibox-danger">
                <div class="ibox-head">
                    <div class="ibox-title"><i class="fa fa-lock"></i> Jaminan</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <a target="BLANK" type="submit" href="<?php echo base_url('admin/invoice/'.$row['id_booking']) ?>" class="btn btn-primary btn-lg m-r-5" data-toggle="tooltip" data-original-title="Invoice"><i class="fa fa-copy font-14"></i> Invoice</a>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>Nama Penjamin</th>
                                <td><?php echo $row['nama_lengkap'] ?></td>
                            </tr>
                            <tr>
                                <th>KTP 2</th>
                                <td><?php echo $row['ktp'] ?></td>
                            </tr>
                            <tr>
                                <th>Pemilik KTP</th>
                                <td><?php echo $row['milik_ktp'] ?></td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td><?php echo $row['nama_unit'] ?></td>
                            </tr>
                            <tr>
                                <th>Nopol</th>
                                <td><?php echo $row['nopol_unit'] ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td><?php echo $row['thn_unit'] ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $row['wrn_unit'] ?></td>
                            </tr>
                            <tr>
                                <th>Atas Nama Unit</th>
                                <td><?php echo $row['an_stnk'] ?></td>
                            </tr>
                            <tr>
                                <th>No Telp 2</th>
                                <td><?php echo $row['no_hp'] ?></td>
                            </tr>
                            <tr>
                                <th>Pemilik Telp</th>
                                <td><?php echo $row['milik_hp'] ?></td>
                            </tr>
                            <tr>
                                <th>No Telp 3</th>
                                <td><?php echo $row['no_telp'] ?></td>
                            </tr>
                            <tr>
                                <th>Pemilik Telp</th>
                                <td><?php echo $row['milik_telp'] ?></td>
                            </tr>
                            <tr>
                                <th>Created Date</th>
                                <td><?php echo tgl_indo($row['created_at']) ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>