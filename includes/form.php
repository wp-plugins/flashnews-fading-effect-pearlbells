<?php
class flashDisplayForm {
    
    public function __construct() {
        
        $this->optionsForm();
        $this->authorDetails();
    }
    
    private function optionsForm() {
                
          $default_pearl_flash_news_fade_in_out_content = get_option('pearl_flash_news_fade_in_out_content');
          $default_pearl_flash_news_fade_in_out_font_color = get_option('pearl_flash_news_fade_in_out_font_color');
	  $default_pearl_flash_news_fade_in_out_font_size = get_option('pearl_flash_news_fade_in_out_font_size');
	  $default_pearl_flash_news_fade_in_out_delay = get_option('pearl_flash_news_fade_in_out_delay');
	  $default_pearl_flash_news_fade_in_out_letter_spacing = get_option('pearl_flash_news_fade_in_out_letter_spacing');
	  $default_pearl_flash_news_fade_in_out_height = get_option('pearl_flash_news_fade_in_out_height');
          $default_pearl_flash_news_fade_in_out_width = get_option('pearl_flash_news_fade_in_out_width');
	  $default_pearl_flash_news_fade_in_out_bg_color = get_option('pearl_flash_news_fade_in_out_bg_color');
	  $default_pearl_flash_news_fade_in_out_padding = get_option('pearl_flash_news_fade_in_out_padding');
	  $default_pearl_flash_news_fade_in_out_border_width = get_option('pearl_flash_news_fade_in_out_border_width');
	  $default_pearl_flash_news_fade_in_out_border_color = get_option('pearl_flash_news_fade_in_out_border_color');
	  $default_pearl_flash_news_fade_in_out_links = get_option('pearl_flash_news_fade_in_out_links');
	  $default_pearl_flash_news_fade_in_out_read_more = get_option('pearl_flash_news_fade_in_out_read_more');
	  $default_pearl_news_flash_font_color_read_more = get_option('pearl_news_flash_font_color_read_more');
	  $default_pearl_news_flash_read_more_new_window = get_option('pearl_news_flash_read_more_new_window');
          
          $displayOptionsForm = '
                
           <form method="post" action="'.$PHP_SELF.'">
           <h3>Settings</h3>
           <label for="pearl_flash_news_fade_in_out_height">Height :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_height" value="'.$default_pearl_flash_news_fade_in_out_height.'"/>
           <label for="pearl_flash_news_fade_in_out_width">Width :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_width" value="'.$default_pearl_flash_news_fade_in_out_width.'"/><br/>
           <label for="pearl_flash_news_fade_in_out_bg_color">Bg Color :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_bg_color" value="'.$default_pearl_flash_news_fade_in_out_bg_color.'"/>       
           <label for="pearl_flash_news_fade_in_out_padding">Padding :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_padding" value="'.$default_pearl_flash_news_fade_in_out_padding.'"/>
           <label for="pearl_flash_news_fade_in_out_border_width">Border Width :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_border_width" value="'.$default_pearl_flash_news_fade_in_out_border_width.'"/><br/>
           <label for="pearl_flash_news_fade_in_out_border_color">Border Color :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_border_color" value="'.$default_pearl_flash_news_fade_in_out_border_color.'"/>      
           <label for="pearl_flash_news_fade_in_out_font_color">Font Color :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_font_color" value="'.$default_pearl_flash_news_fade_in_out_font_color.'"/>
           <label for="pearl_flash_news_fade_in_out_font_size">Font Size :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_font_size" value="'.$default_pearl_flash_news_fade_in_out_font_size.'"/><br/>
           <label for="pearl_flash_news_fade_in_out_letter_spacing">Letter Spacing :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_letter_spacing" value="'.$default_pearl_flash_news_fade_in_out_letter_spacing.'"/>
           <label for="pearl_flash_news_fade_in_out_delay">Delay :</label>
           <input type="text" name="pearl_flash_news_fade_in_out_delay" value="'.$default_pearl_flash_news_fade_in_out_delay.'"/><br/><br/>
           <label for="pearl_flash_news_fade_in_out_content">Enter Flashing News :(Enter flash news here and use -- as separator)</label><br/>
           <textarea rows="8" cols="50" name="pearl_flash_news_fade_in_out_content" >'.$default_pearl_flash_news_fade_in_out_content.'</textarea><br/>
           <h3>Read More Settings</h3>
           <label for="pearl_flash_news_fade_in_out_read_more">Show Read More :</label>
           <input type="radio" name="pearl_flash_news_fade_in_out_read_more" value="yes"'.$default_pearl_flash_news_fade_in_out_read_more.' /> Yes 
           <input type="radio" name="pearl_flash_news_fade_in_out_read_more" value="no"'.$default_pearl_flash_news_fade_in_out_read_more.' /> No<br/>
           <label for="pearl_news_flash_font_color_read_more">Read More Color :</label>
           <input type="text" name="pearl_news_flash_font_color_read_more" value="'.$default_pearl_news_flash_font_color_read_more.'"/><br/>
           
           <label for="pearl_news_flash_read_more_new_window">Show Read More (New Window) :</label>
           <input type="radio" name="pearl_news_flash_read_more_new_window" value="yes"'.$default_pearl_news_flash_read_more_new_window.' /> Yes 
           <input type="radio" name="pearl_news_flash_read_more_new_window" value="no"'.$default_pearl_news_flash_read_more_new_window.' /> No<br/>
           
          <br/>
           <label for="pearl_flash_news_fade_in_out_links">Enter Flashing News :(Enter flash news links here and use -- as separator)</label><br/>
           <textarea rows="8" cols="50" name="pearl_flash_news_fade_in_out_links" >'.$default_pearl_flash_news_fade_in_out_links.'</textarea><br/>       
          
           <input type="submit" name="submit" value="Submit"/>
        </form>';
          
          echo $displayOptionsForm;

        
    }
    
    private function authorDetails() {
        
        $details = ' <p>Created by <a href="http://pearlbells.co.uk/" target="_blank">Pearlbells</a><br/> Follow me : <a href="http://twitter.com/#!/pearlbells" target="_blank">Twitter</a><br/>Please Donate : <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=W884YAWEDPA9U" target="_blank">Click Here</a></p>
         <p>Feel free to email me lizeipe@gmail.com for any advice or suggestion.</p>';
        echo $details;
        
    }
    
}
?>
