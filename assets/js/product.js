function showProductShop() {
    var tabContent = document.querySelector('.tab-content')
    var productsList = tabContent.querySelector(".products-list")
    var row = productsList.querySelector(".row")

    var form_data = new FormData();
    form_data.append('st', 0);
    form_data.append('step', 8);

    $.ajax({
        url: "api/main.php?act=listPro", //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function(suc) {
            var listPro = JSON.parse(suc)
            var listProHTML = ``
            listPro.forEach(e => {
                var listImg = e["anh_san_pham"].split(", ")
                var id = e['ma_san_pham']
                var name = e['ten_san_pham']
                var price = e['don_gia']
                var priceSale = e['gia_khuyen_mai']
                var sale = (priceSale == -1) ? 0 : ((price - priceSale) / price * 100).toFixed(0)
                var saleHTML = (sale == 0) ? `` : `<div class="onsale">-${sale}%</div>`

                var priceHTML = (priceSale == -1) ? `<span class="price">$${price}</span>` : `<span class="price">
                                            <del aria-hidden="true"><span>$${price}</span></del>
                                            <ins><span>$${priceSale}</span></ins>
                                        </span>`
                
                listProHTML += `
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="products-entry clearfix product-wapper">
                                <div class="products-thumb">
                                    <div class="product-lable">
                                        ` + saleHTML + `
                                        <div class="hot">Hot</div>
                                    </div>
                                    <div class="product-thumb-hover">
                                        <a href="index.php?act=shop-details&id=${id}">
                                            <img width="600" height="600" src="media/product/${listImg[0]}" class="post-image" alt="">
                                            <img width="600" height="600" src="media/product/${listImg[1]}" class="hover-image back" alt="">
                                        </a>
                                    </div>
                                    <div class="product-button">
                                        <div class="btn-add-to-cart_ct" data-title="Add to cart">
                                            <a rel="nofollow" class="product-btn button" onclick="addCart(${id},1, this)">Add to
                                                cart</a>
                                        </div>
                                        <div class="btn-wishlist" data-title="Wishlist">
                                            <button class="product-btn">Add to
                                                wishlist</button>
                                        </div>
                                        <div class="btn-compare" data-title="Compare">
                                            <button class="product-btn">Compare</button>
                                        </div>
                                        <span class="product-quickview" data-title="Quick View">
                                            <a href="?id=${id}" class="quickview quickview-button" onclick="quickView(${id})">Quick
                                                View <i class="icon-search"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="products-content">
                                    <div class="contents text-center">
                                        <h3 class="product-title"><a href="index.php?act=shop-details&id=${id}">${name}</a></h3>
                                        ` + priceHTML + `
                                    </div>
                                </div>
                            </div>
                        </div>
                `
            });

            row.innerHTML = listProHTML
        }
    });

}


function showProduct() {
    var productsList = document.querySelector(".products-list")
    var row = productsList.querySelector(".row")

    var form_data = new FormData();
    form_data.append('st', 0);
    form_data.append('step', 8);

    $.ajax({
        url: "api/main.php?act=listPro", //Server api to receive the file
        type: "POST",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function(suc) {
            var listPro = JSON.parse(suc)
            var listProHTML = ``
            listPro.forEach(e => {
                var listImg = e["anh_san_pham"].split(", ")
                var id = e['ma_san_pham']
                var name = e['ten_san_pham']
                var price = e['don_gia']
                var priceSale = e['gia_khuyen_mai']
                var sale = (priceSale == -1) ? 0 : ((price - priceSale) / price * 100).toFixed(0)
                // console.log(price, priceSale, sale)
                var saleHTML = (sale == 0) ? `` : `<div class="onsale">-${sale}%</div>`

                var priceHTML = (priceSale == -1) ? `<span class="price">$${price}</span>` : `<span class="price">
                                            <del aria-hidden="true"><span>$${price}</span></del>
                                            <ins><span>$${priceSale}</span></ins>
                                        </span>`
                listProHTML += `
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="items">
                            <div class="products-entry clearfix product-wapper">
                                <div class="products-thumb">
                                    <div class="product-lable">
                                        ` + saleHTML + `
                                        <div class="hot">Hot</div>
                                    </div>
                                    <div class="product-thumb-hover">
                                        <a href="index.php?act=shop-details&id=${id}">
                                            <img width="600" height="600" src="media/product/${listImg[0]}" class="post-image" alt="">
                                            <img width="600" height="600" src="media/product/${listImg[1]}" class="hover-image back" alt="">
                                        </a>
                                    </div>
                                    <div class="product-button">
                                        <div class="btn-add-to-cart_ct" data-title="Add to cart">
                                            <a rel="nofollow" class="product-btn button" onclick="addCart(${id},1, this)">Add to
                                                cart</a>
                                        </div>
                                        <div class="btn-wishlist" data-title="Wishlist">
                                            <button class="product-btn">Add to
                                                wishlist</button>
                                        </div>
                                        <div class="btn-compare" data-title="Compare">
                                            <button class="product-btn">Compare</button>
                                        </div>
                                        <span class="product-quickview" data-title="Quick View">
                                            <a href="?id=${id}" class="quickview quickview-button" onclick="quickView(${id})">Quick
                                                View <i class="icon-search"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="products-content">
                                    <div class="contents text-center">
                                        <h3 class="product-title"><a href="index.php?act=shop-details&id=${id}">${name}</a></h3>
                                        ` + priceHTML + `
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `
            });

            row.innerHTML = listProHTML
        }
    });

}

