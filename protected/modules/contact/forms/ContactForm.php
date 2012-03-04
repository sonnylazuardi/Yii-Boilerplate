<?php
class ContactForm extends CFormModel
{
    public $from;
    public $subject;
    public $body;

    public function rules()
    {
        return array(
            array('from, body', 'required'),
            array('from', 'email'),
            array('subject', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'from'    => 'Your email address',
            'subject' => 'Subject',
            'body'    => 'Your message',
        );
    }

}
