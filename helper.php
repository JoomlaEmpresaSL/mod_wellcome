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

class modWellcomeHelper
{
	static public function getNumber(){
		$numero=0;
		
		$db=&JFactory::getDBO();
		$consulta='Select count(*) From #__adsmanager_ads Where published=1';
		$db->setQuery($consulta);
		$numero = $db->loadResult();
		
		return $numero;	
	}
	
}