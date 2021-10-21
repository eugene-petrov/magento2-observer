<?php

declare(strict_types=1);

namespace Snippet\Observer\Observer;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class RedirectToContact implements ObserverInterface
{
    /**
     * @var RedirectInterface
     */
    private $redirect;

    /**
     * @var ActionFlag
     */
    private $actionFlag;

    /**
     * @param RedirectInterface $redirect
     * @param ActionFlag $actionFlag
     */
    public function __construct(RedirectInterface $redirect, ActionFlag $actionFlag)
    {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() === 'contact') {
            return;
        }

        $controller = $observer->getControllerAction();
        $this->actionFlag->set('', ActionInterface::FLAG_NO_DISPATCH, true);
        $this->redirect->redirect($controller->getResponse(), 'contact');
    }
}
