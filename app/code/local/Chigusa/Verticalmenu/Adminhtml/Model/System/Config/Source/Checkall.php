<?php

/**
 * Effect options
 *
 */
class Chigusa_Verticalmenu_Adminhtml_Model_System_Config_Source_Checkall
{
protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
{
$element->setOnclick('launchExample();');
$html = $element->getElementHtml();
$html .= '<script type="text/javascript">function launchExample(){ alert("This is an example"); }</script>';
return $html;
}
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label'=>''),
            array('value' => 1, 'label'=>'checked'),
        );
    }

}