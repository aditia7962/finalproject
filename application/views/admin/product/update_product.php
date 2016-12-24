<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($this->session->flashdata('alert')): ?>
		                    <div class="alert alert-info"><?php echo $this->session->flashdata('alert'); ?></div>
		                    <?php endif ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <?php echo form_open_multipart(); ?>
								<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Product Name </label>
                                            <input class="form-control" type="text" name="product_name" value="<?=$product->product_name?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="product_description" col="50" class="form-control" ><?=$product->product_description?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Unit Price</label>                                     
											<input class="form-control type="text" name="unit_price" value="<?=$product->unit_price?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input class="form-control type="text" name="unit_in_stock" value="<?=$product->unit_in_stock?>">
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input class="form-control" type="text" name="discount" value="<?=$product->discount?>">
                                        </div>
                                   		<div class="form-group">
                                   			<img style="width: 20%" src="<?=base_url($product->picture)?>" alt="">
                                            <label>Picture</label>
                                            <input type="file" name="picture" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                    		<select name="sub_category_id" class="form-control">
												<option value="<?=$product->sub_category_id?>"><?=$product->sub_category_name?></option>
											<?php foreach ($category as $key => $value) : ?>
												<option value="<?=$value->sub_category_id?>"><?=$value->sub_category_name?></option>	
											<?php endforeach ?>
											</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Supplier</label>
                                    		<select name="supplier_id" class="form-control">
											<option value="<?=$product->supplier_id?>"><?=$product->company_name?></option>
										<?php foreach ($supplier as $key => $value) : ?>
											<option value="<?=$value->supplier_id?>"><?=$value->company_name?></option>	
										<?php endforeach ?>
										</select>
                                        </div>
                                        
                                </div>

                                <div class="form-group"  style="text-align: center;">
                                    <input type="submit" class="btn btn-default" name="submit" value="submit">
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </div>
<?php form_close(); ?>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</body>