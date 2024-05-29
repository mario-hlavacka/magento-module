<?php

namespace Magento\GreetingModule\Block;

use Magento\Framework\View\Element\Template;
use Magento\GreetingModule\Helper\Data;

class Index extends Template
{

    protected $helperData;
    public function __construct(
        Template\Context $context,
        array $data,
        Data $helperData
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }
    
    public function getGreeting()
    {
        return $this->helperData->getGreetingConfig('general/greeting_text');
    }
}