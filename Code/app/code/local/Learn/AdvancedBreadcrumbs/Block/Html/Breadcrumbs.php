<?php
class Learn_AdvancedBreadcrumbs_Block_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('advancedbreadcrumbs/html/breadcrumbs.phtml');
    }
    
}