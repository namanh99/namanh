


<div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Liệt kê đơn hàng chi tiết</div>
				<div class="panel-body">					
					<table class="table">				
						<thead>
							<tr>
								
								<th>ID</th>
								<th>Tên người đặt</th>
								<th>Eamil</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>
								<th>ghi chú</th>
								
							</tr>
						</thead>
						<?php 	
								$i=0;								
								foreach ($order_info as $key => $ord) {
								$i++;	
								
							 ?>
						<tbody>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $ord['name'] ?></td>
								<td><?php echo $ord['email'] ?></td>
								<td><?php echo $ord['sodienthoai'] ?></td>
								<td><?php echo $ord['diachi'] ?></td>
								<td><?php echo $ord['noidung'] ?></td>
							</tr>
						</tbody>
						<?php 
							}
						?>						
					</table>					
				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align: center">Liệt kê đơn hàng chi tiết</div>
				<div class="panel-body">					
					<table class="table">				
						<thead>
							<tr>
								
								<th>ID</th>
								<th>Tên sản phẩm</th>
								<th>Hình ảnh</th>
								<th>Số lượng</th>
								<th>Đơn giá</th>
								<th>Thành tiền</th>
								
							</tr>
						</thead>
						<?php 	
								$i=0;
								$total = 0;
								foreach ($order_details as $key => $ord) {
								$i++;	
								$total += $ord['price_product']*$ord['product_quantity'];
							 ?>
						<tbody>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $ord['title_product'] ?></td>
								<td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image_product']  ?>" height="100" width="100" ></td>
								<td><?php echo $ord['product_quantity'] ?></td>
								<td><?php echo number_format($ord['price_product'],0,',','.').' đ' ?></td>
								<td><?php echo number_format($ord['price_product']*$ord['product_quantity'],0,',','.').' đ' ?></td>
							</tr>
						</tbody>
						<?php 
							}
						?>
						<form action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code'] ?>" method="POST" accept-charset="utf-8">
							
							<tr>
								<td><input type="submit" name="update_order" value="Đã xử lý" class="btn btn-primary"></td>
								<td align="right" colspan="6">Tổng tiền : <?php echo number_format($total,0,',','.').' đ' ?></td>
							</tr>
						</form>	
					</table>					
				</div>
			</div>
		</div>
	</div>
</div>


