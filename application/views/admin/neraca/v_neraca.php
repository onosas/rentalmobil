<div class="page-content fade-in-up">
    <?php if ($this->session->flashdata('success')): ?>
        <div id="success" class="col-6 alert alert-success alert-bordered">
            <i class="fa fa-thumbs-up"></i>
            <strong>Success!</strong> <b><?php echo $this->session->flashdata('success'); ?>.</b>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-6">
            <div class="ibox ibox-success">
                <div class="ibox-head">
                    <div class="ibox-title">Pemasukan</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Tgl Transaksi</th>
                                    <th>No. Transaksi</th>
                                    <th>Keterangan</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php  
                                    $no = 1;
                                    foreach ($masuk->result_array() as $m) {
                                        $subtotal += $m['saldo'];
                               ?>
                               <tr>
                                   <td><?php echo $no++; ?></td>
                                   <td><?php echo tgl_indo($m['tgl_trx']); ?></td>
                                   <td><?php echo $m['no_trx']; ?></td>
                                   <td><?php echo $m['ket']; ?></td>
                                   <td><?php echo currency_format($m['saldo']); ?></td>
                               </tr>
                               <?php } ?>
                               <tr>
                                   <th colspan="3">Total Saldo</th>
                                   <th colspan="2" class="text-right"><?php echo currency_format($subtotal); ?></th>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox ibox-danger">
                <div class="ibox-head">
                    <div class="ibox-title">Pengeluaran</div>
                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#addkeluarModal"><i class="fa fa-plus"></i> Tambah Pengeluaran</a>
                </div>
                <div class="ibox-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example-table3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Tgl Transaksi</th>
                                    <th>Keterangan</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $no = 1;
                                    foreach ($keluar->result_array() as $k) {
                                        $subtotal1 += $k['saldo'];
                               ?>
                               <tr>
                                   <td><?php echo $no++; ?></td>
                                   <td><?php echo tgl_indo($k['tgl_trx']); ?></td>
                                   <td><?php echo $k['ktr']; ?></td>
                                   <td><?php echo currency_format($k['saldo']); ?></td>
                               </tr>
                               <?php } ?>
                               <tr>
                                   <th colspan="2">Total Saldo</th>
                                   <th colspan="2" class="text-right"><?php echo currency_format($subtotal1); ?></th>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Neraca</div>
                    <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addgalleryModal"><i class="fa fa-image"></i> Add Gallery</a> -->
                </div>
                <div class="ibox-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Transaksi</th>
                                    <th>Keterangan</th>
                                    <th>Pemasukan</th>
                                    <th>Pengeluaran</th>
                                    <th>Saldo Bersih</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th colspan="4">Total Saldo Bersih </th>
                                    <th colspan="2" class="text-right">
                                        <?php echo currency_format($subtotal-$subtotal1); ?>
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php  
                                    $no = 1;
                                    foreach ($record->result_array() as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo tgl_indo($row['tgl_trx']); ?></td>
                                    <td><?php echo $row['keterangan']; ?></td>
                                    <td><?php echo currency_format($row['pemasukan']); ?></td>
                                    <td><?php echo currency_format($row['pengeluaran']); ?></td>
                                    <td><?php echo currency_format($row['saldobersih']); ?></td>
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