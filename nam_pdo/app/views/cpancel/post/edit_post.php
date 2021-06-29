

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Cập nhật bài viết</div>
				<div class="panel-body">
					<?php 
						foreach ($post_id as $key => $pos_id) {
						
					 ?>
					<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos_id['id_post'] ?>" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Tên bài viết</label>
							<input type="text" name="title_post" value="<?php echo $pos_id['title_post'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label >Hình ảnh sản phẩm</label>
							<input type="file" name="image_post" value="" class="form-control">
							<img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos_id['image_post'] ?>" height ="90" width="90">
						</div>
						
						<div class="form-group">
							<label>Chi tiết bài viết</label>
							<textarea id="editor" type="text" name="content_post" rows="5" value="" class="form-control"><?php echo $pos_id['content_post'] ?></textarea>
						</div>
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							<select name="id_category_post" class="form-control">
								<?php 	
									foreach ($category_all as $key => $cate) {
											
								 ?>
								<option <?php if($cate['id_category_post'] == $pos_id['id_category_post'] ) {echo "selected";} ?> value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
								<?php 
									}
								 ?>
							</select>
						</div>
						
						<br>
						<button type="submit" class="btn btn-primary">Thêm</button>
					</form>
					<?php 
						}
					 ?>
				</div>	
				
			</div>
		</div>
	</div>
</div>
