<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Profile Perusahaan</div>
            <a href="<?php echo base_url('admin') ?>" class="btn btn-primary"><i class="fa fa-reply"></i> Kembali</a>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
             <form class="mt-3" role="form" method="POST" action="<?php echo base_url('admin/profileperusahaan') ?>" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <input class="form-control" type="hidden" name="id" value="">
                    <thead>
                        <tr>
                            <th width="200" scope="row">NAMA PERUSAHAAN</th>
                            <td>
                                <input class="form-control" type="text" name="a" value="<?php echo $record['nama_perusahaan'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">ALAMAT PERUSAHAAN</th>
                            <td>
                                <input class="form-control" type="text" name="b" value="<?php echo $record['alamat_perusahaan'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">KOTA / KABUPATEN</th>
                            <td>
                                <input class="form-control" type="text" name="c" value="<?php echo $record['kota'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">PROVINSI</th>
                            <td>
                                <input class="form-control" type="text" name="d" value="<?php echo $record['provinsi'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">KODE POS</th>
                            <td>
                                <input class="form-control" type="number" name="e" value="<?php echo $record['kodepos'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">WEBSITE PERUSAHAAN</th>
                            <td>
                                <input class="form-control" type="text" name="f" value="<?php echo $record['nama_website'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">URL WEBSITE</th>
                            <td>
                                <input class="form-control" type="text" name="g" value="<?php echo $record['alamat_website'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">EMAIL</th>
                            <td>
                                <input class="form-control" type="email" name="h" value="<?php echo $record['email'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">NO TELPHONE</th>
                            <td>
                                <input class="form-control" type="number" name="j" value="<?php echo $record['no_telphone'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">FACEBOOK</th>
                            <td>
                                <input class="form-control" type="text" name="k" value="<?php echo $record['facebook'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">INSTAGRAM</th>
                            <td>
                                <input class="form-control" type="text" name="l" value="<?php echo $record['instagram'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">TWITTER</th>
                            <td>
                                <input class="form-control" type="text" name="m" value="<?php echo $record['twitter'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">WHATSAPP</th>
                            <td>
                                <input class="form-control" type="text" name="n" value="<?php echo $record['whatsapp'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">META DESKRIPSI</th>
                            <td>
                                <input class="form-control" type="text" name="o" value="<?php echo $record['meta_deskripsi'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">META KEYWORD</th>
                            <td>
                                <input class="form-control" type="text" name="p" value="<?php echo $record['meta_keyword'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">FAVICON</th>
                            <td>
                                <input class="form-control" type="file" name="r">
                                <img style="width: 100px;" src="<?php echo base_url('assets/images/'.$record['favicon']) ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">MAPS</th>
                            <td>
                                <textarea class="form-control" type="text" name="s" value="<?php echo $record['maps'] ?>"><?php echo $record['maps'] ?></textarea>
                            </td>
                        </tr>
                    </thead>
                </table>
                <button class="btn btn-success" type="submit" name="submit"><i class="fa fa-send"></i> Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>