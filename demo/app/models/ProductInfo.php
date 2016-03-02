<?php

namespace Demo\Web\Models;

/**
 * Phalcon Model: ProductInfo
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Web\Models
 * @version $Rev:2016-02-27 19:22:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class ProductInfo extends \PhalconPlus\Base\Model
{

    /**
     * @var unknown
     * @table product_info
     */
    public $id = null;

    /**
     * @var string
     * @table product_info
     */
    public $name = '';

    /**
     * @var unknown
     * @table product_info
     */
    public $price = null;

    /**
     * @var unknown
     * @table product_info
     */
    public $seller_id = null;

    /**
     * @var string
     * @table product_info
     */
    public $slogan = null;

    /**
     * @var string
     * @table product_info
     */
    public $intro = null;

    /**
     * @var integer
     * @table product_info
     */
    public $cate_id = null;

    /**
     * @var unknown
     * @table product_info
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var unknown
     * @table product_info
     */
    public $mtime = '0000-00-00 00:00:00';

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = '';
        $this->price = NULL;
        $this->sellerId = NULL;
        $this->slogan = NULL;
        $this->intro = NULL;
        $this->cateId = NULL;
        $this->ctime = '0000-00-00 00:00:00';
        $this->mtime = '0000-00-00 00:00:00';
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'price' => 'price', 
            'seller_id' => 'sellerId', 
            'slogan' => 'slogan', 
            'intro' => 'intro', 
            'cate_id' => 'cateId', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    public function initialize()
    {
        parent::initialize();
        $this->setConnectionService("dbDemo");
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'product_info';
    }


}

