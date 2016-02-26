<?php
class Learn_AdvancedBreadcrumbs_Helper_Data extends Mage_Core_Helper_Abstract 
{
    /* const XML_PATH_ADV_BC_ENABLE             = 'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_enable'; */
    
    const XML_PATH_ADV_BC_SINGLE_ENABLE      =  'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_single_enable';
    const XML_PATH_ADV_BC_MULTIPLE_ENABLE    = 'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_multiple_enable';
    const XML_PATH_ADV_BC_SEARCH_ENABLE      = 'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_search_enable';
    const XML_PATH_ADV_BC_CUSTOMER_ENABLE    = 'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_customer_enable';
    const XML_PATH_ADV_BC_CONTACTUS_ENABLE   = 'advancedbreadcrumbs_tab/advancedbreadcrumbs_setting/advancedbreadcrumbs_contactus_enable';
    
    
    public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
    
	/*
	public function adv_breadcrumbs_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_ENABLE, $store);
	}
    */
    
	public function adv_breadcrumbs_single_category_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_SINGLE_ENABLE, $store);
	}
    
	public function adv_breadcrumbs_multi_category_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_MULTIPLE_ENABLE, $store);
	}
    
	public function adv_breadcrumbs_search_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_SEARCH_ENABLE, $store);
	}
    
	public function adv_breadcrumbs_customer_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_CUSTOMER_ENABLE, $store);
	}
    
	public function adv_breadcrumbs_contactus_enable() {
		return $this->conf(self::XML_PATH_ADV_BC_CONTACTUS_ENABLE, $store);
	}
    
    /*-     -*/
    /*-     -*/
    public function getHomeUrl()
    {
        return array(
            'label' => Mage::helper('advancedbreadcrumbs')->__('Home'),
            'title' => Mage::helper('advancedbreadcrumbs')->__('Home'),
            'link' => Mage::getUrl(),
        );
    }

    public function getMyAccountUrl()
    {
        return array(
            'label' => Mage::helper('advancedbreadcrumbs')->__('My Account'),
            'title' => Mage::helper('advancedbreadcrumbs')->__('My Account'),
            'link' => Mage::getUrl()."customer/account/",
        );
    }
    
    /*- Contact Us Page -*/
    public function getContactsUrl()
    {
        return array(
            'label' => Mage::helper('advancedbreadcrumbs')->__('Contact Us'),
            'title' => Mage::helper('advancedbreadcrumbs')->__('Contact Us'),
            /* 'link' => Mage::getUrl()."contacts/", */
        );
    }
    
    public function order_view() {
        /* $obj = new Mage_Sales_Block_Order_Info(); */
        /* $_order = $obj->getOrder(); */
        
        $_order = Mage::app()->getLayout()->createBlock('sales/order_info')->getOrder();
        
        /* $_order = Mage::registry('current_order'); */
        
        return array(
            'label' => $this->__('Order #%s', $_order->getRealOrderId(), $_order->getStatusLabel()),
            'title' => $this->__('Order #%s - %s', $_order->getRealOrderId(), $_order->getStatusLabel()),
        );
    }
    
}