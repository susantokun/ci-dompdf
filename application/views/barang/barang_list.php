<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Tutorial Dompdf #2 | Susantokun</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<style media="screen">
	.ui.center.header{
		padding-top: 50px;
	}
</style>

<body>
	<div class="ui container">
		<h1 class="ui center aligned header">Tutorial Dompdf #2 | Susantokun</h1>

		<div class="ui grid">
			<div class="fifteen wide column">
				<table class="ui celled table" id="table_id">
					<thead>
						<tr>
							<th style="text-align:center">No</th>
							<th>Nama Barang</th>
							<th>Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($dataBarang as $row): ?>
						<tr>
							<th style="text-align:center">
								<?=$no++?>
							</th>
							<td>
								<?=$row->name?>
							</td>
							<td>
								<?=$row->price?>
							</td>
						</tr>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
			<div class="one wide column">
				<a href="<?=site_url('barang/cetak_barang')?>" target="_blank" type="button" class="ui primary button">Print</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table_id').DataTable({
				"order": []
			});
		});
	</script>
</body>

</html>
