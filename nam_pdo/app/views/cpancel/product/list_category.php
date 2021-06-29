


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
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
								
								<th>STT</th>
								<th>Tên danh mục</th>
								<th>Miêu tả danh mục</th>
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
								<td><?php echo $cate['title_category_product'] ?></td>
								<td><?php echo $cate['desc_category_product'] ?></td>
								<td><a href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $cate['id_category_product'] ?>" onClick = "return confirm('Xoá nha')" >Xoá </a> ||
									<a href="<?php echo BASE_URL ?>/product/edit_category/<?php echo $cate['id_category_product'] ?>" > Cập nhập</a></td>
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


