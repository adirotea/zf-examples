<?php

class Poll_Form_Create extends Zend_Form
{
    public function init()
    {
        $this->setElementsBelongTo('poll');
        $this->addElement('text', 'name', array(
            'label'    => 'Name: ',
            'required' => true,
        ));
        $this->addElement('submit', 'submit', array(
            'label'    => 'Save',
            'ignore'   => 'true',
            'required' => 'false',
        ));
        
        $this->setDecorators(array(
        	'PrepareElements',        
            array('ViewScript', array('viewScript' => 'form/create.phtml'))
        ));  
        
        $this->getDecorator('ViewScript')->setOption('form', $this);        
    }
}
