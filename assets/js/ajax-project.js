jQuery( document ).ready( function($) {
    'use strict';
    jQuery('.vk-page-project-grid .vk-buttons').click(function ($) {

        var num = jQuery('.item').length;
        var num2 = jQuery('.item').length;

        jQuery.ajax({
            url: univercoreAjax.ajaxurl,
            type: 'post',
            data: { action: 'ajax_loadmore_data', 'num' : num ,'num2' : num2},
            success: function( respond ) {
                var $newItems = jQuery(respond);
                jQuery('.vk-project-grid.clearfix.vk-masonry-layout').append( $newItems ).isotope( 'insert', $newItems );
            }

        });

       return false;
    });

});