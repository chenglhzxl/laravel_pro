<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') - chenglh</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="icon" href="data:image/vnd.microsoft.icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA////AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERERERERERERERERERERERERERERERERAAAAAAEREREAAAAAAREREQABERERERERAAEREREREREAAAAAEREREQAAAAARERERAAEREREREREAAREREREREQAAAAABERERAAAAAAEREREREREREREREREREREREREREREREREREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" type="image/x-icon">
    <link rel="stylesheet" href="/js/layui/css/layui.css">
    <link rel="stylesheet" href="/css/lte/AdminLTE.css">
    <link rel="stylesheet" href="/css/kindeditor/themes/default/default.css"/>
    <link rel="stylesheet" href="/css/kindeditor/plugins/code/prettify.css"/>
    <link rel="stylesheet" href="/css/chenglh.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    @yield('css')
</head>
<body>
@include('components.header')

<div class="content">
    @yield('content')
</div>

@include('components.footer')

<script type="text/javascript" src="/js/jQuery-2.2.0.min.js"></script>
<script type="text/javascript" src="/js/layui/css/modules/layer/layer.js"></script>
<script charset="utf-8" src="/css/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/css/kindeditor/lang/zh_CN.js"></script>
<script src="/js/chenglh.js"></script>
<script src="/js/login.js"></script>

@yield('script')
</body>
</html>
