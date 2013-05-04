<?php
/**
 * Livechat Data helper
 *
 * @author BindChat
 */
class BindChat_Livechat_Helper_Data extends Mage_Core_Helper_Data
{
    /**
     * Path to store config if front-end output is enabled
     *
     * @var string
     */
    const XML_PATH_ENABLED            = 'livechat/settings/enabled';

    /**
     * Path to store config where site id is stored
     * @var string
     */
    const XML_PATH_SITE_ID            = 'livechat/settings/siteid';


    /**
     * Path to store config where site domain is stored
     * @var string
     */
    const XML_PATH_SITE_DOMAIN           = 'livechat/settings/sitedomain';


    /**
     * Checks whether news can be displayed in the frontend
     *
     * @param integer|string|Mage_Core_Model_Store $store
     * @return boolean
     */
    public function isEnabled($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_ENABLED, $store);
    }

    /**
     * Return the site id
     * @param integer|string|Mage_Core_Model_Store $store 
     * @return string
     */
    public function getSiteId($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_SITE_ID, $store); 
    }


    /**
     * Return the site domain
     * @param integer|string|Mage_Core_Model_Store $store 
     * @return string
     */
    public function getSiteDomain($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_SITE_DOMAIN, $store); 
    }
}
