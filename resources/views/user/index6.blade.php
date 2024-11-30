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
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
    </head>
  
    <body>
        <div class="x-nav">
          <span class="layui-breadcrumb">
            <a href="">首页</a>
           
            <a>
              <cite>医护列表</cite></a>
          </span>
          <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" onclick="location.reload()" title="刷新">
            <i class="layui-icon layui-icon-refresh" style="line-height:30px"></i></a>
        </div>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                           
                         
                        </div>
                        <form method="post" action="{{url('user/deleteall')}}">
                        <div class="layui-card-header">
                            <input type="hidden" id="url" value="{{url('user/kadd')}}?t=3">
                          
                           
                            {{csrf_field()}}
                            
                           
                            <button class="layui-btn" id="adds" type="button"><i class="layui-icon"></i>添加医护</button>
                           
                            <script type="text/javascript">
                              var url=$('#url').val();
                              $('#adds').click(function(){
                                xadmin.open('添加医护',url,800,600)
                              })
                            
                            </script>
                         
                            </script>
                        </div>
                        <div class="layui-card-body ">
                            <table class="layui-table layui-form">
                              <thead>
                                <tr>
                                 
                               <th>ID</th>
                                  <th>医护姓名</th>
                                  <th>身份证号</th>
                                  <th>医护类型</th>
                                  <th>费用</th>
                                  
                                  <th>操作</th>
                              </thead>
                              <tbody>
                                @foreach($data as $v)
                                <tr>
                                  
                                  <td>{{$v->id}}</td>
                                  <td>{{$v->name}}</td>
                                  <td>{{$v->idcard}}</td>
                                  <td>{{$v->type}}</td>
                                  <td>{{$v->email}}</td>
                                 
                                  
                                  <td class="td-manage">
                                    <input type="hidden" id="ed{{$v->id}}" value="{{url('user/kedit')}}/{{$v->id}}">
                                    <input type="hidden" id="de{{$v->id}}" value="{{url('user/kdelete')}}/{{$v->id}}">
                                    <script type="text/javascript">
                                      var ed{{$v->id}}=$('#ed{{$v->id}}').val();
                                      var de{{$v->id}}=$('#de{{$v->id}}').val();
                                    </script>
                                    <a title="编辑"  onclick="xadmin.open('编辑',ed{{$v->id}})" href="javascript:;">
                                      <i class="layui-icon">&#xe642;</i>
                                    </a>
                                    <a title="删除"  href="{{url('user/kdelete')}}/{{$v->id}}">
                                      <i class="layui-icon">&#xe640;</i>
                                    </a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>

                        <div class="layui-card-body ">
                            <div class="page">
                                 {{ $data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form> 
    </body>
    <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        var form = layui.form;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/
      function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){

              if($(obj).attr('title')=='启用'){

                //发异步把用户状态进行更改
                $(obj).attr('title','停用')
                $(obj).find('i').html('&#xe62f;');

                $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('已停用');
                layer.msg('已停用!',{icon: 5,time:1000});

              }else{
                $(obj).attr('title','启用')
                $(obj).find('i').html('&#xe601;');

                $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('已启用');
                layer.msg('已启用!',{icon: 5,time:1000});
              }
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
              //发异步删除数据
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
  
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
</html>
