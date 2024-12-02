<!DOCTYPE html>
<html class="x-admin-sm">
    
    <head>
        <meta charset="UTF-8">
        <title>admin</title>
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
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form" action="{{url('user/doadk')}}" method="post" enctype="multipart/form-data">
                  <div class="layui-form-item">
                      <label for="username" class="layui-form-label">
                          <span class="x-red">*</span>姓名名
                      </label>
                      {{csrf_field()}}
                      <div class="layui-input-inline">
                          <input type="text" id="username" name="name" required="" lay-verify="required"
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                         
                      </div>
                  </div>
                 
                  <div class="layui-form-item">
                      <label for="L_email" class="layui-form-label">
                          <span class="x-red">*</span>身份证号
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="password" name="idcard" required="" lay-verify="email"
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>
                      </div>
                  </div>
                   <div class="layui-form-item">
                      <label for="L_email" class="layui-form-label">
                          <span class="x-red">*</span>客户类型
                      </label>
                      <div class="layui-input-inline">
                      <select name="type" id="" class="layui-input" style="display:inline">
                        <option value="一级护理">一级护理</option>
                        <option value="二级护理">二级护理</option>
                          <option value="三级护理">三级护理</option>
                              <option value="四级护理">四级护理</option>
                      </select>
                          
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>
                      </div>
                  </div>
                   <div class="layui-form-item">
                      <label for="L_email" class="layui-form-label">
                          <span class="x-red">*</span>费用
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="username" name="email" required="" lay-verify="email"
                          autocomplete="off" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red">*</span>
                      </div>
                  </div>
                   
                 
                
                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                      </label>
                      <button  class="layui-btn" lay-filter="add" lay-submit="">
                          add
                      </button>
                  </div>
              </form>
            </div>
        </div>

    </body>

</html>
