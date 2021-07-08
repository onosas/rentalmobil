<div class="page-content fade-in-up">
    <div class="ibox invoice">
        <div class="invoice-header">
            <div class="row">
                <div class="col-12">
                    <div class="invoice-logo">
                        <center>
                        <img src="<?php echo base_url('assets/') ?>img_logo/logo.png" height="65px" />
                        </center>
                        <h2 class="text-center mt-1" style="font-family: impact,arial;">PT. BINTANG TUJUH</h2>
                        <h4 class="text-center mt-1" style="font-family: times new roman;">Jl. Mayor Bismo No.54 Semampir Kota Kediri</h4>
                        <h5 class="text-center mt-1" style="font-family: arial;">No. Telp 083754887666</h5>
                        <hr>
                    </div>
                </div>
                <div class="col-6">
                    <!-- <div class="invoice-logo">
                        <img src="./assets/img/logos/github-logo.png" height="65px" />
                    </div> -->
                    <div>
                        <div class="m-b-5 font-bold"><h4></h4>No. Transaksi</h4></div>
                        <div><?php echo $row['no_trx'] ?></div>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <!-- <div class="clf" style="margin-bottom:30px;">
                        <dl class="row pull-right" style="width:250px;"><dt class="col-sm-6">Invoice Date</dt>
                            <dd class="col-sm-6">10 April 2017</dd><dt class="col-sm-6">Issue Date</dt>
                            <dd class="col-sm-6">30 April 2017</dd><dt class="col-sm-6">Account No.</dt>
                            <dd class="col-sm-6">1450012</dd>
                        </dl>
                    </div> -->
                    <div>
                        <div class="m-b-5 font-bold">Transaksi Dari</div>
                        <div><?php echo $row['nama_lengkap'] ?></div>
                        <ul class="list-unstyled m-t-10">
                            <li class="m-b-5"><?php echo $row['alamat'] ?></li>
                            <li><?php echo $row['no_telpon'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p>Berikut data transaksi dari sewa mobil anda dengan No. Transaksi <b><?php echo $row['no_trx'] ?></b>.</p>
        <table class="table table-striped no-margin table-invoice">
            <thead>
                <tr>
                    <th>Unit</th>
                    <th>Lama Sewa</th>
                    <th>Harga Sewa</th>
                    <th class="text-right">Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div><strong><?php echo $row['nama_merk'] ?></strong></div><small><?php echo $row['nama_mobil'] ?> warna <?php echo $row['warna'] ?> dengan Nopol <?php echo $row['nopol'] ?>.</small></td>
                    <td><?php echo $row['lama_sewa'] ?> Hari</td>
                    <td><?php echo currency_format($row['hrg_rental']) ?></td>
                    <td><?php echo currency_format($row['total']) ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table no-border">
            <thead>
                <tr>
                    <th></th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-right">
                    <td class="font-bold font-18">DIBAYAR LUNAS:</td>
                    <td class="font-bold font-18"><?php echo currency_format($row['total']) ?></td>
                </tr>
            </tbody>
        </table>
        <div class="invoice-header">
            <div class="row">
                <div class="col-6">
                    <!-- <div class="invoice-logo">
                        <img src="./assets/img/logos/github-logo.png" height="65px" />
                    </div> -->
                    <div>
                        <div class="m-b-5 font-bold">Adapun data jaminan anda </div>
                        <ul class="list-unstyled m-t-10">adalah berikut ini:
                            <li class="m-b-5">
                                <span class="font-strong">1.KTP asli dengan nomor : </span><?php echo $row['no_ktp'] ?></li>
                            <li class="m-b-5">
                                <span class="font-strong">2.KTP asli dengan nomor : </span> <?php echo $row['ktp'] ?></li>
                            <li>
                                <span class="font-strong">3.Unit Sepeda Motor + STNK:</span> <?php echo $row['nama_unit']; ?> warna <?php echo $row['wrn_unit']; ?> dengan Nomor Polisi <b><?php echo $row['nopol_unit']; ?></b> dan atas nama STNK <b><?php echo $row['an_stnk']; ?></b>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <!-- <div class="clf" style="margin-bottom:30px;">
                        <dl class="row pull-right" style="width:250px;"><dt class="col-sm-6">Invoice Date</dt>
                            <dd class="col-sm-6">10 April 2017</dd><dt class="col-sm-6">Issue Date</dt>
                            <dd class="col-sm-6">30 April 2017</dd><dt class="col-sm-6">Account No.</dt>
                            <dd class="col-sm-6">1450012</dd>
                        </dl>
                    </div> -->
                    <div>
                        <!-- <div class="m-b-5 font-bold">Invoice To</div>
                        <div>Emma Johnson</div>
                        <ul class="list-unstyled m-t-10">
                            <li class="m-b-5">San Francisco, 548 Market St.</li>
                            <li class="m-b-5">emma.johnson@exmail.com</li>
                            <li>(123) 279-4058</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-12">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan menandatangani dokumen ini, secara langsung anda menyetujui dengan <b>ketentuan & kebijakan</b> dalam perjanjian sewa mobil yang kami lampirkan bersama dengan dokumen ini.</p>
                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4 text-center">
                    <div class="clf" style="margin-bottom:30px;">
                        <h5><b>Kediri</b>, <?php echo tgl_indo($row['created_at']) ?></h5>
                        <h6>Hormat saya,</h6>
                        <br><br><br><br>
                        <h5><b><?php echo $row['nama_lengkap'] ?></b></h5>
                        <p>(<i>Penyewa Mobil</i>)</p>
                    </div>
                    <div>
                        <!-- <div class="m-b-5 font-bold">Invoice To</div>
                        <div>Emma Johnson</div>
                        <ul class="list-unstyled m-t-10">
                            <li class="m-b-5">San Francisco, 548 Market St.</li>
                            <li class="m-b-5">emma.johnson@exmail.com</li>
                            <li>(123) 279-4058</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="text-right">
            <button class="btn btn-info" type="button" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</button>
        </div>
    </div>
    <style>
        .invoice {
            padding: 20px
        }

        .invoice-header {
            margin-bottom: 50px
        }

        .invoice-logo {
            margin-bottom: 50px;
        }

        .table-invoice tr td:last-child {
            text-align: right;
        }
    </style>
</div>