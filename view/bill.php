<?php
$total = 0;
$index = 0;

?>

<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							About Us
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.html">Home</a><span class="delimiter"></span>Bill
					</div>
				</div>
			</div>
			<div id="content" class="site-content" role="main">
				<div class="content-bill">
					<div class="flex justify-content-lg-between">
						<div>LOGO</div>
						<div class="flex flex-column align-items-end" style="display:flex; flex-direction: column; align-items: end;">
							<div class="table-product-btn-status">PAID</div>
							<div class="fs-5 fw-semibold mt-1"><?= $ma_don_hang ?></div>
						</div>
					</div>
					<div class="grid mt-5 mb-5" style="display:grid; grid-template-columns: repeat(2, 1fr);">
						<div class="g-col-6">
							<div class="fw-semibold text-uppercase mb-1 fs-6" style="color: rgba(145, 158, 171, 1); font-weight: 500; font-size: 18px;" >Thông tin người nhận
							</div>
							<div class="mb-1">
								<?= $ten_nguoi_nhan ?> <br>
								<?= $dia_chi ?><br>
								Phone: <?= $so_dien_thoai ?>
							</div>
							<div class="fw-semibold text-uppercase mt-3 fs-6" style="color: rgba(145, 158, 171, 1); font-weight: 500; font-size: 18px;">Ngày tạo
							</div>
							<div class="mt-1">
								<?= $ngay_dat_hang ?>
							</div>
						</div>
						<div class="g-col-6">
							<div class="fw-semibold text-uppercase mb-1 fs-6" style="color: rgba(145, 158, 171, 1); font-weight: 500; font-size: 18px;">Phương thức thanh toán
							</div>
							<div class="mb-3">
								<?= $ten_pttt ?>
							</div>
							<div class="fw-semibold text-uppercase mt-4 fs-6" style="color: rgba(145, 158, 171, 1); font-weight: 500; font-size: 18px;">Phương thức giao hàng
							</div>
							<div class="mt-1">
								<?= $ten_pt ?>
							</div>
							<div class="fw-semibold text-uppercase mt-4 fs-6" style="color: rgba(145, 158, 171, 1); font-weight: 500; font-size: 18px;">Tình trạng đơn hàng
							</div>
							<div class="text-red mt-1">
								<?= $ten_trang_thai ?>
							</div>
						</div>
					</div>
					<table class="table-bill">
						<thead>
							<tr>
								<th style="width: 10%;text-align: center;">#</th>
								<th style="width: 40%;">Description</th>
								<th style="width: 15%; text-align: center;">Qty</th>
								<th style="width: 17.5%;text-align: end;">Unit price</th>
								<th class="text-end px-4" style="text-align: end;">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($bill_detail as $item) : ?>
								<?php
									extract($item);
									$totalItem = $so_luong * $don_gia;
									$total += $totalItem;
									$index ++;
								?>
								<tr>
									<th style="color: rgba(145, 158, 171, 1);"><?= $index ?></th>
									<td>
										<div class="text-product text-product_main"><?= $ten_san_pham ?></div>
										<div class="text-product text-product_sub"><?= $ten_loai ?></div>
									</td>
									<td class="text-center" style="text-align: center;"><?= $so_luong ?></td>
									<td style="text-align: end;">$<?= $don_gia ?></td>
									<td class="text-end px-4" style="text-align: end;">$<?=  $totalItem ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-end" style="text-align: end;">Subtotal</td>
								<td class="text-end px-4" style="text-align: end;">$<?= $total ?></td>
							</tr>
							<!-- <tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-end">Discount</td>
								<td class="text-end text-red px-4">-$20.00</td>
							</tr> -->
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-end" style="text-align: end;">Ship</td>
								<td class="text-end px-4" style="text-align: end;">$<?= $totalAll - $total ?></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-end fw-bolder fs-5" style="text-align: end;font-size: 1.75rem; font-weight: 500;">Total</td>
								<td class="text-end fw-bolder fs-5 px-4" style="text-align: end;font-size: 1.75rem; font-weight: 500;">$<?= $totalAll ?></td>
							</tr>
						</tfoot>
					</table>
					<div class="flex justify-content-between mt-3">
						<div class=""></div>
						<div class="flex flex-column align-items-end">
							<div class="fw-semibold">Have a Question?</div>
							support@abcapp.com
						</div>
					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>