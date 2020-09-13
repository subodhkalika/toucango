<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Mageplaza
 * @package   Mageplaza_BetterMaintenance
 * @copyright Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license   https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\BetterMaintenance\Block\Adminhtml\System;

use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class ComingsoonMultipleImages
 * @package Mageplaza\BetterMaintenance\Block\Adminhtml\System
 */
class ComingsoonMultipleImages extends MultipleImages
{
    /**
     * @param AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $html = '';
        $html .= $this->setMultiImgElement()->setResponse('comingsoon')->toHtml();

        return $html;
    }
}
