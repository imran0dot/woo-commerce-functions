<?php
function add_extra_html_after_add_to_cart_button() {
    echo '<div class="extra-html">';
    echo '<a class="button" href="https://wa.me/+8801990129353" style="display:inline-block; background-color:blue; color:white; padding:10px 15px; text-decoration:none; margin-right:10px;">What\'s app এ ওর্ডার করুন</a>';
    echo '<a class="button" href="tel:+8801990129353" style="display:inline-block; background-color:green; color:white; padding:10px 15px; text-decoration:none;">Call Now</a>';
    echo '</div>';
}
add_action( 'woocommerce_after_add_to_cart_button', 'add_extra_html_after_add_to_cart_button' );
?>