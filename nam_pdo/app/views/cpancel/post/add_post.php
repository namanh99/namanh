

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Thêm bài viết</div>
				<div class="panel-body">
					<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST"  enctype="multipart/form-data">
						<div class="form-group">
							<label>Tên bài viết</label>
							<input type="text" name="title_post" value="" class="form-control">
						</div>
						<div class="form-group">
							<label >Hình ảnh sản phẩm</label>
							<input type="file" name="image_post" value="" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Chi tiết bài viết</label>
							<textarea id="editor" name="content_post" rows="5" value="" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Danh mục sản phẩm</label>
							<select name="id_category_post" class="form-control">
								<?php 	
									foreach ($category_all as $key => $cate) {
											
								 ?>
								<option value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
								<?php 
									}
								 ?>
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
