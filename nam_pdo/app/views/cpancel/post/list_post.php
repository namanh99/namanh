


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<?php 

				if(!empty($_GET['msg'])){
				  $msg = unserialize(urldecode($_GET['msg']));
				  foreach ($msg as $key => $value){
				    echo '<span style="color:red;font-weight:bold">'.$value.'</span>';
				  }
				}
			?>
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Liệt kê mục bải viết</div>
				<div class="panel-body">					
					<table class="table">				
						<thead>
							<tr>
								
								<th>ID</th>
								<th>Tên bài viết</th>
								<th>Hình ản</th>
								<th>Danh mục bài viết</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<?php 	
								$i=0;
								foreach ($category_all as $key => $cate) {
								$i++;	
							 ?>
						<tbody>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $cate['title_post'] ?></td>
								<td><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $cate['image_post'] ?>" height="90" width="90" ></td>
								<td><?php echo $cate['content_post'] ?></td>
								<td><a href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $cate['id_post'] ?>" onClick = "return confirm('Xoá nha')" >Xoá </a> ||
									<a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $cate['id_post'] ?>" > Cập nhập</a></td>
							</tr>
						</tbody>
						<?php 
							}
						?>
					</table>					
				</div>
			</div>
		</div>
	</div>
</div>


