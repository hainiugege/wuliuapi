<?php
// +----------------------------------------------------------------------
// | ThinkPHP 6 api
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.haiousudi.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 ;)
// +----------------------------------------------------------------------
// | Author: hainiu <ceopuls@qq.com>
// +----------------------------------------------------------------------
namespace think\hainiugege;
use think\facade\Db;
use think\facade\Config;
use think\facade\Session;
use think\facade\Request;

class haiousudi
{
    /**
     * var object 对象实例
     */
    protected static $instance;
    //默认配置
    protected $config = [
        'url' => 'https://www.haiousudi.com/hwc_api/', // API URL
    ];
    /**
     * 类架构函数
     * Auth constructor.
     */
    public function __construct()
    {
        //可设置配置项 auth, 此配置项为数组。
        if ($api = Config::get('api')) {
            $this->config = array_merge($this->config, $api);
        }
    }
    /**
     * 初始化
     * access public
     * @param array $options 参数
     * return \think\Request
     */
    public static function instance($options = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new static($options);
        }
        return self::$instance;
    }
    public function stock($name, $token, $warehouseId, $nameId)
    {
        
        return 1;
    }
}
