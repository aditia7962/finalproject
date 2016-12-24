<body>
<center><h1>Data Category</h1></center>

<?php if($this->session->flashdata('alert')): ?>
<div class="alert"><?php echo $this->session->flashdata('alert'); ?></div>
<?php endif ?>



<div class="container">
	<div class="row">
		<div class="col-md-12">
		<a href="<?php echo base_url('admin/category/add'); ?>"><button class="btn btn-success"<i class="glyphicon glyphicon-plus"></i> Add Book</button></a>
			<div class="panel panel-default">
                <div class="panel-body">
					<table id="table_id" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			        <thead>
						<tr>
							<th>Category ID</th>
							<th>Sub Category Name</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
					<?php foreach($subcategory as $value):?>
		     			<tr>
					        <td><?php echo $value->sub_category_id;?></td>        
					        <td><?php echo $value->sub_category_name;?></td>
							<td><?php echo $value->category_name;?></td>
							<td>
							<a href="<?php echo base_url('admin/category/update/').$value->sub_category_id;?>"><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
							<a href="<?php echo base_url('admin/category/delete/').$value->sub_category_id;?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a>
							</td>
		      			</tr>
		     		<?php endforeach ?>
						</tbody>
					<tfoot>
				        <tr>
				        	<th>Category ID</th>
							<th>Category Name</th>
							<th>Sub Category Name</th>
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