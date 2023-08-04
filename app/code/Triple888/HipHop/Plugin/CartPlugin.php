<?php
namespace Triple888\HipHop\Plugin;
use Magento\Checkout\Model\Cart;
use Triple888\HipHop\Model\HipHopCounter;
class CartPlugin {
    protected $hipHopCounter;
    public function __construct(HipHopCounter $hipHopCounter) {
        $this->hipHopCounter = $hipHopCounter;
    }
    public function aroundAddProduct(Cart $subject, callable $proceed, $productInfo, $requestInfo = null) {
        $result = $proceed($productInfo, $requestInfo);
        if ($productInfo->getCustomAttribute('hip_hop') && $productInfo->getCustomAttribute('hip_hop')->getValue() == 1) {
            $this->hipHopCounter->incrementCounter($productInfo->getSku());
        }
        return $result;
    }
}