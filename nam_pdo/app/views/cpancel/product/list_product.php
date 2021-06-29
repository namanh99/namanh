


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-11 col-md-offset-0" >
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
								<th>Hình ảnh</th>
								<th>Danh mục</th>
								<th>Giá </th>
								<th>Số lượng</th>
								<th>Hot</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<?php 	
								$i=0;
								foreach ($product as $key => $pro) {
								$i++;	
							 ?>
						<tbody>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $pro['title_product'] ?></td>
								<td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product'] ?>" height="90" width="90"> </td>
								<td><?php echo $pro['desc_product'] ?></td>
								<td><?php echo number_format($pro['price_product'],0,',','.').' đ' ?></td>
								<td><?php echo $pro['quantity_product'] ?></td>
								<td><?php 
							         if($pro['product_hot']==0) {
							            echo "Ko có";
							         }else{
							            echo "Có";
							         }
							     ?></td>
								


								<td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product'] ?>" onClick = "return confirm('Xoá nha')" >Xoá </a> ||
									<a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product'] ?>" > Cập nhập</a></td>
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


