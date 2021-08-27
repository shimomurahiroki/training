<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ModelAwareTrait;
/**
 * Products component
 */
class ProductsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    use ModelAwareTrait;
    public function loadProducts(){
        $this->loadModel('Products');
        $product = $this->Products->find()->toArray();
        return $product;
    }
}
