<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Knolodeg extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'knolodeg';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'integer';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';

    // 追加属性
    protected $append = [
        'refreshtime_text',
        'status_text',
        'time_text'
    ];
    

    public function getTimeTextAttr($value, $data)
    {
        $time = date("Y-m-d", $data['createtime']);
        $res = explode('-', $time);

        $times = $res[0].'/'.$res[1].'/'.$res[2];

        return $times;
    }
    
    public function getStatusList()
    {
        return ['normal' => __('Normal'), 'hidden' => __('Hidden')];
    }


    public function getRefreshtimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['refreshtime']) ? $data['refreshtime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    protected function setRefreshtimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
