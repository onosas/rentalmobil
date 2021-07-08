<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox ibox-warning">
                <div class="ibox-head">
                    <div class="ibox-title">Foto Mobil</div>
                    <div class="ibox-tools">
                        <a type="submit" href="<?php echo base_url('admin/mobil') ?>" class="btn btn-primary btn-lg m-r-5" data-toggle="tooltip" data-original-title="Kembali"><i class="fa fa-reply font-14"></i> Kembali</a>
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
                    <div class="ibox-title">Data Mobil</div>
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
    </div>
</div>