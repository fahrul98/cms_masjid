<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
postid
psbuat
psubah
tagid
psjudul
psustadz
pstext
mediaid
*/
// view admin
?>

<div id="main-content">
	<?php echo $error; ?>
<?php
if ($page=="Tag") {
	if (isset($tanya)) {
		echo $tanya;
	}
?>
<h2><?php echo $page; ?> &nbsp <a class="btn btn-default" href="<?php echo base_url('tag/tambahtag');?>"><i class="fa fa-pencil-square-o"> </i><span> Tambah tag</span></a></h2>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Tag</th>
			<th colspan="">Operasi</th>
		</thead>
<?php

$n = 1;
// <td><a href=".base_url('post/ubahpost/'.$v->postid).">".$v->psjudul."</a></td>
		foreach ($cmtag as $v) {
			echo "<tr>
			<td>".$n."</td>
			<td>".$v->tag."</td>
			<td><a href='".base_url('tag/dbhapus/'.$v->tagid)."'><i class='fa fa-trash-o'></i></a></td>";
			$n++;
		}
		 ?>
	</table>


<?php }else if ($page=="Tambah Tag") {?>

<?php echo form_open('tag/dbtambah'); ?>
	<div class="row">
		<div class="panel col-md-4">
			<div class="form-group ">
				<label for="tag">Tag</label>
				<input type="text" class="form-control" name="tag" value="<?php echo $input['tag']; ?>">
			</div>
				<div class="form-group ">
				<input type="submit" class="btn btn-success" name="submit" value="Tambah">
				<a class="btn btn-success" name="submit" value="Tambah" href="<?php echo base_url('tag');?>" style="color: #fff">Kembali</a>
			</div>
		</div>
	</div>
</form>

<?php } ?>
</div>
