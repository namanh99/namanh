


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Cập nhập bài viết</div>
				<div class="panel-body">
					<?php
						foreach($category_id as $key => $cateid){


					?>
					<form action="<?php echo BASE_URL ?>/post/update_category/<?php echo $cateid['id_category_post']  ?>" method="POST" accept-charset="utf-8">
					<div class="form-group">
						<label>Tên danh mục</label>
						<input type="text" name="title" value="<?php echo $cateid['title_category_post'] ?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Miêu tả danh mục</label>
						<input type="text" name="desc" value="<?php echo $cateid['desc_category_post'] ?>"  class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Thêm danh mục</button>
					</form>
					<?php 
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
