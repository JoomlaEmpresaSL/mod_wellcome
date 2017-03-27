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

jimport('joomla.form.formfield');

if(!class_exists('JWelcomeElementBase')) {
        if(version_compare(JVERSION,'1.6.0','ge')) {
                class JWelcomeElementBase extends JFormField {
                        public function getInput() {}
                }               
        } else {
                class JWelcomeElementBase extends JElement {}
        }
}

class JWelcomeElementColorpicker extends JWelcomeElementBase
{
		/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
     var     $_name = 'Colorpicker';
     //The field class must know its own type through the variable $type.
	 protected $type = 'Colorpicker';
 
     // Joomla! 1.5
     function fetchElement($name, $value, &$node, $control_name)
     {
            ob_start();
	        $img = JUri::root()."modules/mod_wellcome/assets/images/rainbow.png";
	        $imgx = JUri::root()."modules/mod_wellcome/assets/images/";
	        static $embedded;
	        if(!$embedded)
	        {
	            $css2 = JUri::root()."modules/mod_wellcome/assets/mooRainbow.css";
	 			if(JPluginHelper::isEnabled('system', 'mtupgrade')){
	 				$jspath = JUri::root()."modules/mod_wellcome/elements/mooRainbow_1.2.js";
	 			}else $jspath = JUri::root()."modules/mod_wellcome/elements/mooRainbow_1.1.js";
	             ?>
	<link href="<?php echo $css2;?>" type="text/css" rel="stylesheet" />
	<script src="<?php echo $jspath;?>"></script>
	            <?php
	            $embedded=true;
	        ?>
	<script>
	            window.addEvent('domready',function(){
	                Element.extend({
	                    getSiblings: function() {
	                        return this.getParent().getChildren().remove(this);
	                    }
	                });
	            $$(".marcodavelha").each(function(item){
	         item.color=new MooRainbow(item.id, {
	                    startColor: [58, 142, 246],
	                    wheel: true,
	                    id:item.id+'x',
	                    deslocamentoX: -60,
	                    onChange: function(color) {
						item.setStyle('background-color', color.hex);
	                    item.getSiblings()[0].value = color.hex;
	                    },
	                    onComplete: function(color) {
	                    item.getSiblings()[0].value = color.hex;
	                    },
	                    imgPath: '<?php echo $imgx;?>'
	                });
	                });
	            });
	            </script>
	            <?php
	        }
	            ?>
	            <label>
	<input name="<?php echo $control_name;?>[<?php echo $name;?>]" type="text"
	    class="inputbox" id="<?php echo  $control_name.$name ?>"
	    value="<?php echo $value;?>" size="10" />
	<img src="<?php echo $img; ?>" id="img<?php echo $name; ?>" alt="[M]"
	    class="marcodavelha" width="16" height="16" title="<?php echo JText::_('Escolhe umha cor') ?>" style="background-color: <?php echo $value;?>"/></label>
	        <?php
	        $content=ob_get_contents();
	        ob_end_clean();
	        return $content;
      }
 
      // Joomla! 2.5 series
      function getInput()
      {
            ob_start();
	        $img = JUri::root()."modules/mod_wellcome/assets/images/rainbow.png";
	        $imgx = JUri::root()."modules/mod_wellcome/assets/images/";
	        static $embedded;
	        if(!$embedded)
	        {
	            $css2 = JUri::root()."modules/mod_wellcome/assets/mooRainbow.css";
	            $jspath = JUri::root()."modules/mod_wellcome/elements/".(version_compare(JVERSION, '3.0.0','ge')
							? "mooRainbow_1.4.js" : "mooRainbow_1.2.js");
	             ?>
	<link href="<?php echo $css2;?>" type="text/css" rel="stylesheet" />
	<script src="<?php echo $jspath;?>"></script>
	            <?php
	            $embedded=true;
	        ?>
	<script>
	            window.addEvent('domready',function(){
	            $$(".marcodavelha").each(function(item){
	                item.color=new MooRainbow(item.id, {
	                    startColor: [58, 142, 246],
	                    wheel: true,
	                    id:item.id+'x',
	                    deslocamentoX: -170,
	                    onChange: function(color) {
						item.setStyle('background-color', color.hex);
	                    item.getSiblings()[0].value = color.hex;
	                    },
	                    onComplete: function(color) {
	                    item.getSiblings()[0].value = color.hex;
	                    },
	                    imgPath: '<?php echo $imgx;?>'
	                });
	                });
	            });
	            </script>
	            <?php
	        }
	            ?>
	    <input name="<?php echo $this->name;?>" type="text" class="inputbox" id="<?php echo  $this->id ?>" value="<?php echo $this->value;?>" size="10" /><img src="<?php echo $img; ?>" id="img<?php echo $this->id; ?>" alt="[M]" class="marcodavelha" width="16" height="16" title="<?php echo JText::_('ESCOLHE_COR') ?>" style="background-color: <?php echo $this->value;?>"/>
	        <?php
	        $content=ob_get_contents();
	        ob_end_clean();
	        return $content;
      }
}

if(version_compare(JVERSION,'1.6.0','ge')) {
        class JFormFieldColorpicker extends JWelcomeElementColorpicker {}
} else {
        class JElementColorpicker extends JWelcomeElementColorpicker {}                
}