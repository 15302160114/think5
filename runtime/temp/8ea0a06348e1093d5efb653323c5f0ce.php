<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\xampp\htdocs\think5\public/../application/admin\view\adminhotai\zhanghao.html";i:1529741850;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>账号设置</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/think5/public/static/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/think5/public/static/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="http://cdn.bootcss.com/echarts/3.3.2/echarts.min.js"></script>
    <link rel="stylesheet" href="/think5/public/static/css/amazeui.min.css" />
    <link rel="stylesheet" href="/think5/public/static/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/think5/public/static/css/app.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="/think5/public/static/css/bootstrap.min.css">

</head>

<body data-type="widgets">
    <script src="/think5/public/static/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/think5/public/static/images/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <?php if($user): ?><?php echo $user->username; endif; ?> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo url('login/logout'); ?>">
                                <span class="am-icon-sign-out"></span>退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/think5/public/admin_uploads/<?php echo $admin['id']; ?>/<?php echo $admin['logo']; ?>" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?php if($user): ?><?php echo $user->username; endif; ?>
          </span>
                    <a href="zhanghao.html" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-link">
                    <a href="index.html">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="article.html">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 用户文章
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="fenlei.html">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 添加文章分类

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="user.html">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 用户列表
                    </a>
                </li>
                
            </ul>
        </div>


        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">账号设置</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                    <form class="form-horizontal" method="post" name="form1" action="<?php echo url('adminhotai/update'); ?>">
                                      <div class="form-group">
                                          <input type="hidden" name="id"placeholder="id" value="<?php echo $admin['id']; ?>">
                                        
                                      </div>

                                      <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-12 am-form-label  am-text-left">LOGO <span class="tpl-form-line-small-title">Images</span></label>

                                        <div id="uploader-demo" class="am-u-sm-12 am-margin-top-xs">
                                            <div class="am-form-group am-form-file">
                                                <div id="fileList" class="tpl-form-file-img uploader-list">
                                                    <div id="old" class="file-item thumbnail">
                                                        <img src="/think5/public/admin_uploads/<?php echo $admin['id']; ?>/<?php echo $admin['logo']; ?>" class="tpl-table-line-img" width="200px">
                                                        <div style="text-align: center;" class="info"><?php echo $admin['logo']; ?></div>
                                                    </div>
                                                </div>
                                                
                                                <button id="filePicker" type="button" class="am-btn am-btn-danger am-btn-sm ">
                                                <i class="am-icon-cloud-upload"></i> 更换logo</button>
                                            </div>

                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-7">
                                          <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" value="<?php echo $admin['username']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">realname</label>
                                        <div class="col-sm-7">
                                          <input type="text" name="realname" class="form-control" id="title" placeholder="realname" value="<?php echo $admin['realname']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-7">
                                          <input type="password" name="password" class="form-control" id="title" placeholder="password" value="<?php echo $admin['password']; ?>">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-default">更新</button>
                                        </div>
                                      </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
    <script src="/think5/public/static/js/amazeui.datatables.min.js"></script>
    <script src="/think5/public/static/js/dataTables.responsive.min.js"></script>
    <script src="/think5/public/static/js/app.js"></script>
    <script type="text/javascript" src="/think5/public/static/webuploader/webuploader.js"></script>
</body>
<script type="text/javascript">
           //var $list=$("#fileList");   //这几个初始化全局的百度文档上没说明，好蛋疼
           var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
           var thumbnailHeight = 100;  
           var uploader = WebUploader.create({
            // 选完文件后，是否自动上传。
           auto: true,
            // swf文件路径
           swf: '/think5/public/static/webuploader/uploader.swf', //加载swf文件，路径一定要对
            // 文件接收服务端。
            server: '<?php echo url("admin/adminhotai/upload"); ?>',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            // 只允许选择图片文件。
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/'
            }
        });
      //上传完成事件监听
        
        uploader.on( 'fileQueued', function(file) {
            // var d = new Date();
            // var curr_date = d.getDate();
            // var curr_month = d.getMonth() + 1; 
            // var curr_year = d.getFullYear();
            // String(curr_month).length < 2 ? (curr_month = "0" + curr_month): curr_month;
            // String(curr_date).length < 2 ? (curr_date = "0" + curr_date): curr_date;
            // var yyyyMMdd = curr_year + "" + curr_month +""+ curr_date;
            var $li = $(
                    '<div id="old" class="file-item thumbnail">' +
                        '<img>' +
                        '<div style="text-align: center;" class="info">' + file.name + '</div>' +
                    '</div>'+
                    '<input type="text" style="display:none" name="logo" value="'+ file.name +'">'
                    ),
                $img = $li.find('img');
            // $list为容器jQuery实例
                    $('#old').remove();
                   $("#fileList").append( $li );
            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
            uploader.makeThumb( file, function( error, src ) {
                if ( error ) {
                    $img.replaceWith('<span>不能预览</span>');
                    return;
                }
                $img.attr( 'src', src );
            }, thumbnailWidth, thumbnailHeight );
        });
</script>
</html>