function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function mess() {
    toast({
        title: "Thông báo!",
        message: "Chức năng đang được hoàn thành xin thông cảm",
        type: "warning",
        duration: 5000
    });
}