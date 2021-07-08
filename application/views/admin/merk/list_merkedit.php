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
                    <div class="ibox-title">Edit Merk</div>
                    <div class="ibox-tools">
                        <a type="submit" href="<?php echo base_url('admin/merk') ?>" class="btn btn-primary btn-lg m-r-5" data-toggle="tooltip" data-original-title="Kembali"><i class="fa fa-reply font-14"></i> Kembali</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/editmerk/'); ?>">
                        <input type="hidden" name="id" value="<?php echo $rows['id_merk'] ?>">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Nama Merk</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="a" value="<?php echo $rows['nama_merk'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><b>Aktif</b></label>
                            <div class="col-sm-9">
                                <div class="check-list">
                                    <?php  
                                        if ($rows["aktif"]=="Y"){
                                    ?>
                                    <label class="ui-radio ui-radio-primary">
                                        <input type="radio" name="b" value="Y" checked>
                                        <span class="input-span"></span>Ya
                                    </label>
                                    <label class="ui-radio ui-radio-danger">
                                        <input type="radio" name="b" value="N">
                                        <span class="input-span"></span>Tidak
                                    </label>
                                    <?php }else{ ?>
                                    <label class="ui-radio ui-radio-primary">
                                        <input type="radio" name="b" value="Y">
                                        <span class="input-span"></span>Ya
                                    </label>
                                    <label class="ui-radio ui-radio-danger">
                                        <input type="radio" name="b" value="N" checked>
                                        <span class="input-span"></span>Tidak
                                    </label>
                                    <?php } ?>
                                </div>
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
                    <div class="ibox-title">Data Merk</div>
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
                                    <th>Nama Merk</th>
                                    <th>Aktif</th>
                                    <th>Create Date</th>
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
                                    <td><?php echo $row['aktif'] ?></td>
                                    <td><?php echo tgl_indo($row['created_at']) ?></td>
                                    <td>
                                        <a href="#" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit font-14"></i></a>
                                        <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
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