<?php

namespace Demo\Web\Models;

/**
 * Phalcon Model: Deal
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Web\Models
 * @version $Rev:2015-04-23 23:42:43$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class Deal extends \PhalconPlus\Base\Model
{

    /**
     * @var integer
     * @table deal
     */
    public $id = null;

    /**
     * @var string
     * @table deal
     */
    public $name = '';

    /**
     * @var integer
     * @table deal
     */
    public $amount = null;

    /**
     * @var integer
     * @table deal
     */
    public $amount_left = null;

    /**
     * @var integer
     * @table deal
     */
    public $l_profit = null;

    /**
     * @var integer
     * @table deal
     */
    public $h_profit = null;

    /**
     * @var integer
     * @table deal
     */
    public $profit_type = null;

    /**
     * @var integer
     * @table deal
     */
    public $period = null;

    /**
     * @var integer
     * @table deal
     */
    public $period_unit = null;

    /**
     * @var integer
     * @table deal
     */
    public $least_purchase = null;

    /**
     * @var integer
     * @table deal
     */
    public $assurance_type = null;

    /**
     * @var integer
     * @table deal
     */
    public $assurance_company_id = null;

    /**
     * @var integer
     * @table deal
     */
    public $borrower_id = null;

    /**
     * @var integer
     * @table deal
     */
    public $status = null;

    /**
     * @var integer
     * @table deal
     */
    public $is_delete = null;

    /**
     * @var date
     * @table deal
     */
    public $ctime = '0000-00-00 00:00:00';

    /**
     * @var date
     * @table deal
     */
    public $mtime = '0000-00-00 00:00:00';

    public function initialize()
    {
        parent::initialize();
        $this->setConnectionService("dbDemo");
    }

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = '';
        $this->amount = NULL;
        $this->amountLeft = NULL;
        $this->lProfit = NULL;
        $this->hProfit = NULL;
        $this->profitType = NULL;
        $this->period = NULL;
        $this->periodUnit = NULL;
        $this->leastPurchase = NULL;
        $this->assuranceType = NULL;
        $this->assuranceCompanyId = NULL;
        $this->borrowerId = NULL;
        $this->status = NULL;
        $this->isDelete = NULL;
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
            'amount' => 'amount', 
            'amount_left' => 'amountLeft', 
            'l_profit' => 'lProfit', 
            'h_profit' => 'hProfit', 
            'profit_type' => 'profitType', 
            'period' => 'period', 
            'period_unit' => 'periodUnit', 
            'least_purchase' => 'leastPurchase', 
            'assurance_type' => 'assuranceType', 
            'assurance_company_id' => 'assuranceCompanyId', 
            'borrower_id' => 'borrowerId', 
            'status' => 'status', 
            'is_delete' => 'isDelete', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'deal';
    }


}

