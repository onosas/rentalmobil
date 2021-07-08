<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Booking</div>
            <a href="<?php echo base_url('admin/tambahbooking') ?>" class="btn btn-primary"><i class="fa fa-car"></i> Add Booking</a>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Mobil</th>
                            <th>Foto</th>
                            <th>Lama Sewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Mobil</th>
                            <th>Foto</th>
                            <th>Lama Sewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php  
                            $no = 1;
                            foreach ($record->result_array() as $row) {
                                $ambil = $row['tgl_ambil'];
                                $kembali = $row['tgl_kembali'];
                                $lama  = $row['lama_sewa'];
                                $mobil = $row['nama_mobil'];
                                $merk  = $row['nama_merk'];
                                $nopol = $row['nopol'];
                                $warna = $row['warna'];
                                $cek   = $row['tgl_kembali'].'&nbsp;'.$row['jam_kembali'];
                                if ($row['status']=='Dibooking') {
                                    $status = '<i style="color:limegreen"></i>';
                                }else{
                                    $status = '<i style="color:red"></i>';
                                }
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_lengkap'] ?></td>
                            <td>
                                <?php echo $merk  ?><br>
                                <?php echo $mobil  ?><br>
                                <?php echo $nopol  ?><br>
                                <?php echo $warna  ?>
                            </td>
                            <td>
                                <img style="width: 100px;" src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>">
                            </td>
                            <td><?php echo $lama; ?> Hari<br> (<?php echo tgl_indo($ambil); ?> s/d <?php echo tgl_indo($kembali); ?>)<br> (<?php echo $row['jam_ambil']; ?> s/d <?php echo $row['jam_kembali']; ?>)</td>
                            <td><?php echo $row['status']; ?><br>
                                <?php echo cek_terakhir($row['tgl_ambil']); ?>
                            </td>
                            <td>
                                <?php  
                                 $cek   = $row['tgl_kembali'];
                                if (date('Y-m-d')>=$cek) {
                                ?>
                                <a href="<?php echo base_url('admin/updatestatus/'.$row['id_booking']) ?>" class="btn btn-primary btn-xs m-r-5" data-toggle="tooltip" data-original-title="Ganti Status Jika Mobil Sudah Kembali"><i class="fa fa-send font-14"></i></a>
                                <?php }else{ ?>
                                <a href="#" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Belum Saatnya Update Status"><i class="fa fa-send font-14"></i></a>
                                <?php } ?>
                                <a href="<?php echo base_url('admin/detailbooking/'.$row['id_booking']) ?>" class="btn btn-success btn-xs m-r-5" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-eye font-14"></i></a>
                                <a href="<?php echo base_url('admin/editbooking/'.$row['id_booking']) ?>" class="btn btn-warning btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit font-14"></i></a>
                                <a href="<?php echo base_url('admin/delete_booking/'.$row['id_booking']) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>