<?php
/**
 * 将模型的错误信息转化成一个有序列表
 * @param \Think\Model $model
 * @return string
 */
function get_error(\Think\Model $model){
    $errors = $model->getError();
    if(!is_array($errors)){
        $errors=[$errors];
    }
    $html = '<ol>';
    foreach($errors as $error){
        $html .='<li>'.$error.'</li>';
    }

    $html .= '</ol>';
    return $html;
}

