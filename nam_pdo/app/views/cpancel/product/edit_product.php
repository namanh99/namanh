


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Cập nhập  bài viết</div>
				<div class="panel-body">
					<?php
						foreach($product_id as $key => $pro_id){


					?>
					<form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro_id['id_product'] ?>" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Tên danh mục</label>
							<input type="text" name="title_product" value="<?php echo $pro_id['title_product'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label >Hình ảnh sản phẩm</label>
							<input type="file" name="image_product" value="" class="form-control">
							<img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro_id['image_product'] ?>" height="90" width="90">
						</div>
						<div class="form-group">
							<label>Giá sản phẩm</label>
							<input type="number" name="price_product" value="<?php echo $pro_id['price_product'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Số lượng sản phẩm</label>
							<input type="number" name="quantity_product" value="<?php echo $pro_id['quantity_product'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Miêu tả sản phẩm</label>
							<textarea type="text" name="desc_product" rows="5" value="" class="form-control"><?php echo $pro_id['desc_product'] ?></textarea>
						</div>
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							<select name="id_category_product" class="form-control">
								<?php 	
									foreach ($category as $key => $cate) {
											
								 ?>
								<option <?php if($cate['id_category_product'] == $pro_id['id_category_product']) {
									echo "selected";
								} ?> value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
								<?php 
									}
								 ?>
							</select>
						</div>
						<div class="form-group">
							<label>Sản phẩm hot</label>
							<select name="product_hot" class="form-control">
								<?php if($pro_id['product_hot']==0){

								 ?>
									<option selected value="0">Không</option>
									<option value="1">Có</option>
								<?php  
								}else{
								?>
									<option value="0">Không</option>
									<option selected value="1">Có</option>
								<?php
									}
								?>
							</select>
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Thêm</button>
					<?php 
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
