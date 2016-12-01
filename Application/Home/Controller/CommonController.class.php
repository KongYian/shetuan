<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午5:05
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
    public function _initialize(){
        if(!isset($_SESSION['userId'])){
            $this->error('对不起,您还没有登录!请先登录再进行操作');
//            $this->redirect('对不起,您还没有登录!请先登录再进行操作',U('Index/index'),2);
        }
    }
}