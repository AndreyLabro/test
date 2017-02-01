jQuery(document).ready(function() {

    jQuery( "#acf_1906" ).insertAfter( jQuery( "#titlediv" ) );
    jQuery( "#acf_1961" ).insertAfter( jQuery( "#wpb_visual_composer" ) ); 
    jQuery( "composer-switch.vc_backend-status" ).insertBefore( jQuery( "#wpb_visual_composer" ) );
    jQuery( "#menu-appearance" ).insertAfter( jQuery( "#menu-dashboard" ) );
    jQuery( "#postexcerpt" ).insertAfter( jQuery( "#acf-author" ) );
    
    jQuery(".post-type-news #title").attr('maxlength','75');
    
}
);
