<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Home Care</title>
    <style>
        #homecaretable {
			width: 100%;
          	border-collapse: collapse;
		}

		#homecaretable th,
		#homecaretable td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		#homecaretable th {
			background-color: #4CAF50;
          	color: white;
		}

		#homecaretable tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#homecaretable thead tr {
          background-color: #f2f2f2;
        }

		#homecaretable tr:hover {
          background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Kategori Perawatan Rumah</h2>
    <table id="homecaretable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sapu</td>
                <td>50</td>
                <td>Rp.50000</td>
            </tr>
            <tr>
                <td>Alat Pel</td>
                <td>30</td>
                <td>Rp.75000</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
