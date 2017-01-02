<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/1/2
 * Time: 上午9:11
 * Description:
 */

namespace Admin\Controller;
use Think\Controller;


class GoodsController extends Controller{
    /**
     * Description:显示社团所有的物品信息
     */
    public function departgoods(){
        $departid = session('adminDepartId');
        if($departid){
            $map = ['departId'=>$departid];
            $m = D('goodsInfo');
            $res = $m->where($map)->select();
            $this->assign('res',$res);
            $this->display();
        }else{
            $this->error('登录超时，请重新登录','index/login',3);
        }
    }

    /**
     * Description:新建物品信息和物品信息的ajax提交的判断
     */
    public function newgoods(){
        if(IS_AJAX){
            $goodsname =  I('post.goodsname');
            $goodsnum =  I('post.goodsnum');
            $time = date("Y-d-d H:i:s");
            $data = [
                'departId' => session('adminDepartId'),
                'goodsName' => $goodsname,
                'goodsNum' => $goodsnum,
                'goodsTime' => $time,
            ];
            $m = D('goodsInfo');
            $res = $m->add($data);
            if ($res) {
                $out = [
                    'info' => '创建成功',
                ];
            } else {
                $out = [
                    'info' => '创建',
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $this->display();
        }
    }

    /**
     * Description:物品信息的修改
     * @param int $id
     */
    public function goodsmodify($id = 0){
        if(IS_AJAX){
            $goodsname =  I('post.goodsname');
            $goodsnum =  I('post.goodsnum');
            $goodsid =  I('post.goodsid');
            $data = [
                'goodsName' => $goodsname,
                'goodsNum' =>$goodsnum
            ];
            $map  = ['goodsId'=>$goodsid];
            $m = D('goodsInfo');
            $res = $m->where($map)->save($data);
            if ($res) {
                $out = [
                    'info' => '修改成功',
                    'status'=>1
                ];
            } else {
                $out = [
                    'info' => '修改成功',
                    'status'=>0
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $m = D('goodsInfo');
            $map = ['goodsId'=>$id];
            $res = $m->where($map)->find();
            $this->assign('res',$res);
            $this->display();
        }
    }

    /**
     * Description:物品信息的删除
     */
    public function goodsdel(){
        if(Is_AJAX){
            $id = I('post.goodsid');
            $map = ['goodsId'=>$id];
            $m = D('goodsInfo');
            $res = $m->where($map)->delete();
            if($res){
                $out = [
                    'status'=>1,
                    'info'=>'删除成功'
                ];
            }else{
                $out = [
                    'status'=>0,
                    'info'=>'删除失败'
                ];
            }
            $this->ajaxReturn($out);
        }
    }
}