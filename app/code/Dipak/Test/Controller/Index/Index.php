<?php

namespace Dipak\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * @param Context     $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Index Action
     *
     * @return Page
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set('custom title');

//  1      echo $this->_view->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('tes')->toHtml();

//   2     $block=$resultPage->getLayout()->createBlock("Dipak\\Test\\Block\\Index")->toHtml();
//   2     return $this->getResponse()->setBody($block);


//        $this->_view->getLayout();
//        $this->_view->loadLayout();

        return $resultPage;
    }
}
