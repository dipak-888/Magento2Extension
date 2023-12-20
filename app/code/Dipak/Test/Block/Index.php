<?php
namespace Dipak\Test\Block;

use Magento\Framework\View\Element\Template;
class Index extends  Template
{
    /**
     * @var string $_template
     */
    protected $_template = "test.phtml";

    // write your methods here...

    /**
     * @param Template\Context $context
     * @param array            $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
//        $this->setTemplate("Dipak_Test::index.phtml");
    }

    /**
     * @return string
     */
    public function testingData()
    {
       return 'testing called';
    }
}
