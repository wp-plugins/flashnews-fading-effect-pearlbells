<?php
class dataFlashPearl {
    
        public function __construct() {
         
            add_shortcode('pearl_flash_news_fade_in_out_display', array($this,'pearl_flash_news_fade_in_out'));
        }
    
	public function pearl_flash_news_fade_in_out()
	{		
            $pearl_flash_news_fade_in_out = '<div class="pearl_flash_news_fade_in_out_box"> ';	
	    $pearl_flash_news_fade_in_out .= '<p class="pearl_flash_news_fade_in_out"></p>';	
            $pearl_flash_news_fade_in_out .='</div>';
            return $pearl_flash_news_fade_in_out;		
	}
}
?>
