<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="ibox">
        <div class="ibox-head">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addgalleryModal"><i class="fa fa-image"></i> Add Gallery</a>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Mobil</th>
                            <th>Kriteria</th>
                            <th>Keterangan</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Mobil</th>
                            <th>Kriteria</th>
                            <th>Keterangan</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php  
                            $no = 1;
                            foreach ($record->result_array() as $row) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <img style="width: 100px;" src="<?php echo base_url('assets/img_gallery/'.$row['foto_gallery']) ?>">
                            </td>
                            <td>
                                <?php echo $row['nama_merk']  ?>&nbsp;
                                <?php echo $row['nama_mobil']  ?>
                            </td>
                            <td><?php echo $row['judul_gallery'] ?></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td><?php echo tgl_indo($row['create_gallery']); ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/editgallery/'.$row['id_gallery']) ?>" class="btn btn-warning btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit font-14"></i></a>
                                <a href="<?php echo base_url('admin/delete_gallery/'.$row['id_gallery']) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>