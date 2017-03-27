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
jimport('joomla.filesystem.file');

$baseurl = JURI::base();
$urlNuevoAnuncio=$baseurl.'index.php?option=com_adsmanager&task=write&Itemid='.JRequest::getInt( 'Itemid',0 );

if(version_compare(JVERSION, '3.0.0','ge')){
	require_once( dirname(__FILE__).DIRECTORY_SEPARATOR.'helper.php' );
}
else{
	require_once( dirname(__FILE__).DS.'helper.php' );
}
	
$ad_text=JText::_('MOD_WELLCOME_ADS');

$module_width=intval($params->get('module_width',185));
$background=$params->get('background','#FFFFFF');
$border=intval($params->get('border',0));
$border_color=$params->get('border_color','#000000');

$button_text = $params->get('button_text',JText::_('MOD_WELLCOME_BUTTON_DEFAULT'));
$button_text_color=$params->get('button_text_color','#FFFFFF');
$button_text_size=intval($params->get('button_text_size',16));
$button_text_font=$params->get('button_text_font','Verdana');
$button_background=$params->get('button_background','#FF0000');
$button_border_color=$params->get('button_border_color','#000000');
$button_width=intval($params->get('button_width',0));
$button_height=intval($params->get('button_height',0));

$main_text = $params->get('main_text',JText::_('MOD_WELLCOME_MAIN_TEXT_DEFAULT'));
$main_text_color=$params->get('main_text_color','#000000');
$main_text_size=intval($params->get('main_text_size',14));
$main_text_font=$params->get('main_text_font','Verdana');
$main_text_ads_color=$params->get('main_text_ads_color','#FF0000');
$main_text_ads_size=intval($params->get('main_text_ads_size',18));
$main_text_ads_font=$params->get('main_text_ads_font','Verdana');

$text_display = intval($params->get('text_display',1));
$text1 = $params->get('text1',JText::_('MOD_WELLCOME_TEXT1_DEFAULT'));
$text2 = $params->get('text2',JText::_('MOD_WELLCOME_TEXT2_DEFAULT'));
$text3 = $params->get('text3',JText::_('MOD_WELLCOME_TEXT3_DEFAULT'));

$img_display = intval($params->get('img_display',1));
$img1 = $params->get('img1',JRoute::_('modules/mod_wellcome/img/img1.jpg'));
$img2 = $params->get('img2',JRoute::_('modules/mod_wellcome/img/img2.jpg'));
$img3 = $params->get('img3',JRoute::_('modules/mod_wellcome/img/img3.jpg'));

$text_color=$params->get('text_color','#000000');
$text_size=intval($params->get('text_size',16));
$text_font=$params->get('text_font','Verdana');

$num_color=$params->get('num_color','#000000');
$num_size=intval($params->get('num_size',24));
$num_font=$params->get('num_font','Verdana');

$img_border=intval($params->get('img_border',1));
$img_border_color=$params->get('img_border_color','#000000');
$img_width=intval($params->get('img_width',110));
$img_height=intval($params->get('img_height',65));


$num_anuncios = modWellcomeHelper::getNumber($params);
require(JModuleHelper::getLayoutPath('mod_wellcome'));
?>