@extends('admin.index')
@section("zhuti")

<div id="urHere">DouPHP 管理中心<b>></b><strong>文章分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="add_article_category.html?rec=add" class="actionBtn add">添加分类</a>文章分类</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
        <th width="120" align="left">分类名称</th>
      <th align="left">别名</th>
        <th align="left">简单描述</th>
       <th width="60" align="center">排序</th>
        <th width="80" align="center">操作</th>
      </tr>
            <tr>
        <td align="left"> <a href="article.php?cat_id=1">公司动态</a></td>
        <td>company</td>
        <td>公司的最新新闻在此发布</td>
        <td align="center">10</td>
        <td align="center"><a href="article_category.php?rec=edit&cat_id=1">编辑</a> | <a href="article_category.php?rec=del&cat_id=1">删除</a></td>
      </tr>
            <tr>
        <td align="left"> <a href="article.php?cat_id=2">行业新闻</a></td>
        <td>industry</td>
        <td>最新行业资讯</td>
        <td align="center">20</td>
        <td align="center"><a href="article_category.php?rec=edit&cat_id=2">编辑</a> | <a href="article_category.php?rec=del&cat_id=2">删除</a></td>
      </tr>
          </table>
           </div>
 </div>
 @endsection