<?php 
    foreach ($detail_post as $key => $value) {
      $name_category_post = $value['title_category_post'];
      $id_cate = $value['id_category_post'];
       $name_post = $value['title_post'];
   }       
          
 ?>
<section>
   <div class="bg_in">
   <div class="wrapper_all_main">
   <div class="wrapper_all_main_right">
        <div class="breadcrumbs">
               <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>">
                     <span itemprop="name">Trang chủ</span></a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo  $id_cate ?>">
                     <span itemprop="name"><?php echo $name_category_post ?></span></a>
                     <meta itemprop="position" content="2" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <span itemprop="item">
                     <strong itemprop="name">
                     <?php echo $name_post?>
                     </strong>
                     </span>
                     <meta itemprop="position" content="3" />
                  </li>
               </ol>
            </div>
      <!--breadcrumbs-->
      <div class="content_page">
         <?php foreach ($detail_post as $key => $pos) {
          
          ?>
         <div class="box-title">
            <div class="title-bar">
               <h1><?php echo $pos['title_post'] ?></h1>
            </div>
         </div>
         <div class="content_text">
           <h1><?php echo $pos['content_post'] ?></h1>
         </div>
         <div class="clear"></div>
      <?php 
         } 
      ?>
      </div>
   </div>
   
</section>