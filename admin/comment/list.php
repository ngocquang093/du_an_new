<div class="" style="margin-left: 300px;background-color: rgb(237,246,246);margin-top: 20px;padding: 20px;border-radius: 20px;">

    <section class="list_products">

        <div class="wrapper-table" style="margin-top: 0px;">
            <div class="cot4">

                <form method="POST" action="index.php?act=list_com">
                    <div class="right3">
                        <div class="cot22">
                            <input id="id2" name="kyw" type="text" placeholder="Nhập id sản phẩm">
                            <button class="handel-search">
                                <svg id="id1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table-inform">
                <thead>
                <td width="50px">STT</td>
                <td width="400px">Nội dung</td>
                <td width="120px">Id sản phẩm</td>
                <td width="120px">Id người dùng</td>
                <td width="170px">Ngày cmt</td>
                <td width="70px">Công cụ</td>
                </thead>
                <?php
                foreach ($list_cmt as $user) {
                    extract($user);
                    $delete_cmt="index.php?act=delete_cmt&id=".$ma_binh_luan;
                    echo '
                            <tr>
                                <td>'.$ma_binh_luan.'</td>
                                <td>'.$noi_dung.'</td>
                                <td>'.$ma_san_pham.'</td>
                                <td>'.$ma_khach_hang.'</td>
                                <td>'.$ngay_binh_luan.'</td>
                                <td class="flex">
                                    <a class="a" href="'.$delete_cmt.'">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </a>
                                </td>
                            </tr>
                            ';
                }
                ?>

            </table>
        </div>

    </section>
</div>
