<!DOCTYPE html>
<html>
<head>
	<title>Tabel Makanan dan Minuman</title>
	<style>
        #food-drinks-table {
			width: 100%;
          	border-collapse: collapse;
		}

		#food-drinks-table th,
		#food-drinks-table td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		#food-drinks-table th {
			background-color: #4CAF50;
          	color: white;
		}

		#food-drinks-table tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#food-drinks-table thead tr {
          background-color: #f2f2f2;
        }

		#food-drinks-table tr:hover {
          background-color: #ddd;
        }
    </style>
</head>
<body>
	<h2>Kategori Makanan dan Minuman</h2>
	<table id="food-drinks-table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Stok</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Susu UHT</td>
				<td>100</td>
				<td>Rp.5000</td>
			</tr>
			<tr>
				<td>Mie Instan</td>
				<td>250</td>
				<td>Rp.3000</td>
			</tr>
		</tbody>
	</table>
</body>
</html>