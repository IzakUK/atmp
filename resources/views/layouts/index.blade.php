<!doctype html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>后台登录</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="{{asset('index/css/xadmin.css')}}">
        <link rel="stylesheet" href="{{asset('index/css/login.css')}}">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="{{asset('index/lib/layui/layui.js')}}" charset="utf-8"></script>
        <script type="text/javascript" src="{{asset('index/js/xadmin.js')}}"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
       
        </script>
    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="./index.html">养老院管理系统</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>
            
            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">个人信息</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('个人信息','{{url('user/editu')}}')">修改密码</a></dd>
                          
                        <dd>
                            <a href="{{url('logout')}}">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="{{url('')}}">前台首页</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="工作人员管理">&#xe6b8;</i>
                            <cite>工作人员管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('工作人员管理','{{url('user/index5')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>工作人员管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="用户管理">&#xe6b8;</i>
                            <cite>用户管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('用户管理','{{url('user/indexu')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>用户管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="活动管理">&#xe6b8;</i>
                            <cite>活动管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('资讯管理','{{url('user/index')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>活动管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="费用管理">&#xe6b8;</i>
                            <cite>费用管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('费用管理','{{url('user/sf')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>费用管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                   <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="床位管理">&#xe6b8;</i>
                            <cite>床位管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('床位管理','{{url('user/index2')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>床位管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                 
                   <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="订单管理">&#xe6b8;</i>
                            <cite>订单管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('订单管理','{{url('user/index3')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>订单管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                 
                  <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="客户管理">&#xe6b8;</i>
                            <cite>医护管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a onclick="xadmin.add_tab('医护管理','{{url('user/index6')}}')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>医护管理</cite></a>
                            </li>
                           
                           
                        </ul>
                    </li>
                </ul>

            </div>
               <li style="position: absolute;bottom: 20px">
                       
                   </li>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <i class="layui-icon">&#xe68e;</i>我的桌面</li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                        <dd data-type="this">关闭当前</dd>
                        <dd data-type="other">关闭其它</dd>
                        <dd data-type="all">关闭全部</dd></dl>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        @if($u->type==1)
                         <iframe src="{{url('user/index')}}" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                        @else
                         <iframe src="{{url('user/index')}}" frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                        @endif
                       
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
        <!-- 右侧主体结束 -->
        <!-- 中部结束 -->
        <script>//百度统计可去掉
            var _hmt = _hmt || []; (function() {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();</script>
    </body>

</html>