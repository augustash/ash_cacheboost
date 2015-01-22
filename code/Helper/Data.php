<?php
/**
 * Boost cachability by enabling block-level cache on strategic core Magneto
 * blocks
 *
 * @category    Ash
 * @package     Ash_Cacheboost
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Core data helper
 *
 * @category    Ash
 * @package     Ash_Cacheboost
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Cacheboost_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_ENABLED = 'ash_cacheboost/general/enabled';

    /**
     * Determines if blocks should be cachable
     *
     * @return  boolean
     */
    static public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ENABLED);
    }
}
