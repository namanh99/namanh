<section>
<div class="bg_in"> 

<div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href=".">
                           <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope
                           itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                           <strong itemprop="name">
                           Tất cả tin tức
                           </strong>  
                           </span>
                           <meta itemprop="position" content="2" />
                        </li>
                     </ol>
</div>
                  <!--breadcrumbs-->
<div class="content_page">
                     <div class="box-title">
                        <div class="title-bar">
                           <h1>Tin tức</h1>
                        </div>
                     </div>
                     
                     <div class="content_text">
                        <ul class="list_ul">
                           <?php 
                              foreach ($list_post as $key => $list) {
                                
                            ?>
                           <li class="lists">
                              <div class="img-list">
                                 <a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html">
                                 <img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $list['image_post'] ?>" alt="So sánh công nghệ hiển thị 3LCD và DLP" class="img-list-in">
                                 </a>
                              </div>
                              <div class="content-list">
                                 <div class="content-list_inm">
                                    <div class="title-list">
                                       <h3>
                                          <a href="tin-tuc/so-sanh-cong-nghe-hien-thi-3lcd-va-dlp-425.html"><?php echo $list['title_post'] ?></a>
                                       </h3>
                                       <p class="list-news-status-p">
                                          <a title="Thiết bị văn phòng">Thiết bị văn phòng</a> | <a title="26-12-2017" >26-12-2017</a>
                                       </p>
                                    </div>
                                    <div class="content-list-in">
                                       <p><span style="font-size:16px"><?php echo substr($list['content_post'],0,500)  ?></span></p>
                                    </div>
                                    <div class="xt"><a href="<?php echo BASE_URL ?>/tintuc/chitiettin/<?php echo $list['id_post'] ?>">Xem thêm</a></div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <?php 
                              }
                            ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="wp_page">
                           <div class="page">
                           </div>
                        </div>
                     </div>
                     
</div>
</div>
</section>