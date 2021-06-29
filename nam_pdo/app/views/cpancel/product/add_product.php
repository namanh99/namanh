

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Thêm bài viết</div>
				<div class="panel-body">
					<form action="<?php echo BASE_URL ?>/product/insert_product" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Tên danh mục</label>
							<input type="text" name="title_product" value="" class="form-control">
						</div>
						<div class="form-group">
							<label >Hình ảnh sản phẩm</label>
							<input type="file" name="image_product" value="" class="form-control">
						</div>
						<div class="form-group">
							<label>Giá sản phẩm</label>
							<input type="number" name="price_product" value="" class="form-control">
						</div>
						<div class="form-group">
							<label>Số lượng sản phẩm</label>
							<input type="number" name="quantity_product" value="" class="form-control">
						</div>
						<div class="form-group">
							<label>Miêu tả sản phẩm</label>
							<textarea type="text" name="desc_product" rows="5" value="" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							<select name="id_category_product" class="form-control">
								<?php 	
									foreach ($category as $key => $cate) {
											
								 ?>
								<option value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
								<?php 
									}
								 ?>
							</select>
						</div>
						<div class="form-group">
							<label>Sản phẩm hot</label>
							<select name="product_hot" class="form-control">
								<option value="0">Không</option>
								<option value="1">Có</option>
							</select>
						</div>
						<br>
						<button type="submit" class="btn btn-primary">Thêm</button>
					</form>
				</div>	
				
			</div>
		</div>
	</div>
</div>
