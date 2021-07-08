<?php  
	$row = $this->home->profile_perusahaan()->row_array();
?>
<footer class="page-footer">
    <div class="font-13"><?php echo date("Y") ?> © <b><?php echo $row['nama_website'] ?></b> - All rights reserved.</div>
    <a class="px-4" href="#" target="_blank"><?php echo $row['author'] ?></a>
    <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
</footer>