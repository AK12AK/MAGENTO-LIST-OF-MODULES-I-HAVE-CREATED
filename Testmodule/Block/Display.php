<?php
namespace Akilesh\Testmodule\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $helperData;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		// \Akilesh\Testmodule\Helper\Data $helperData
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	)
	{ 
		$this->scopeConfig = $scopeConfig;
	 parent::__construct($context);
	}
	// public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	// {
	// parent::__construct($context);
	// }
	public function sayHello()
	{
		$value =  $this->scopeConfig->getValue('helloworld/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

		if($value == 1)
		{
			echo $this->scopeConfig->getValue('helloworld/general/display_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
 	
		}
		else{
			return "";
		}
		
	}
}