<?php
namespace app\base;
class BaseController extends Controller{
    public function actionCreate(){
        return $this->render('create');
    }
}