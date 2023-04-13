<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Giỏ hàng
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.html">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Giỏ hàng
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="section-padding">
					<div class="section-container p-l-r">
						<div class="shop-cart">
							<div class="row">
								<div class="col-xl-8 col-lg-12 col-md-12 col-12">
									<form class="cart-form" action="#" method="post">
										<div class="table-responsive">
											<table class="cart-items table" cellspacing="0">
												<thead>
													<tr>
														<th class="product-thumbnail">Sản phẩm</th>
														<th class="product-price">Giá</th>
														<th class="product-quantity">Số lượng</th>
														<th class="product-subtotal">Thành tiền</th>
														<th class="product-remove">&nbsp;</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
												<tfoot>
													<tr>
														<td colspan="6" class="actions">
															<div class="bottom-cart">
																<div class="coupon">
																	<input type="text" name="coupon_code" class="input-text" id="coupon-code" value="" placeholder="Mã giảm giá">
																	<button type="submit" name="apply_coupon" class="button" value="Apply coupon">Dùng mã</button>
																</div>
																<h2><a href="?act=shop-grid-left">Tiếp tục mua hàng</a></h2>
																<div class="button" value="Update cart" onclick="updateCart(this)">Cập nhật giỏ hàng</div>
															</div>
														</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</form>
								</div>
								<div class="col-xl-4 col-lg-12 col-md-12 col-12">
									<div class="cart-totals">
										<h2>Thông tin giỏ hàng</h2>
										<div>
											<div class="cart-subtotal">
												<div class="title">Thành tiền</div>
												<div><span>$480.00</span></div>
											</div>
											<div class="shipping-totals">
												<div class="title">Hình thức vận chuyển</div>
												<div>
													<ul class="shipping-methods custom-radio">
														<li>
															<input type="radio" name="shipping_method" data-index="0" value="1" class="shipping_method" checked="checked"><label>Giao bình thường</label>
														</li>
														<li>
															<input type="radio" name="shipping_method" data-index="0" value="2" class="shipping_method"><label>Giao nhanh</label>
														</li>
													</ul>
													<p class="shipping-desc">
														Hình thưc vận chuyển sẽ hiện lần nữa trong thanh toán
													</p>
												</div>
											</div>
											<div class="order-total">
												<div class="title">Tổng tiền</div>
												<div><span>$480.00</span></div>
											</div>
										</div>
										<div class="proceed-to-checkout">
											<a class="checkout-button button" value="checkout" onclick="updateCart(this)">
												Thanh toán
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>

<script>
	$(document).ready(function() {
		orderTotal()
	});

	$('.shipping-methods').click(function(e) {
		orderTotal()
	});
</script>