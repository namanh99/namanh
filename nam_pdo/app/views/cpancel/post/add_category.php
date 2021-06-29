<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Thêm danh mục bài viết</div>
				<div class="panel-body">
					<form action="<?php echo BASE_URL ?>/post/insert_category" method="POST" accept-charset="utf-8">
						<div class="form-group">
							<label>Tên bài viết</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Miêu tả bài viết</label>
							<input type="text" name="desc" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Thêm bài viết</button>
					</form>
				</div>	
				
			</div>
		</div>
	</div>
</div>