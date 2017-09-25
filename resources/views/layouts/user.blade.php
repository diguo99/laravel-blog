@extends('layouts.main')
@section('keywords', config('home.site.keywords'))
@section('description', config('home.site.description'))
@section('main')
<script src="{{ asset('/assets/layui/layui.js') }}"></script>
    <div class="user">
        <div class="user-left">
        	<div class="user-card">
        		<div class="name">{{ $user->user_name }}</div>
        		<div class="avatar">
        			<img src="{{ $user->avatar }}">
        		</div>
        		<hr/>
        		<div class="intro">
        			<div><span class="layui-badge-dot layui-bg-gray"></span> 第 {{ $user->id }} 位会员</div>
        			<div><span class="layui-badge-dot layui-bg-gray"></span> 注册at  {{ $user->created_at }}</div>
         			<div><span class="layui-badge-dot layui-bg-gray"></span> 最近登录    {{ $user->updated_at }}</div>
        		</div>
        		<a href="{{ url('/user/edit') }}">
        		<span class="layui-btn layui-btn-primary"><i class="fa fa-pencil-square-o"></i> 编 辑 资 料</span>
        		</a>
        	</div>
        	<div class="user-relate">
        	    <a href="{{ route('user.share',[ $id ]) }}">
        			<span class="layui-btn layui-btn-primary"><i class="fa fa-pencil"></i> Ta 发布的文章</span>
        		</a>
        		<a href="{{ route('user.comment',[ $id ]) }}">
        			<span class="layui-btn layui-btn-primary"><i class="fa fa-comments-o"></i> Ta 发表的评论</span>
        		</a>
        		<a href="{{ route('user.attend',[ $id ]) }}">
        			<span class="layui-btn layui-btn-primary"><i class="fa fa-eye"></i> Ta 关注的用户</span>
        		</a>
        		<a href="{{ route('user.like',[ $id ]) }}">
        			<span class="layui-btn layui-btn-primary"><i class="fa fa-thumbs-up"></i> Ta 赞过的文章</span>
        		</a>
        		<a href="{{ route('user.stores',[ $id ]) }}">
        			<span class="layui-btn layui-btn-primary"><i class="fa fa-plus-square-o"></i> Ta 收藏的文章</span>
        		</a>
        	</div>
        </div>
        <div class="user-right">
        	@yield('content')
        </div>
        <div style="clear:both;"></div>
    </div>

<script>
//注意：导航 依赖 element 模块，否则无法进行功能性操作
layui.use(['element'], function(){
  var element = layui.element;
});
</script>
@endsection