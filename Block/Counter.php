<?php
namespace Triple888\HipHop\Block;
use Magento\Framework\View\Element\Template;
use Triple888\HipHop\Model\HipHopCounter;
class Counter extends Template {
    protected $hipHopCounter;
    public function __construct(Template\Context $context, HipHopCounter $hipHopCounter, array $data = []) {
        $this->hipHopCounter = $hipHopCounter;
        parent::__construct($context, $data);
    }
    public function getAddToCartCount($sku) {
        return $this->hipHopCounter->getCounter($sku);
    }
}