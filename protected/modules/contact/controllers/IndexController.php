<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
        $form = new ContactForm;
        $post = Yii::app()->getRequest()->getPost('ContactForm');

        if ($post) {
            $form->attributes = $post;
            if ($form->validate()) {
                mail(
                    $this->module->to,
                    $form->subject,
                    $form->body,
                    "Reply-to: " . $form->from
                );
                Yii::app()->getUser()->setFlash(
                    'success',
                    'Thank you for your message.'
                );
                $this->refresh();
            }
        }

		$this->render('index', array('model' => $form));
	}
}

