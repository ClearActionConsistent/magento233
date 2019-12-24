<?php

namespace Pbritka\HelloWorld\Controller\Page;

class Index extends \Magento\Framework\App\Action\Action 
{
    public function execute()
    {
        echo 'Hello World!';
    }
}