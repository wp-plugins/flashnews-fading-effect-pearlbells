<?php
/*
Plugin Name: Flash News Fade In/Out Pearlbells
Plugin URI: http://pearlbells.co.uk/
Description: Flash News Fade In/Out Pearlbells
Version:  1.0
Author:Pearlbells
Author URI: http://pearlbells.co.uk/contact.html
License: GPL2
*/
/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version. 

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details. 

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/
$pearl_flash_news_fade_in_out_class = new pearl_flash_news_fade_in_out_class();
class pearl_flash_news_fade_in_out_class
{	
	function pearl_flash_news_fade_in_out_script()
	{
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
		wp_enqueue_script( 'jquery' );?>
        <style type="text/css">
		.pearl_flash_news_fade_links
		{
			text-decoration:none;
			font-weight:bold;
		}
		</style>
		<script type="text/javascript">
		var $jquery = jQuery.noConflict(); 
		var news_content ='<?php echo get_option('pearl_flash_news_fade_in_out_content');?>';
		var news_links ='<?php echo get_option('pearl_flash_news_fade_in_out_links');?>';
		var news_delay ='<?php echo get_option('pearl_flash_news_fade_in_out_delay');?>';
		var news_show_read_more ='<?php echo get_option('pearl_flash_news_fade_in_out_read_more');?>';
		var arr = news_content.split('--');
		var arr_links = news_links.split('--');
		var count =0;
		var i=0;
		
		$jquery(document).ready(function(){
		  StyleNewsFlashFadeInOut();
		  PlayFlashNews()
		  setInterval("PlayFlashNews()",5000);
		});
		
			
		function PlayFlashNews()
		{
			var news_flash_font_color_read_more = '<?php echo get_option('pearl_news_flash_font_color_read_more');?>';
			if(news_show_read_more =='yes')
			{
			$jquery('p.pearl_flash_news_fade_in_out').html(arr[i]+'<a href="'+arr_links[i]+'" class="pearl_flash_news_fade_links" style="color:'+news_flash_font_color_read_more+'" target="_blank"> . . . Read More</a>');
			}
			else
			{
				$jquery('p.pearl_flash_news_fade_in_out').html(arr[i]);
			}
			$jquery('p.pearl_flash_news_fade_in_out').fadeIn('slow','linear');
			i++;
			if(i==arr.length)
					{
						i=0;
						
					}
		}
		
		function StyleNewsFlashFadeInOut()
		{
		  var news_flash_font_color = '<?php echo get_option('pearl_flash_news_fade_in_out_font_color');?>';
		  var news_flash_font_size ='<?php echo get_option('pearl_flash_news_fade_in_out_font_size');?>';
		  var news_flash_letter_spacing ='<?php echo get_option('pearl_flash_news_fade_in_out_letter_spacing');?>';		  
		  var news_flash_height = '<?php echo get_option('pearl_flash_news_fade_in_out_height');?>';
		  var news_flash_width ='<?php echo get_option('pearl_flash_news_fade_in_out_width');?>';
		  var news_flash_bg_color ='<?php echo get_option('pearl_flash_news_fade_in_out_bg_color');?>';		  
		  var news_flash_padding = '<?php echo get_option('pearl_flash_news_fade_in_out_padding');?>';
		  var news_flash_border_width ='<?php echo get_option('pearl_flash_news_fade_in_out_border_width');?>';
		  var news_flash_border_color ='<?php echo get_option('pearl_flash_news_fade_in_out_border_color');?>';
		
		  
			$jquery('.pearl_flash_news_fade_in_out_box').css({
				"height":news_flash_height,
				"width":news_flash_width,
				"background-color":news_flash_bg_color,		  
				"padding":news_flash_padding,
				"border-width":news_flash_border_width,
				"border-style":"solid",
				"border-color":news_flash_border_color
			  });
			
			$jquery('p.pearl_flash_news_fade_in_out').css({
				"color":news_flash_font_color,		  
				"font-size":news_flash_font_size,
				"letter-spacing":news_flash_letter_spacing
			  });
			  
		 
		}
	 
		</script>
		<?php
		
	}
	// Main plugin function
	
	function pearl_flash_news_fade_in_out($atts, $content = null)
	{	
	    $pearl_flash_news_fade_in_out = '<div class="pearl_flash_news_fade_in_out_box"> ';	
	    $pearl_flash_news_fade_in_out .= '<p class="pearl_flash_news_fade_in_out"></p>';	
		$pearl_flash_news_fade_in_out .='</div>';
		return $pearl_flash_news_fade_in_out;		
	}
	
	function pearl_flash_news_fade_in_out_install()
	{		
		add_option('pearl_flash_news_fade_in_out_content','Lorem Ipsum is simply dummy text -- of the printing and typesetting industry','','yes');
		add_option('pearl_flash_news_fade_in_out_links','http://pearlbells.co.uk/ -- http://pearlbells.co.uk/joomlaportfolio/7-photo-gallery.html','','yes');
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
	function pearl_flash_news_fade_in_out_uninstall()
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
	
	function pearl_flash_news_fade_in_out_menu()
	{
		add_options_page('News Flash Pearl ','News Flash Pearl','manage_options',__FILE__,array('pearl_flash_news_fade_in_out_class','pearl_flash_news_fade_in_out_menu_page'));  
	}
	function pearl_flash_news_fade_in_out_menu_page()
	{
		?>
        <div class="wrap">
           <h2>News Flash Settings</h2>
           <?php
		       if($_REQUEST['submit'])
			   {
				   pearl_flash_news_fade_in_out_class::pearl_flash_news_fade_in_out_update_option();
			   }
			       pearl_flash_news_fade_in_out_class::pearl_flash_news_fade_in_out_print_option();
		   ?>
        </div>
        <?php
	}
	
	function pearl_flash_news_fade_in_out_update_option()
	{
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
	
	function pearl_flash_news_fade_in_out_print_option()
	{
		include 'pearl_flash_news_fade_in_out_admin.php';
	}
	
}
add_action('admin_menu',array($pearl_flash_news_fade_in_out_class,'pearl_flash_news_fade_in_out_menu'));
add_action('wp_head', array($pearl_flash_news_fade_in_out_class,'pearl_flash_news_fade_in_out_script'));
add_shortcode('pearl_flash_news_fade_in_out_display', array($pearl_flash_news_fade_in_out_class,'pearl_flash_news_fade_in_out'));
register_activation_hook(__FILE__,array($pearl_flash_news_fade_in_out_class,'pearl_flash_news_fade_in_out_install'));
register_deactivation_hook(__FILE__,array($pearl_flash_news_fade_in_out_class,'pearl_flash_news_fade_in_out_uninstall'));
?>
