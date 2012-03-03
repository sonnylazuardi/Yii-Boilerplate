<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionContact()
    {
        $this->render('contact');
    }

    public function actions()
    {
        return array(
            'page' => 'CViewAction'
        );
    }
}
