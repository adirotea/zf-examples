<?php

class Poll_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this->getResponse()->appendBody('I come from Poll');
    }

	public function createAction()
	{
		$this->view->form = new Poll_Form_Create();
	}
}

