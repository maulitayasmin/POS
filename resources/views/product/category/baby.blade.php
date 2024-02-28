<!DOCTYPE html>
<html>
<head>
    <title>Baby and Kid Products</title>
    <style>
        #babykidtable {
			width: 100%;
          	border-collapse: collapse;
		}

		#babykidtable th,
		#babykidtable td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}

		#babykidtable th {
			background-color: #4CAF50;
          	color: white;
		}

		#babykidtable tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#babykidtable thead tr {
          background-color: #f2f2f2;
        }

		#babykidtable tr:hover {
          background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Kategori Bayi dan Anak-anak</h2>
    <table id="babykidtable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Baby Toy Blocks</td>
                <td>10</td>
                <td>Rp.235700</td>
            </tr>
            <tr>
                <td>Kids' Art Set</td>
                <td>5</td>
                <td>Rp.377500</td>
            </tr>
        </tbody>
    </table>
</body>
</html>