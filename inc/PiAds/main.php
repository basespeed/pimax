<?php
//add script piads
if(get_option('disable_piads') !== ''){
    if(!empty(get_option('key_piads'))){
        if(get_option('position_slt_piads') == 'Footer'){
            add_action('wp_footer', function(){
                ?><!--PiAds Script--><script> window.psdk = window.psdk || function () { (psdk.q = psdk.q || []).push(arguments) }; psdk('create', '<?php echo esc_attr( get_option('key_piads') ); ?>'); psdk('<?php echo esc_attr( get_option('action_slt_piads') ); ?>'); </script><script async src='//api.piads.vn/app/piads.min.js'></script><!--//PiAds Script--><?php
            },0);
        }else{
            add_action('wp_head', function(){
                ?><!--PiAds Script--><script> window.psdk = window.psdk || function () { (psdk.q = psdk.q || []).push(arguments) }; psdk('create', '<?php echo esc_attr( get_option('key_piads') ); ?>'); psdk('<?php echo esc_attr( get_option('action_slt_piads') ); ?>'); </script><script async src='//api.piads.vn/app/piads.min.js'></script><!--//PiAds Script--><?php
            },0);
        }
    }
}
