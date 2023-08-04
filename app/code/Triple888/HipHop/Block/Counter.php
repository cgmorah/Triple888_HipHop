<?php
namespace Triple888\HipHop\Block;

use Magento\Framework\View\Element\Template;
use Triple888\HipHop\Model\HipHopCounter;
use Magento\Framework\Registry;

class Counter extends Template
{
    protected $hipHopCounter;
    protected $registry;

    public function __construct(
        Template\Context $context,
        HipHopCounter $hipHopCounter,
        Registry $registry,
        array $data = []
    ) {
        $this->hipHopCounter = $hipHopCounter;
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    public function getAddToCartCount($sku)
    {
        return $this->hipHopCounter->getCounter($sku);
    }

    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }
}
