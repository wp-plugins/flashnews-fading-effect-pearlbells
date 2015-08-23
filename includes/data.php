<?php
class data {
    
        public function __construct() {
            
           // add_shortcode('pearl_csv_to_webpage_display', array($this,'csv_to_webpage'));
            add_shortcode('pearl_flash_news_fade_in_out_display', array($this,'pearl_flash_news_fade_in_out'));
        }
    
	public function pearl_flash_news_fade_in_out()
	{		
            $pearl_flash_news_fade_in_out = '<div class="pearl_flash_news_fade_in_out_box"> ';	
	    $pearl_flash_news_fade_in_out .= '<p class="pearl_flash_news_fade_in_out"></p>';	
            $pearl_flash_news_fade_in_out .='</div>';
            return $pearl_flash_news_fade_in_out;		
	}
//	// Arrange Data in a Table
//	
//	public function DisplayData($arrdat)
//	{
//		$num = count($arrdat);
//		$numinside = count($arrdat[0]);
//		$html = '<table class="pearl_tblstyle" id="pearl_tbl">';
//		for($i=0;$i<$num;$i++)
//		{
//			$html .= '<tr>';
//			
//			for($j=0;$j<$numinside;$j++)
//			{
//				$html .= '<td>'.$arrdat[$i][$j].'</td>';
//			}
//			
//			$html .= '</tr>';
//		}
//		
//		$html .=  '</table>';
//		
//		return $html;
//	}
}
?>
