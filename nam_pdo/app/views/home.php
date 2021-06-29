
    <section>
        <div class="bg_in">
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1>Sản phẩm HOT</h1>
                        <a class="read_more" href="<?php echo BASE_URL ?>/sanpham/sanphamhot">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php   
                            foreach ($product_hot as $key => $hot) {
                                if($hot['product_hot'] == 1){
                         ?>
                  <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="post" accept-charset="utf-8">
                    <input type="hidden" value="<?php echo $hot['id_product'] ?>" name="product_id">
                    <input type="hidden" value="<?php echo $hot['title_product'] ?>" name="product_title">
                    <input type="hidden" value="<?php echo $hot['image_product'] ?>" name="product_image">
                    <input type="hidden" value="<?php echo $hot['price_product'] ?>" name="product_price">
                    <input type="hidden" value="1" name="product_quantity"> 
                    <div class="grids">
                     <div class="grids_in">
                        <div class="content">
                        <div class="img-right-pro">
                          
                           <a href="sanpham.php">
                           <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $hot['image_product'] ?>" data-original="image/iphone.png" alt="<?php echo $hot['title_product']  ?>" />
                           </a>

                           <!-- <div class="content-overlay"></div>
                           <div class="content-details fadeIn-top">
                             <?php echo $hot['desc_product'] ?>
                           </div> -->
                        </div>
                        <div class="name-pro-right">
                           <a href="<?php echo BASE_URL?>/sanpham/chitietsp/<?php echo $hot['id_product'] ?>">
                              <h3><?php echo $hot['title_product']  ?></h3>
                           </a>
                        </div>
                        <div>
                            <input type="submit" style="box-shadow: none" class="btn btn-success" name="addcart" value="Đặt hàng"> 
                        </div>
                        <div class="price_old_new">
                           <div class="price">
                              <span class="news_price"><?php echo number_format($hot['price_product'],0,',','.').' đ'  ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                </form>
                        <?php 
                                }
                            }

                         ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
             <?php 
                    foreach ($category as $key => $cate) {
                                
             ?>
            <div class="module_pro_all">
                <div class="box-title">
                    <div class="title-bar">
                        <h1><?php echo $cate['title_category_product'] ?></h1>
                        <a class="read_more" href="<?php echo BASE_URL  ?>/sanpham/danhmuc/<?php echo $cate['id_category_product'] ?>">
                  Xem thêm
                  </a>
                    </div>
                </div>
                <div class="pro_all_gird">
                    <div class="girds_all list_all_other_page ">
                        <?php 
                            foreach ($product_hot as $key => $hot) {
                                if($cate['id_category_product'] == $hot['id_category_product']){
                            
                         ?>
                 <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="post" accept-charset="utf-8">
                    <input type="hidden" value="<?php echo $hot['id_product'] ?>" name="product_id">
                    <input type="hidden" value="<?php echo $hot['title_product'] ?>" name="product_title">
                    <input type="hidden" value="<?php echo $hot['image_product'] ?>" name="product_image">
                    <input type="hidden" value="<?php echo $hot['price_product'] ?>" name="product_price">
                    <input type="hidden" value="1" name="product_quantity">         
                        <div class="grids">
                            <div class="grids_in">
                                <div class="content">
                                    <div class="img-right-pro">

                                        <a href="sanpham.php">
                                            <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $hot['image_product'] ?>" data-original="image/mac.jpg" alt="Máy in Canon MF229DW" />
                                        </a>

                                        <!-- <div class="content-overlay"></div>
                                        <div class="content-details fadeIn-top ">
                                            

                                        </div> -->
                                    </div>
                                    <div class="name-pro-right">
                                        <a href="<?php echo BASE_URL?>/sanpham/chitietsp/<?php echo $hot['id_product'] ?>">
                                            <h3><?php echo $hot['title_product'] ?></h3>
                                        </a>
                                    </div>
                                    <div>
                                        <input type="submit" style="box-shadow: none" class="btn btn-success" name="addcart" value="Đặt hàng"> 
                                    </div>
                                    <div class="price_old_new">
                                        <div class="price">
                                            <span class="news_price"><?php echo number_format($hot['price_product'],0,',','.').'đ' ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <?php 
                                }
                            }
                         ?>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php 
                }
             ?>
            

    </section>
    <!--end:body-->
    