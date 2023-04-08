<div class="page__wrapper">
    <div class="page__center">
        <div class="page__row page__row_head">
            <div class="page__col">
                <div class="page__hello h5">Hi <?php echo $_SESSION['user_admin']['name'] ?>,</div>
                <div class="page__welcome h2">Welcome back<span class="desktop-hide">👋</span></div>
            </div>
            <div class="page__col">
                <div class="header"><button class="header__burger"></button>
                    <div class="search">
                        <div class="search__field"><input class="search__input" type="text" placeholder="Search" /><button class="search__toggle"><svg class="icon icon-search">
                                    <use xlink:href="img/sprite.svg#icon-search"></use>
                                </svg><svg class="icon icon-close">
                                    <use xlink:href="img/sprite.svg#icon-close"></use>
                                </svg></button></div>
                        <div class="search__result">
                            <div class="search__info caption-sm">Recent Searches</div>
                            <div class="search__list"><a class="search__item" href="#">
                                    <div class="search__preview bg-pink"><img class="search__pic" src="img/figure-1.png" alt="" />
                                    </div>
                                    <div class="search__text">Earning byitems<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a><a class="search__item" href="#">
                                    <div class="search__preview bg-yellow"><img class="search__pic" src="img/figure-4.png" alt="" />
                                    </div>
                                    <div class="search__text">This monthStatements<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a><a class="search__item" href="#">
                                    <div class="search__preview bg-blue-light"><img class="search__pic" src="img/figure-3.png" alt="" /></div>
                                    <div class="search__text">How manysales I got…<svg class="icon icon-arrow-right">
                                            <use xlink:href="img/sprite.svg#icon-arrow-right"></use>
                                        </svg></div>
                                </a></div><button class="search__btn btn btn_purple btn_wide">Advance Search</button>
                        </div>
                    </div><button class="header__search"><svg class="icon icon-search">
                            <use xlink:href="img/sprite.svg#icon-search"></use>
                        </svg></button>
                    <div class="notifications"><button class="notifications__open"><svg class="icon icon-bell">
                                <use xlink:href="img/sprite.svg#icon-bell"></use>
                            </svg><span class="notifications__counter">2</span></button>
                        <div class="notifications__wrap">
                            <div class="notifications__info h6">Recent Notification</div>
                            <div class="notifications__list"><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Sarah Saunders</div>
                                            <div class="notifications__time caption">8h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                                    </div>
                                </a><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Glenn Greer</div>
                                            <div class="notifications__time caption">12h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                                    </div>
                                </a><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-purple"><img class="notifications__pic" src="img/message.svg" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Sarah Saunders</div>
                                            <div class="notifications__time caption">14h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Sent you a message 📪 </div>
                                    </div>
                                </a><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-red"><img class="notifications__pic" src="img/heart.svg" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Sarah Saunders</div>
                                            <div class="notifications__time caption">21h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Liked <span class="notifications__project">Folio
                                                Agency</span></div>
                                    </div>
                                </a><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-blue"><img class="notifications__pic" src="img/chat.html" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Sarah Saunders</div>
                                            <div class="notifications__time caption">8h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Commented on <span class="notifications__project">Collab Design</span></div>
                                    </div>
                                </a><a class="notifications__item" href="notifications.html">
                                    <div class="notifications__ava"><img class="notifications__pic" src="img/ava-1.png" alt="" />
                                        <div class="notifications__status bg-green"><img class="notifications__pic" src="img/bag.svg" alt="" /></div>
                                    </div>
                                    <div class="notifications__details">
                                        <div class="notifications__line">
                                            <div class="notifications__user caption">Glenn Greer</div>
                                            <div class="notifications__time caption">12h</div>
                                        </div>
                                        <div class="notifications__text caption-sm">Just pushaded <span class="notifications__project">Sapiens Illustration</span></div>
                                    </div>
                                </a></div>
                            <div class="notifications__btns"><a class="notifications__btn btn btn_black" href="notifications.html">See all incoming activity</a></div>
                        </div>
                    </div><a class="header__user" href="#"><img class="header__pic" src="img/ava.png" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="page__content">
            <div class="admin-header">
                THỐNG KÊ
            </div>
            <select name="" id="thongke" onchange="thongke()">
                <option value="hangbanchay">Top 10 sản phẩm có số lượng mua nhiều nhất</option>
                <option value="soluotxem">Top 10 sản phẩm có số lượng xem nhiều nhất</option>
            </select>
            <div>
                <canvas class="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.querySelector('.myChart');

    function thongke() {
        var form_data = new FormData();
        var e = document.querySelector("#thongke")
        form_data.append('name', e.value)
        $.ajax({
            url: "../api/main.php?act=thongke", //Server api to receive the file
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(res) {
                var chart_x = JSON.parse(res)
                var data_x = {
                    labels: chart_x['label'],
                    datasets: [{
                        label: chart_x['name'],
                        data: chart_x['data'],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        borderWidth: 1
                    }]
                };

                var config_x = {
                    type: 'bar',
                    data: data_x,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    },
                };
                mixedChart.destroy()
                mixedChart = new Chart(ctx,
                    config_x
                )
            }
        });
    }

    var data = {
        labels: [],
        datasets: [{
            label: 'My First Dataset',
            data: [],
        }]
    };
    
    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    var mixedChart = new Chart(ctx,
        config
    )
    thongke()

</script>