var $jquery = jQuery.noConflict(); 
var arr = pluginOptions.news_content.split('--'),
    arr_links = pluginOptions.news_links.split('--'),
    count = 0 , i = 0;
    
$jquery(document).ready(function(){
  StyleNewsFlashFadeInOut();
  PlayFlashNews()
  setInterval("PlayFlashNews()",pluginOptions.news_delay);
});
					
function PlayFlashNews()
{    
    if( pluginOptions.news_show_read_more =='yes' )
        $jquery('p.pearl_flash_news_fade_in_out').html(arr[i]+'<a href="'+arr_links[i]+'" class="pearl_flash_news_fade_links" style="color:'+ pluginOptions.news_flash_font_color_read_more+'" target="_blank"> . . . Read More</a>');
    else
        $jquery('p.pearl_flash_news_fade_in_out').html(arr[i]);
        $jquery('p.pearl_flash_news_fade_in_out').fadeIn('slow','linear');
        i++;
        if( i == arr.length )
            i=0;              
}
		
function StyleNewsFlashFadeInOut()
{
    $jquery('.pearl_flash_news_fade_in_out_box').css({
            "height":pluginOptions.news_flash_height,
            "width":pluginOptions.news_flash_width,
            "background-color":pluginOptions.news_flash_bg_color,		  
            "padding":pluginOptions.news_flash_padding,
            "border-width":pluginOptions.news_flash_border_width,
            "border-style":"solid",
            "border-color":pluginOptions.news_flash_border_color
      });

    $jquery('p.pearl_flash_news_fade_in_out').css({
            "color":pluginOptions.news_flash_font_color,		  
            "font-size":pluginOptions.news_flash_font_size,
            "letter-spacing":pluginOptions.news_flash_letter_spacing
      });


}
	 


