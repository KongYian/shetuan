<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016-09-22
 * Time: 8:12
 */
namespace Home\Controller;
use Think\Controller;
use Think\Page;

class PageController{
    private $total;          //总得记录条数
    private $pagesize;       //单次查询的记录条数
    private $pagenum;        //总页数
    private $curpage;        //当前页码
    private $limit;          //显示的数字号码最大长度
    //初始化
    function __construct($total,$pagesize){
        $this->total = $total;
        $this->pagesize = $pagesize;
        $this->pagenum = ceil($this->total / $this->pagesize);
        $this->curpage = $this->setCurPage();
        $this->limit = 8;
    }
    //数字目录
    function pageList(){
        $pagelist = '';
        if($this->pagenum >= $this->limit){
            for($i = 1; $i<=$this->limit ; $i++){
                if($this->curpage == $i){
                    $pagelist .= "<span class='active'>$i</span>>";
                }else{
                    $pagelist .= "<a href=".$this->setUrl($i).'#page-3'.">$i</a>";
                }
            }
            $pagelist .= '...';
        }else{
            for($i = 1 ; $i<=$this->pagenum ; $i++){
                if($this->curpage == $i){
//                    $pagelist .= "<a href=".$this->setUrl($i).'#page-3'."><span class='active'>$i</span></a>";
                    $pagelist .= "<span class='active'>$i</span>";
                }else{
                    $pagelist .= "<a href=".$this->setUrl($i).'#page-3'.">$i</a>";
                }
            }
        }
        return $pagelist;
    }
    //获取当前页码
    function setCurPage(){
        $curpage = $_GET['page'];
        if($curpage){
            if($curpage>$this->pagenum) {
                return $this->pagenum;
            }
            else{
                return $curpage;
            }
        }else{
            return 1;
        }
    }
    //URL构造
    function setUrl($curpage = 1){
        $url =U('Home/index/index',array('page'=>$curpage));
        return $url;
    }
    //首页
    function first(){
        if($this->curpage == 1){
            return '<span style="display: none">首页</span>';
        }
        return "<a href=".$this->setUrl().'#page-3'.">首页</a>";
    }
    //上一页
    function pre(){
        if($this->curpage == 1){
            return '<span style="display: none">上一页</span>';
        }
        return "<a href=".$this->setUrl($this->curpage-1).'#page-3'.">上一页</a>";
    }
    //下一页
    function next(){
        if($this->curpage == $this->pagenum){
            return '<span style="display: none">下一页</span>';
        }
        return "<a href=".$this->setUrl($this->curpage+1).'#page-3'.">下一页</a>";
    }
    //后缀
    function setPage(){
        return '<b>'.'|共'.$this->total.'条记录|第'.$this->curpage.'页/共'.$this->pagenum.'页'.'</b>';
    }
    //输出分页信息
    function pageinfo(){
        $page = $this->first();    //首页
        $page .= $this->pre();      //上一页
        $page .= $this->pageList(); //数字目录
        $page .= $this->next();     //下一页
        $page .= $this->setPage();   //后缀
        return $page;
    }
}