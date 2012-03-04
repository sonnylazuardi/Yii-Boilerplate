<?php

class ContactModule extends CWebModule
{
    // Email address to send the contact emails
    public $to;

	public function init()
	{
		$this->setImport(array(
			'contact.forms.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
        if (parent::beforeControllerAction($controller, $action)) {
			return true;
        }
        return false;
	}
}
