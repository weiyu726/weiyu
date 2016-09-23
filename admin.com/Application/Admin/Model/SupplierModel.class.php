<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/24 0024
 * Time: 上午 2:03
 */
namespace Admin\Model;
use Think\Model;

/**
 * 验证供货商名不能重复
 * Class SupplierModel
 * @package Admin\Model
 */
class SupplierModel extends Model{
    protected $patchValidate = true;//开启批量验证
    /**
     * name 必填 不能为空
     * status 状态为0或者1
     * sort 必须为数字
     */
    protected $_validate = [
        ['name','require','供货商名称不能为空'],
        ['name','','供货商已存在',self::EXISTS_VALIDATE,'unique'],
        ['status','0,1','供货商状态不合法',self::EXISTS_VALIDATE,'in'],
        ['sort','number','排序必须为数字'],

    ];

}