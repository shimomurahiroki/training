<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ProductsComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ProductsComponent Test Case
 */
class ProductsComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ProductsComponent
     */
    protected $Products;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Products = new ProductsComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Products);

        parent::tearDown();
    }
}
