<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/23 0023
 * Time: 下午 11:50
 */

namespace Admin\Controller;


use Think\Controller;

class SupplierController extends Controller
{

    public function index(){
        //创建模型对象
        $_model=D('Supplier');
        $rows=$_model->select();
        $this->assign('rows',$rows);
        $this->display();
    }

    public function add(){
        if(IS_POST){
            //创建模型
            $_model=D('Supplier');
            if($_model->create()===false){
              $this->error(get_error($_model));
            }

            if($_model->add()===false){
                $this->error(get_error($_model));
            }else{
                $this->success('添加成功',U('index'));
            }
        }else{
            $this->display();
        }
    }


    public function edit($id){
        $_model=D('Supplier');
        if(IS_POST){
            if($_model->create()===false){
                $this->error(get_error($_model));
            }
            if($_model->save()===false){
                $this->error(get_error($_model));

            }
            $this->success('修改成功',U('index'));
        }else{
            $row = $_model->find($id);
            $this->assign('row',$row);
            $this->display('edit');
        }

    }


    public function remove(){

    }
}