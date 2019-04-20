<?php
/**
 * Block Section Main Banner.
 *
 * @package Shopical
 */
?>


<div class="section-body clearfix af-container-row">

    <div class="right-list-section col-20 float-l pad">
        <?php shopical_get_block('vertical', 'category-list'); ?>
    </div>
    <?php
    $show_main_banner_section = shopical_get_option('show_main_banner_section');
    if ($show_main_banner_section):
        ?>
        <div class="banner-slider banner-slider-section col-80 float-l pad">

            <h3 style="color: blue; font-weight: bold; font-size: 22px">
                Linh kiện điện thoại HCM
            </h3>

            <p>
                ĐỊA CHỈ : 606/59 ĐƯỜNG 3/2, F14, Q10, TP HCM. ĐỐI DIỆN NGÃ 3 NGUYỄN LÂM <-> 3/2.
            </p>


            <p >
                QUÍ KHÁCH ĐẶT HÀNG: trực tiết trên WEBSITE hoặt qua zalo:
                <br/>
                <span style="background: #ffff00">
                    LIÊN HỆ:
                091.8857.209 ( MR: HẢI ) 0979.941.478 (Mr: VƯƠNG)
                </span>

            </p>

            <p style="color: red; font-size: 15px">
                CHƯƠNG TRÌNH CHIẾT KHẤU: TRÊN 5TR GIẢM 1%. TRÊN 10TR GIẢM 1.5%. TRÊN 20TR GIẢM 2%. TRÊN 30TR GIẢM 3%. KO CHIẾT KHẤU THẺ NHỚ
            </p>

            <p>
                NHẬN ĐÓNG HÀNG ĐI TỈNH
            </p>

            <p style="font-weight: bold">
                GIAO HÀNG MIỄN PHÍ NỘI THÀNH TRONG PHẠM VI 5KM VỚI HÓA ĐƠN TỪ 1TR5 TRỞ LÊN, DƯỚI 1TR5 PHÍ 30K. ĐƠN HÀNG THẤP NHẤT 200K. ( KO SHIP COD )
            </p>
        </div>
    <?php endif; ?>
</div>



