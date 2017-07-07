<?php
namespace app\admin\controller;

use think\Controller;

/**栏目管理
 * Class Category
 * @package app\admin\controller
 */
class Category extends Controller
{
    //首页
    public function category()
    {
        return $this->fetch();
    }
    //添加
    public function category_add()
    {
        return $this->fetch();
    }
}