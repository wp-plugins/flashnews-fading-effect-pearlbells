<?php

class optionsValues {
    
    public function add_options()
    {
        add_option('pearl_flash_news_fade_in_out_content','Lorem Ipsum is simply dummy text -- of the printing and typesetting industry','','yes');
        add_option('pearl_flash_news_fade_in_out_links','http://pearlbells.co.uk/ -- http://pearlbells.co.uk/photo-gallery/','','yes');
        add_option('pearl_flash_news_fade_in_out_font_color','#000000','','yes');
        add_option('pearl_flash_news_fade_in_out_font_size','14px','','yes');
        add_option('pearl_flash_news_fade_in_out_delay','5000','','yes');
        add_option('pearl_flash_news_fade_in_out_letter_spacing','2px','','yes');
        add_option('pearl_flash_news_fade_in_out_padding','10px','','yes');
        add_option('pearl_flash_news_fade_in_out_border_width','4px','','yes');
        add_option('pearl_flash_news_fade_in_out_border_color','#999999','','yes');
        add_option('pearl_flash_news_fade_in_out_height','50px','','yes');
        add_option('pearl_flash_news_fade_in_out_width','500px','','yes');
        add_option('pearl_flash_news_fade_in_out_bg_color','#bd1000','','yes');	
        add_option('pearl_flash_news_fade_in_out_read_more','yes','','yes');
        add_option('pearl_news_flash_font_color_read_more','#ffffff','','yes');
        add_option('pearl_news_flash_read_more_new_window','yes','','yes');
    }
    
    public function update_options() {
        
        $ok = false;
        $message = '';
        $optionValues = $_POST;
   
        foreach($optionValues as $key => $value){
            
          if ( get_option( $key ) !== false ) {
            update_option($key,$value);
			$ok = true;
          }
            
        }
        
        if($ok)
        {
            $message = '<div id="message" class="updated fade"><p>Options Saved</p></div>';
        }
        else
        {
            $message = '<div id="message" class="error fade"><p>Failed to save options</p></div> ';

        }
       
        echo $message;
       
        
    }
    
    public function delete_options()
    {
        delete_option('pearl_news_flash_read_more_new_window');
        delete_option('pearl_news_flash_font_color_read_more');
        delete_option('pearl_flash_news_fade_in_out_read_more');
        delete_option('pearl_flash_news_fade_in_out_links');
        delete_option('pearl_flash_news_fade_in_out_height');	  
        delete_option('pearl_flash_news_fade_in_out_width');
        delete_option('pearl_flash_news_fade_in_out_bg_color');		
        delete_option('pearl_flash_news_fade_in_out_padding');	  
        delete_option('pearl_flash_news_fade_in_out_border_width');
        delete_option('pearl_flash_news_fade_in_out_border_color');		
        delete_option('pearl_flash_news_fade_in_out_letter_spacing');	  
        delete_option('pearl_flash_news_fade_in_out_content');
        delete_option('pearl_flash_news_fade_in_out_font_color');
        delete_option('pearl_flash_news_fade_in_out_font_size');		
        delete_option('pearl_flash_news_fade_in_out_delay');
    }
    
   
    
}
?>
