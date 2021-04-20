<body>
<?php include('./bestellingen_script.php'); ?>
<div class="container">
	<h1 class="page-header text-center">BESTELLINGEN</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Datum</th>
			<th>Naam</th>
			<th>Totaal</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> bekijk </a>
							<?php include('sale_script.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>