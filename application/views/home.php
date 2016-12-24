<?php $this->load->view('inc/header'); ?>
        
        <section class="section-area">
          <div class="block-table block-table_padd_10">
            <div class="block-table__cell col-md-6 col-md-push-6">
              <div class="block-table__inner vc-bg-01 "></div>
            </div>
            <div class="block-table__cell col-md-6 col-md-pull-6 text-center">
              <div class="block-table__inner bg-grey">
                  
                  <div class="main-flex-box"> <div class="flex-box-content">
                <h2 class="ui-title-block ui-title-block_mod-a"><span class="text-gradient"><span class="shuffle">Furniture</span></span></h2>
                <div class="ui-subtitle-block">Aenean feugiat libero ligula, eget cursus</div>
                <div data-min480="2" data-min768="3" data-min992="2" data-min1200="2" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="goods-carousel owl-carousel owl-theme enable-owl-carousel js-zoom-gallery ">

<!-- <?php print_r($office_supplies) ?> -->

                  <?php foreach ($furniture as $key => $value): ?>
	                  	<section class="b-goods">
	                    <div class="b-goods__inner"><a href="<?=base_url().$value->picture?>" class="b-goods__img js-zoom-images"><img src="<?=base_url().$value->picture?>" alt="goods" class="img-responsive"/></a>
	                      <div class="b-goods__category"><?=$value->sub_category_name?></div>
	                      <h3 class="b-goods__name"><?=$value->product_name?></h3>
	                      <div class="b-goods__price">$<?=$value->unit_price?>.00</div>
	                    </div>
	                  </section>
                  <?php endforeach ?>

                  
                </div><a href="catalog-list.html" class="b-goods-carousel__btn-link btn-link">view all</a>
              </div> </div>
                
                </div>
            </div>
          </div>
        </section>
        <section class="section-area">
          <div class="block-table block-table_padd_10 block-table_revers">
            <div class="block-table__cell col-md-6">
                    <div class="block-table__inner vc-bg-02 scrollreveal"></div>
            </div>
            <div class="block-table__cell col-md-6 text-center">
              <div class="block-table__inner bg-grey">
                  
                  <div class="main-flex-box "> <div class="flex-box-content">
                      
                      
                      
                      <h2 class="ui-title-block ui-title-block_mod-a"><span class="text-gradient"><span class="shuffle">Office Supplies</span></span></h2>
                          
                          
                <div class="ui-subtitle-block">Quisque nisi nisl accumsan vel odio</div>
                <div data-min480="2" data-min768="3" data-min992="2" data-min1200="2" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="goods-carousel owl-carousel owl-theme enable-owl-carousel js-zoom-gallery">

                  <?php foreach ($office_supplies as $key => $value): ?>
	                  	<section class="b-goods">
	                    <div class="b-goods__inner"><a href="<?=base_url().$value->picture?>" class="b-goods__img js-zoom-images"><img src="<?=base_url().$value->picture?>" alt="goods" class="img-responsive"/></a>
	                      <div class="b-goods__category"><?=$value->sub_category_name?></div>
	                      <h3 class="b-goods__name"><?=$value->product_name?></h3>
	                      <div class="b-goods__price">$<?=$value->unit_price?>.00</div>
	                    </div>
	                  </section>
                  <?php endforeach ?>
                  <!-- end b-goods-->
                  
                </div><a href="catalog-list.html" class="btn-link b-goods-carousel__btn-link">view all</a>
              </div></div></div>
            </div>
          </div>
        </section>
        <section class="section-area">
          <div class="block-table block-table_padd_10">
            <div class="block-table__cell col-md-6 col-md-push-6">
                
                 <div class="block-table__inner vc-bg-03 scrollreveal"></div>
                
   
            </div>
            <div class="block-table__cell col-md-6 col-md-pull-6 text-center">
              <div class="block-table__inner bg-grey">
                  
                    <div class="main-flex-box"> <div class="flex-box-content">
                        
                        <h2 class="ui-title-block ui-title-block_mod-a "><span class="text-gradient"><span class="shuffle">Technology</span></span></h2>
                <div class="ui-subtitle-block">Donec vel neque in ante posuere</div>
                <div data-min480="2" data-min768="3" data-min992="2" data-min1200="2" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="goods-carousel owl-carousel owl-theme enable-owl-carousel js-zoom-gallery">

                  <?php foreach ($technology as $key => $value): ?>
	                  	<section class="b-goods">
	                    <div class="b-goods__inner"><a href="<?=base_url().$value->picture?>" class="b-goods__img js-zoom-images"><img src="<?=base_url().$value->picture?>" alt="goods" class="img-responsive"/></a>
	                      <div class="b-goods__category"><?=$value->sub_category_name?></div>
	                      <h3 class="b-goods__name"><?=$value->product_name?></h3>
	                      <div class="b-goods__price">$<?=$value->unit_price?>.00</div>
	                    </div>
	                  </section>
                  <?php endforeach ?>
                  <!-- end b-goods-->
                  
                </div><a href="catalog-list.html" class="b-goods-carousel__btn-link btn-link">view all</a>
              </div>  </div>  </div>
            </div>
          </div>
        </section>

<?php $this->load->view('inc/footer'); ?>     
   