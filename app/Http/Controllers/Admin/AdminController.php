<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
// 首页
    public function getIndex()
    {
        //
        return view('admin.index');
    }

// 系统设置
    public function getSystem(){
        return view('admin.system');
    }

// 自定义导航栏
    public function getNav(){
        return view('admin.nav');
    }

    // 首页幻灯广告

    public function getShow(){
        return view('admin.show');
    }


    // 单页面管理

    public function getPage(){
        return view('admin.page');
    }


    // 商品分类
    public function getProductcategory(){
        return view('admin.productcategory');
    }


    // 商品列表
    public function getProduct(){
        return view('admin.product');
    }


    // 文章分类
    public function getArticlecategory(){
        return view('admin.article_category');
    }


    // 文章列表
    public function getArticle(){
        return view('admin.article');
    }

    // 数据备份
    public function getBackup(){
        return view('admin.backup');
    }

    // 手机版
    public function getMobile(){
        return view('admin.mobile');
    }


    // 设置模板
    public function getTheme(){
        return view('admin.theme');
    }


    // 网站管理员
    public function getManager(){
        return view('admin.manager');
    }


    // 操作记录
    public function getManagerlog(){
        return view('admin.manager_log');
    }



 
}
