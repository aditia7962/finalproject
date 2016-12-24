<body>
<center><h1>Data Shipper</h1></center>

<?php if($this->session->flashdata('alert')): ?>
<div class="alert"><?php echo $this->session->flashdata('alert'); ?></div>
<?php endif ?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
		<a href="<?php echo base_url('admin/shipper/add'); ?>"><button class="btn btn-success"<i class="glyphicon glyphicon-plus"></i> Add Book</button></a>
			<div class="panel panel-default">
                <div class="panel-body">
					<table id="table_id" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			        <thead>
						<tr>
							<th>Shipper ID</th>
							<th>Company Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
					<?php foreach($shipper as $value){?>
		     			<tr>
					        <td><?php echo $value->shipper_id;?></td>
					        <td><?php echo $value->company_name;?></td>
							<td><?php echo $value->phone;?></td>
							<td><?php echo $value->address;?></td>
							<td>
							<a href="<?php echo base_url('admin/shipper/update/').$value->shipper_id;?>"><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
							<a href="<?php echo base_url('admin/shipper/delete/').$value->shipper_id;?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a>
							</td>
		      			</tr>
		     		<?php }?>
						</tbody>
					<tfoot>
				        <tr>
				        	<th>Shipper ID</th>
							<th>Company Name</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
			      	</tfoot>
			    	</table>
				</div>	
    		</div>
		</div>
    </div>
</div>
</body>