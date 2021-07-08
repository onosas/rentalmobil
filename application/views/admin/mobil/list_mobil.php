<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="ibox ibox-warning">
                <div class="ibox-head">
                    <div class="ibox-title">Tambah Mobil</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item">option 1</a>
                            <a class="dropdown-item">option 2</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/mobil'); ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Merk</b></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="a" required>
                                    <option>Pilih Merk</option>
                                    <?php  
                                        foreach ($merk->result_array() as $rows) {
                                    ?>
                                    <option value="<?php echo $rows['id_merk']  ?>"><?php echo $rows['nama_merk'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Mobil</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="b" placeholder="Nama Mobil" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nopol</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="c" placeholder="Nomor Polisi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Tahun</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="d" placeholder="Tahun Pembuatan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Warna</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="e" placeholder="Warna Mobil" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Jumlah Kursi</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="f" placeholder="Jumlah Kursi Mobil" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Harga Rental</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="g" placeholder="Harga Rental Mobil" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Image</b></label>
                            <div class="col-sm-9">
                                <input type="file" name="h">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info" type="submit" name="submit">Simpan Data</button>
                            </div>
                        </div>
                    </form>
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
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Merk</th>
                                    <th>Mobil</th>
                                    <th>Nopol</th>
                                    <th>Tahun</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $no = 1;
                                    foreach ($record->result_array() as $row) {;
                                  ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama_merk'] ?></td>
                                    <td><?php echo $row['nama_mobil'] ?></td>
                                    <td><?php echo $row['nopol'] ?></td>
                                    <td><?php echo $row['tahun'] ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/detailmobil/'.$row['id_mobil']) ?>" class="btn btn-success btn-xs m-r-5" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-eye font-14"></i></a>
                                        <a href="<?php echo base_url('admin/editmobil/'.$row['id_mobil']) ?>" class="btn btn-warning btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit font-14"></i></a>
                                        <a href="<?php echo base_url('admin/delete_mobil/'.$row['id_mobil']) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>