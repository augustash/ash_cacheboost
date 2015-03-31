<?php
/**
 * Boost cachability by enabling block-level cache on strategic core Magneto
 * blocks
 *
 * @category    Ash
 * @package     Ash_Cacheboost
 * @copyright   Copyright (c) 2015 August Ash, Inc. (http://www.augustash.com)
 * @license     LICENSE.txt (MIT)
 */

/**
 * CMS Block model
 *
 * @category    Ash
 * @package     Ash_Cacheboost
 * @author      August Ash Team <core@augustash.com>
 */
class Ash_Cacheboost_Model_Type_Cms_Block extends Ash_Cacheboost_Model_Type_Abstract
{
    /**
     * Get cache key informative items
     *
     * @return  array
     */
    public function getCacheKeyInfo()
    {
        $keys   = $this->getBlock()->getCacheKeyInfo() + parent::getDefaultKeys();
        $keys[] = (int)Mage::app()->getStore()->isCurrentlySecure();
        $keys[] = 'block_' . $this->getBlock()->getBlockId();
        $keys[] = 'cms_block';

        return $keys;
    }

    /**
     * Get tags array for saving cache
     *
     * @return  array
     */
    public function getCacheTags()
    {
        $tags   = parent::getDefaultTags();
        $tags[] = Mage_Cms_Model_Block::CACHE_TAG . '_' . $this->getBlock()->getBlockId();

        return $tags;
    }
}
