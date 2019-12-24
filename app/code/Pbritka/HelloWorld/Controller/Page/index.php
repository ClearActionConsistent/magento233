<?php

namespace Pbritka\HelloWorld\Controller\Page;

class Index extends \Magento\Framework\App\Action\Action 
{
    protected $_pageFactory;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory,
    \Magento\Framework\App\Action\Context $context)
    {
        $this-> _pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $page = $this->_pageFactory->create();
        return $page;
    }
}