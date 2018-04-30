<?php

class Chigusa_Verticalmenu_Helper_Checkall extends Mage_Core_Helper_Abstract
{
    public function getElementHtml()
    {
		$html = parent::getElementHtml();
        $htmlId = 'use_config_' . $this->getHtmlId();
        $html .= '<input id="' . $htmlId . '" name="use_config[]" value="' . $this->getId() . '"';
        $html .= ($disabled ? ' checked="checked"' : '');

        if ($this->getReadonly() || $elementDisabled) {
            $html .= ' disabled="disabled"';
        }

        $html .= ' onclick="alert();" class="checkbox" type="checkbox" />';
        $html .= ' <label for="' . $htmlId . '" class="normal">'
            . Mage::helper('adminhtml')->__('Use Config Settings') . '</label>';
        $html .= '<script type="text/javascript">toggleValueElements($(\'' . $htmlId . '\'), $(\'' . $htmlId
            . '\').parentNode);</script>';

        return $html;
	}
}