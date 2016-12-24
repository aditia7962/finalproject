 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Setting Profile</h1>
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
                                            <label>Username </label>
                                            <input class="form-control" type="text" name="username" value="<?=$customer->username?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control type="text" name="password" value="<?=$customer->password?>"">
                                        </div>
                                        <div class="form-group">
                                            <label>Picture</label>                                     
											<br />
											<img src="<?=base_url().$customer->picture?>" alt="">
                                            <input type="file" name="picture">
                                        </div>
                                        <div class="form-group">
                                            <label>Firstname</label>
                                            <input class="form-control type="text" name="firstname" value="<?=$customer->firstname?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Lastname</label>
                                            <input class="form-control type="text" name="lastname" value="<?=$customer->lastname?>">
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control type="text" name="phone" value="<?=$customer->phone?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control name="email" value="<?=$customer->email?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control type="text" name="addreess" value="<?=$customer->address?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input class="form-control type="text" name="country" value="<?=$customer->country?>">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control type="text" name="city" value="<?=$customer->city?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input class="form-control type="text" name="postal_code" value="<?=$customer->postal_code?>">
                                        </div>
                                </div>

                                <div class="form-group"  style="text-align: center;">
                                    <input type="submit" class="btn btn-default" name="submit" value="submit">
                                    <button type="reset" class="btn btn-default">Reset Button</button>
                                </div>

                                <?php echo form_close(); ?>
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


<body>