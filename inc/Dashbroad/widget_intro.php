<?php
add_action( 'wp_dashboard_setup', 'pimax_dashboard_setup_function' );
function pimax_dashboard_setup_function() {
    add_meta_box( 'pimax_dashboard_widget', 'Pitagon Contacts', 'pitagon_intro_widget_function', 'dashboard', 'normal', 'high' );
}

function pitagon_intro_widget_function( $post, $callback_args ) {
    ?>
    <div class="intro_pitagon">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/pitagon.png'; ?>" alt="pitagon" />
        <h1>CÔNG TY CỔ PHẦN PITAGON</h1>
        <ul class="info">
            <li><strong>MST/ĐKKD: </strong>0108480665</li>
            <li><strong>Địa chỉ: </strong><a href="https://g.page/Pitagon">32, Ngõ 2, Trần Cung, P. Cổ Nhuế 1, Q. Bắc Từ Liêm, Hà Nội</a></li>
            <li><strong>Điện thoại: </strong><a href="tel:84966310489">(84) 9663 10489</a></li>
            <li><strong>Email: </strong><a href="contact@pitagon.vn">contact@pitagon.vn</a></li>
        </ul>
        <h2>CÁC DỊCH VỤ</h2>
        <ul class="service">
            <li>
                <div class="img"><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/pisoft.png'; ?>" alt="piSoft" /></div>
                <a href="https://pitagon.vn/" target="_blank">piSoft</a>
            </li>
            <li>
                <div class="img"><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/pihost.png'; ?>" alt="piHost" /></div>
                <a href="https://pitagon.vn/" target="_blank">piHost</a>
            </li>
            <li>
                <div class="img"><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/piweb.png'; ?>" alt="piWeb" /></div>
                <a href="https://piweb.vn/" target="_blank">piWeb</a>
            </li>
            <li>
                <div class="img"><img src="<?php echo plugin_dir_url(__FILE__) . '../../assets/images/piads.png'; ?>" alt="piAds" /></div>
                <a href="https://piads.vn/" target="_blank">piAds</a>
            </li>
        </ul>
    </div>
    <?php
}
