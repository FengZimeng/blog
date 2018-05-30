@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 系统基本信息
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="#"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->


<div class="result_wrap">
    <div class="result_title">
        <h3>系统基本信息</h3>
    </div>
    <div class="result_content">
        <ul>
                <li>
                    <label>操作系统</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>PHP运行方式</label><span>apache2handler</span>
                </li>
                <li>
                    <label>羽之翼设计-版本</label><span>v-0.1</span>
                </li>
                <li>
                    <label>上传附件限制</label><span>64M</span>
                </li>
                <li>
                    <label>北京时间</label><span><input type="text" id="showtime" value="" /></span>


                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}}</span>
                </li>
                <li>
                    <label>Host</label><span>{{$_SERVER['SERVER_NAME']}}</span>
                </li>
            </ul>
    </div>
</div>


<div class="result_wrap">
    <div class="result_title">
        <h3>使用帮助</h3>
    </div>
    <div class="result_content">
        <ul>
            <li>
                    <label>
                        点击加入交流群：
                    </label>
                    <span>
                        <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=4832f55dcecf261ffbead7a3f84c6fa1cebdbc882a4843e2709ded9cab5bc4af">
                            <img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="特色群" title="特色群">
                        </a>
                    </span>
            </li>
            <li>
                    <label>
                        官方交流网站：
                    </label>
                    <span>
                        <a href="http://www.hebtu.edu.cn/">
                            http://www.hebtu.edu.cn/
                        </a>
                    </span>
                </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
        function ymdhis(){
            var obj = new Date();
            var y = obj.getFullYear();
            var m = obj.getMonth()+1;
            var d = obj.getDate();
            var h = obj.getHours();
            var i = obj.getMinutes();
            var s = obj.getSeconds();
            if(m<10)m="0"+m;
            if(d<10)d="0"+d;
            if(h<10)h="0"+h;
            if(i<10)i="0"+i;
            if(s<10)s="0"+s;
            var time = y+'-'+m+'-'+d+' '+h+':'+i+':'+s;
            document.getElementById("showtime").value=time;
            setTimeout(ymdhis,1000);
        }
        ymdhis();
    </script>
<!--结果集列表组件 结束-->
@endsection
