<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Barang</title>
  </head>
  <body>
    <h1>Data Barang</h1>
    <table class="table" border="1" width="100%">
			<thead>
				<tr>
					<th style="text-align:center">#</th>
					<th>Nama Barang</th>
					<th style="text-align:right">Harga</th>
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
							<td style="text-align:right">
								<?=$row->price?>
							</td>
						</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
  </body>
</html>
