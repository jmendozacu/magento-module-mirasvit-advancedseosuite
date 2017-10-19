<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at http://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   Advanced SEO Suite
 * @version   1.3.22
 * @build     1454
 * @copyright Copyright (C) 2017 Mirasvit (http://mirasvit.com/)
 */


class Mirasvit_Seo_Model_System_Config_Source_Httpsnoindexpages
{
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label'=>Mage::helper('seo')->__('Use Robots Meta Header')),
            array('value' => Mirasvit_Seo_Model_Config::NOINDEX_FOLLOW, 'label'=> 'NOINDEX, FOLLOW'),
            array('value' => Mirasvit_Seo_Model_Config::INDEX_NOFOLLOW, 'label'=> 'INDEX, NOFOLLOW'),
            array('value' => Mirasvit_Seo_Model_Config::NOINDEX_NOFOLLOW, 'label'=> 'NOINDEX, NOFOLLOW'),
            array('value' => Mirasvit_Seo_Model_Config::INDEX_FOLLOW, 'label'=> 'INDEX, FOLLOW'),

        );
    }
}