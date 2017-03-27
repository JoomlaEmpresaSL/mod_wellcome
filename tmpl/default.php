<?php
/*
 *      Wellcome Module for AdsManager
 *      @package Wellcome Module for AdsManager
 *      @subpackage Content
 *      @author Joomla Empresa
 *      @copyright Copyright (C) 2012 Joomla Empresa. All rights reserved
 *      @license GNU/GPL v3 or later
 *      
 *      Contact us at info@joomlaempresa.com (http://www.joomlaempresa.es)
 *      
 *      This file is part of Wellcome Module for AdsManager.
 *      
 *          Wellcome Module for AdsManager is free software: you can redistribute it and/or modify
 *          it under the terms of the GNU General Public License as published by
 *          the Free Software Foundation, either version 3 of the License, or
 *          (at your option) any later version.
 *      
 *          Wellcome Module for AdsManager is distributed in the hope that it will be useful,
 *          but WITHOUT ANY WARRANTY; without even the implied warranty of
 *          MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *          GNU General Public License for more details.
 *      
 *          You should have received a copy of the GNU General Public License
 *          along with Wellcome Module for AdsManager.  If not, see <http://www.gnu.org/licenses/>.
 */
defined('_JEXEC') or die('Acesso restrito');
?>
<style type="text/css">
#module_wellcome{width:<?php echo $module_width;?>px; border:<?php echo $border;?>px solid <?php echo $border_color;?>; padding:5px !important; background-color:<?php echo $background;?>;text-align:left;}
#module_wellcome .boton{margin:0 auto;background-color:<?php echo $button_background;?> !important; border:2px solid <?php echo $button_border_color;?> !important; padding:10px; text-align:center; color:<?php echo $button_text_color;?>; font-weight:bold; font-size:<?php echo $button_text_size;?>px; margin-bottom:20px !important;cursor:pointer;font-family:<?php echo $button_text_font;?>}
#module_wellcome a:link,#module_wellcome a:visited,#module_wellcome a:hover,#module_wellcome a:active{text-decoration:none;}
#module_wellcome .main_text{margin-bottom:20px !important;color:<?php echo $main_text_color;?>;font-size:<?php echo $main_text_size;?>px;font-family:<?php echo $main_text_font; ?>;}
#module_wellcome .ads{color:<?php echo $main_text_ads_color;?>; font-weight:bold; font-size:<?php echo $main_text_ads_size;?>px;font-family:<?php echo $main_text_ads_font; ?>;}
#module_wellcome .numeros{padding:5px 0px; color:<?php echo $num_color;?>; font-size:<?php echo $num_size;?>px; font-weight:bold; width:20px; margin-top:15px !important;font-family:<?php echo $num_font; ?>;border:0;}
#module_wellcome .textos{padding:0px 5px; color:<?php echo $text_color;?>; font-size:<?php echo $text_size;?>px; margin-right:5px;font-family:<?php echo $text_font; ?>;border:0;}
#module_wellcome .imagenes{padding:0;margin:5px !important;border:<?php echo $img_border;?>px solid <?php echo $img_border_color?> !important;}
#module_wellcome tr{border:0;margin:0;padding:0;}
</style>
<div id="module_wellcome">
<a href="<?php echo $urlNuevoAnuncio ?>"><div class="boton" style="<?php echo ($button_width!=0)?'width:'.$button_width.'px;':'';echo ($button_height!=0)?'height:'.$button_height.'px;':''; ?>" ><?php echo $button_text ?> >></div></a>
<div class="main_text"><?php echo $main_text; ?> <span class="ads"><?php echo intval($num_anuncios); ?> <?php echo $ad_text; ?>.</span></div>
<?php if($text_display == 1){ ?>
<table style="margin:0px; padding:5px;">
	<tr>
		<td class="numeros">1</td>
		<td class="textos"><?php echo $text1 ?></td>
		<?php if($img_display == 1){ ?>
		<td class="imagenes"><img width="<?php echo $img_width;?>" height="<?php echo $img_height;?>" src="<?php echo $img1;?>" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="numeros">2</td>
		<td class="textos"><?php echo $text2 ?></td>
		<?php if($img_display == 1){ ?>
		<td class="imagenes"><img width="<?php echo $img_width;?>" height="<?php echo $img_height;?>" src="<?php echo $img2;?>" /></td>
		<?php }?>	
	<tr>
		<td class="numeros">3</td>
		<td class="textos"><?php echo $text3 ?></td>
		<?php if($img_display == 1){ ?>
		<td class="imagenes"><img width="<?php echo $img_width;?>" height="<?php echo $img_height;?>" src="<?php echo $img3;?>" /></td>
		<?php }?>
	</tr>
</table>
<?php }?>
</div>