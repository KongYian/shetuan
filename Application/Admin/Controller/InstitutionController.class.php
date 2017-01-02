<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;
use Think\Controller;

class InstitutionController extends CommonController {
    //社团制度管理

    /**
     * Description:显示社团所有的制度
     */
    public function departinstitution(){
        $departid = session('adminDepartId');
        if($departid){
            $map = ['departId'=>$departid];
            $m = D('institutionInfo');
            $res = $m->where($map)->select();
            $this->assign('res',$res);
            $this->display();
        }else{
            $this->error('登录超时，请重新登录','index/login',3);
        }
    }

    /**
     * Description:新建制度和制度的ajax提交的判断
     */
    public function newinstitution(){
        if(IS_AJAX){
            $institutiontitle =  I('post.institutiontitle');
            $institutionContent =  I('post.institutioncontent');
            $institutionTime =  date('Y-m-d H:i:s');
            $data = [
                'departId' => session('adminDepartId'),
                'institutionTitle' => $institutiontitle,
                'institutionTime' => $institutionTime,
                'institutionContent' =>$institutionContent
            ];
            $m = D('institutionInfo');
            $res = $m->add($data);
            if ($res) {
                $out = [
                    'info' => '创建成功',
                ];
            } else {
                $out = [
                    'info' => '创建成功',
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $this->display();
        }
    }

    /**
     * Description:制度的修改
     * @param int $id
     */
    public function institutionmodify($id = 0){
        if(IS_AJAX){
            $institutionid =  I('post.institutionid');
            $institutiontitle =  I('post.institutiontitle');
            $institutionContent =  I('post.institutioncontent');
            $institutionTime =  date('Y-m-d H:i:s');
            $data = [
                'institutionTitle' => $institutiontitle,
                'institutionTime' => $institutionTime,
                'institutionContent' =>$institutionContent
            ];
            $map  = ['institutionId'=>$institutionid];
            $m = D('institutionInfo');
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
            $m = D('institutionInfo');
            $map = ['institutionId'=>$id];
            $res = $m->where($map)->find();
            $this->assign('res',$res);
            $this->display();
        }
    }

    /**
     * Description:制度的删除
     */
    public function institutiondel(){
        if(Is_AJAX){
            $id = I('post.institutionid');
            $map = ['institutionId'=>$id];
            $m = D('institutionInfo');
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