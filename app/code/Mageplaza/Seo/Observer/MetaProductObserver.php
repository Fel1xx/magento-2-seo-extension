<?php

namespace Mageplaza\Seo\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Mageplaza\Seo\Helper\Data as SeoHelper;
use Magento\Framework\Registry;
use Mageplaza\Seo\Model\Source\Robots;
class MetaProductObserver implements ObserverInterface
{
    protected $helper;
    protected $registry;
    public function __construct(
        SeoHelper $helper,
        Registry $registry
    )
    {
        $this->helper = $helper;
        $this->registry = $registry;
    }

    public function execute(Observer $observer)
    {
        $form=$observer->getEvent()->getForm();
        $layout=$observer->getEvent()->getLayout();
        return $this;
    }


}