<?php
namespace Triple888\HipHop\Model;
use Magento\Framework\App\ResourceConnection;
class HipHopCounter {
    protected $connection;
    public function __construct(ResourceConnection $resource) {
        $this->connection = $resource->getConnection();
    }
    public function incrementCounter($sku) {
        $tableName = $this->connection->getTableName('triple888_hiphop_count');
        $select = $this->connection->select()->from($tableName, 'add_to_cart_count')->where('sku = ?', $sku);
        $count = $this->connection->fetchOne($select);
        if ($count !== false) {
            $this->connection->update($tableName, ['add_to_cart_count' => $count + 1], ['sku = ?' => $sku]);
        } else {
            $this->connection->insert($tableName, ['sku' => $sku, 'add_to_cart_count' => 1]);
        }
    }
    public function getCounter($sku) {
        $tableName = $this->connection->getTableName('triple888_hiphop_count');
        $select = $this->connection->select()->from($tableName, 'add_to_cart_count')->where('sku = ?', $sku);
        return $this->connection->fetchOne($select);
    }
}