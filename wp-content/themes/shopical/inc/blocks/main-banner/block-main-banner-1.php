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
                Linh Phụ kiện điện thoại Mạnh Tín
            </h3>
            <p>
                <i class="fa fa-map-marker"> </i> Địa chỉ cửa hàng: 38 ĐHT42, P.Tân Hưng Thuận, Quận 12, HCM
            </p>
            <p >
                Quý khách đặt hàng trực tiếp trên <b>WEBSITE</b> hoặc qua <b>ZALO <a href="tel:0964567961"><span style="color:red">0964.567.961</span></a></b>
                <br/>
                <span >
                    <i class="fa fa-phone"></i> Liên Hệ:
                    <br/>
                    Mr. Tín: <span ><a style="color: #0000ff; font-weight: bold" href="tel:0949670909">0949 67 09 09</a></span>
                    <br/>
                    Mrs. Linh: <span ><a style="color: #0000ff; font-weight: bold" href="tel:0836444489">0836 4444 89</a></span>
                </span>
            </p>

            <p >
                <span style="color: red; font-size: 15px; font-weight: bold">* GIÁ TRÊN WEB LÀ GIÁ BÁN BUÔN - BÁN SỈ</span>
                <br/>
                -  Khách hàng sẽ được chiết khấu trực tiếp 3% với hóa đơn từ 5 triệu trở lên. (Áp dụng giá trên web ạ).
                <br/>
                -  Phần trăm (%) chiết khấu tùy vào giá trị đơn hàng khi Khách hàng nhập hàng.
            </p>
            <p style="font-weight: bold">
                - Giao hàng toàn quốc - đi tỉnh.
            </p>
        </div>
    <?php endif; ?>
</div>



