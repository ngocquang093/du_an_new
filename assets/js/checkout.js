$('#checkout_place_order').click(function (e) {
    validateCheckout()
});

function validateCheckout() {

    var name = $('input[name = "name"]').val()
    var province = $("#province option:selected").text()
    var district = $("#district option:selected").text()
    var ward = $("#ward option:selected").text()
    var detail = $("#detail").val()
    var phone = $('input[name = "phone"]').val()
    if (name == "" || province == "Chọn vùng" || district == "Chọn vùng" || ward == "Chọn vùng" || detail == "" || phone == "") {
        toast({
            title: "Thất bại!",
            message: "Các trường đánh dấu không được để trống",
            type: "error",
            duration: 5000
        });
        return
    }

    for (let index = 0; index < phone.length; index++) {
        if (isNaN(phone[index])) {
            toast({
                title: "Thất bại!",
                message: "Số điện thoại chỉ được nhập số",
                type: "error",
                duration: 5000
            });
            $('input[name = "phone"]').focus();
            return
        }
    }

    if (phone.length != 10) {
        toast({
            title: "Thất bại!",
            message: "Số điện thoại phải có 10 số",
            type: "error",
            duration: 5000
        });
        $('input[name = "phone"]').focus();
        return
    }

    console.log('a')

    var order_comments = $('textarea[name = "order_comments"]').val()
    var pttt = $('input[name = "payment_method"]:checked').val();
    var total = Number($('.order-total span').text().slice(1))
    var shipValue = $('input[name = "shipping_method"]:checked').val()
    var address = detail + ", " + ward + ", " + district + ", " + province

    const weekday = ["Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
    const m = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];

    const d = new Date();
    let day = weekday[d.getDay()];
    let date = d.getDate()
    let month = m[d.getMonth()];
    let year = d.getFullYear()

    var ngay_dat_hang = date + "/" + month + '/' + year

    var form_data = new FormData();

    form_data.append('ten_nguoi_nhan', name)
    form_data.append('so_dien_thoai', phone)
    form_data.append('dia_chi', address)
    form_data.append('ngay_dat_hang', ngay_dat_hang)
    form_data.append('pttt', pttt)
    form_data.append('pt_ship', shipValue)
    form_data.append('don_gia', total)
    form_data.append('chu_thich', order_comments)

    $.ajax({
        url: "api/main.php?act=addbill", //Server api to receive the file
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function (suc) {
            var ma_don_hang = JSON.parse(suc)
            window.location = '?act=bill&madonhang=' + ma_don_hang 
        }
    });
}


$('.shipping-methods').click(function (e) {
    orderTotal()
});

$(document).ready(function () {
    orderTotal()
});


