<?php
namespace Places\Model\Table;

use Cake\ORM\Table;
use Burzum\FileStorage\Model\Table\ImageStorageTable;

class PlaceScenesTable extends ImageStorageTable
{
    public function upload($parentId, $data) {
        $data['adapter'] = 'Local';
        $data['model'] = 'PlaceScene';
        $data['foreign_key'] = $parentId;
        $entity = $this->newEntity($data);
        return $this->save($entity);
    }
}
