<!-- Tambah Gallery -->
<div class="modal fade" id="addgalleryModal" tabindex="-1" aria-labelledby="addgalleryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-bold" id="addgalleryModalLabel">Tambah Gallery Mobil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" role="form" action="<?php echo base_url('admin/gallerytambah') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="">

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
	              <label><b>Mobil</b></label>
	              <select class="form-control" name="a" required>
	                <option>Pilih MOBIL</option>
	              <?php 
	              		$record = $this->db->query("SELECT * FROM mobil a JOIN merk b ON a.id_merk=b.id_merk ORDER BY a.id_mobil DESC");
	              		foreach ($record->result_array() as $row) {
	              ?>
	              <option value="<?php echo $row['id_mobil']  ?>"><?php echo $row['nama_merk'] ?>&nbsp;<?php echo $row['nama_mobil'] ?></option>
	              <?php } ?>
	          	  </select>
            </div>
            <div class="form-group">
              <label><b>Nama Gallery</b></label>
              <input class="form-control" type="text" name="b" placeholder="Nama Kriteria Gallery Mobil">
            </div>
            <div class="form-group">
              <label><b>Keterangan</b></label>
              <textarea class="form-control" type="text" name="c" placeholder="Keterangan Kriteria Mobil"></textarea>
            </div>
            <div class="form-group">
              <label><b>Upload Image Gallery</b></label>
              <input class="form-control" type="file" name="d" placeholder="Upload Image Gallery">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Tambah Pengeluaran -->
<div class="modal fade" id="addkeluarModal" tabindex="-1" aria-labelledby="addkeluarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-bold" id="addkeluarModalLabel">Tambah Pengeluaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" role="form" action="<?php echo base_url('admin/pengeluarantambah') ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="">

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input class="form-control" type="hidden" name="k" value="0">
                <label><b>Keterangan</b></label>
                 <input class="form-control" type="text" name="a" placeholder="Keterangan Pengeluaran Kas">
            </div>
            <div class="form-group">
              <label><b>Nominal</b></label>
              <input class="form-control" type="text" name="c" placeholder="Nominal Pengeluaran">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>