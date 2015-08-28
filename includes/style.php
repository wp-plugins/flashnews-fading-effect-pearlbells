<?php
namespace flashnewspearlbells;
class styleData {
    
    public function __construct() {

        add_action( 'wp_enqueue_scripts', array($this,'safely_add_stylesheet') );
        add_action('wp_head', array($this,'pearl_script'));

    }

    public function safely_add_stylesheet() 
    {
         wp_enqueue_style( 'flash-news', plugins_url('../css/style.css', __FILE__) );
    }

    public function pearl_script()
    {            
         // create array of all scripts
        $scripts = array( 'jquery' => 'js/jquery.js',
                          'main' => 'js/main.js' );
        $pluginOptions = array(
                'news_content' => get_option( 'pearl_flash_news_fade_in_out_content' ),
                'news_links' => get_option( 'pearl_flash_news_fade_in_out_links' ),
                'news_delay' => get_option( 'pearl_flash_news_fade_in_out_delay' ),
                'news_show_read_more' => get_option( 'pearl_flash_news_fade_in_out_read_more' ),
                'news_flash_font_color_read_more' => get_option( 'pearl_news_flash_font_color_read_more' ),
                'news_flash_font_color' => get_option('pearl_flash_news_fade_in_out_font_color'),
                'news_flash_font_size' => get_option('pearl_flash_news_fade_in_out_font_size'),
                'news_flash_letter_spacing' => get_option('pearl_flash_news_fade_in_out_letter_spacing'),	
                'news_flash_height' => get_option('pearl_flash_news_fade_in_out_height'),
                'news_flash_width' => get_option('pearl_flash_news_fade_in_out_width'),
                'news_flash_bg_color' => get_option('pearl_flash_news_fade_in_out_bg_color'),		  
                'news_flash_padding' => get_option('pearl_flash_news_fade_in_out_padding'),
                'news_flash_border_width' => get_option('pearl_flash_news_fade_in_out_border_width'),
                'news_flash_border_color' => get_option('pearl_flash_news_fade_in_out_border_color')
            );
        foreach($scripts as $key => $sc)
        {
           wp_deregister_script( $key );
           wp_register_script( $key, plugin_dir_url(dirname(__FILE__)).$sc , array('jquery') );
           wp_enqueue_script( $key );  
        }
        wp_localize_script( 'main', 'pluginOptions', $pluginOptions ); 
    }

}
?>
