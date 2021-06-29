


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
				<div class="panel-heading" style="text-align: center">Liệt kê đơn hàng</div>
				<div class="panel-body">					
					<table class="table">				
						<thead>
							<tr>
								
								<th>ID</th>
								<th>Code đơn hàng</th>
								<th>Ngày đặt</th>
								<th>Tình trạng</th>
								<th>Quản lý</th>
							</tr>
						</thead>
						<?php 	
								$i=0;
								foreach ($order as $key => $ord) {
								$i++;	
							 ?>
						<tbody>
							<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $ord['order_code'] ?></td>
								<td><?php echo $ord['order_date'] ?></td>
								<td><?php if($ord['order_status']==0){echo 'đơn hàng mới';}else{echo 'đơn hàng đã xử lý';} ?></td>
								<td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code'] ?>" >Xem đơn hàng</a></td>
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


