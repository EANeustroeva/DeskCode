<!DOCTYPE html> <?php $ver = 2; ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php \fw\core\base\View::getMeta() ?>
    <link rel="stylesheet" href="/adminlte3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte3/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css?q=<?= $ver ?>">
</head>
<body class="hold-transition layout-fixed sidebar-collapse">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Панель</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/profile" class="nav-link">Профиль</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/page" class="nav-link">Проект</a>
            </li>
        </ul>

        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <?php /*
 <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="/adminlte3/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="/adminlte3/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="media">
                            <img src="/adminlte3/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                            class="fas fa-th-large"></i></a>
            </li>
        </ul>
 */?>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i></a>
        </li>
        </ul>

    </nav>
    <?php
    $menu = [
        'profile' => 'Профиль',
        'page' => 'Страница проекта',
    ];
    ?>
    <aside class="main-sidebar sidebar-light-success">
        <a href="/" class="brand-link navbar-success">
            <div class="brand-text font-weight-light">LOGO</div>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item"><a href="/" class="nav-link <?= 'index' == $route['action'] ? 'active' : '' ?>"><i class="nav-icon fas fa-tachometer-alt"></i><p>Панель</p></a></li>
                    <?php foreach($menu as $url=>$item):?>
                    <li class="nav-item"><a href="/<?= $url ?>" class="nav-link <?= $url == $route['action'] ? 'active' : '' ?>"><i class="nav-icon far fa-circle nav-icon"></i><p><?= $item?></p></a></li>
                    <?php endforeach; ?>
                   <!-- <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Starter Pages
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Active Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inactive Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Simple Link
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>-->
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <!--<div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="content">
            <div class="container">
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?=$_SESSION['error']; unset($_SESSION['error'])?>
                    </div>
                <?php endif; ?>

                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['success']; unset($_SESSION['success'])?>
                    </div>
                <?php endif; ?>

                <?= $content ?>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>


    <div class="modal" id="menu-1" tabindex="-1" role="dialog" aria-labelledby="menu-1" aria-hidden="true" data-focus="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <?php $this->getPart('inc/widgets/sber') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="menu-2" tabindex="-1" role="dialog" aria-labelledby="menu-2" aria-hidden="true" data-focus="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <?php $this->getPart('inc/widgets/sber2') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-container">
        <div class="menu-main-container">
            <button class="menu-main" data-toggle="modal" data-target="#menu-1">
                <div class="menu-1"></div>
            </button>
        </div>
    </div>


</div>

<script src="/adminlte3/plugins/jquery/jquery.min.js"></script>
<script src="/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/adminlte3/dist/js/adminlte.min.js"></script>

<?php
foreach($scripts as $script){
    echo $script;
}
?>

<?php
$files =  scandir('/home/s/sanchozzz/new.sanchozzz.beget.tech/public_html/dist');

foreach ($files as $file) {
    if (strpos($file,'.css') !== false) echo '<link rel="stylesheet" type="text/css" href="/dist/'.$file.'?q='.$ver.'">';
    elseif (strpos($file,'.js') !== false) echo '<script src="/dist/'.$file.'?q='.$ver.'"></script>';
}
?>

<script>
    $('body').on('click','#sc', function (e) {
        $('#menu-1').modal('hide')
        $('#menu-2').modal('show')
        // $('button.menu-main').data('target', '#menu-2').modal('handleUpdate')
    }).on('click','#dc', function (e) {
        $('#menu-2').modal('hide')
        $('#menu-1').modal('show')
        // $('button.menu-main').data('target', '#menu-1').modal('handleUpdate')
    })
    // $('#menu-1').on('shown.bs.modal', function (e) { $('[data-target="#menu-1"]').addClass('active') }).on('hidden.bs.modal', function (e) { $('[data-target="#menu-1"]').removeClass('active') })
    // $('#menu-2').on('shown.bs.modal', function (e) { $('[data-target="#menu-2"]').addClass('active') }).on('hidden.bs.modal', function (e) { $('[data-target="#menu-2"]').removeClass('active') })
</script>

<?php $this->getPart('inc/widgets/radial-menu') ?>
<script id="chatBroEmbedCode">/* Chatbro Widget Embed Code Start */function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}/* Chatbro Widget Embed Code End */ChatbroLoader({encodedChatId: '46QzT'});</script>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover({
            container: 'body',
            sanitize: false
        })
    })
</script>
</body>
</html>

<style>
    .content-wrapper>.content {
        padding: .5rem;
    }
    .card-title {
        float: none;
    }

    .rounded {
        border-radius: 20px!important;
    }

    .chatbro_minimized_chat.chatbro_movable_chat.chatbro_header_rotare_to_bottom {
        right: inherit!important;
        bottom: 5px!important;
        left: 5px;
    }
    .chatbro_chat.chatbro_movable_chat.chatbro_opacity {
        top: inherit!important;
        bottom: 210px!important;
        left: 20px!important;
    }

   .menu-container {
       right: 140px;
       bottom: 90px;
       top: auto;
       position: fixed;
       z-index: 1085;
       width: 125px;
       height: 125px;
       box-shadow: none;
   }

    .menu-container2 {
        right: 20px;
        bottom: 20px;
        top: auto;
        position: fixed;
        z-index: 1085;
        width: 125px;
        height: 125px;
        box-shadow: none;
    }

   .menu-main-container {
       box-sizing: border-box;
       -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
       outline: none;
       margin: 0;
       padding: 0;
   }

   .menu-main,.menu-main2 {
       width: 150px;
       height: 150px;
       background: none;
       padding: 0;
       box-shadow: none;
       border: none;
       box-sizing: border-box;
       -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
       outline: none;
       margin: 0;
       padding: 0;
   }

    .menu-1 {
        background-image: url(img/menu3.svg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }
   /* .menu-main:hover .menu-1, .menu-main.active .menu-1 {
        background-image: url(img/menu-1a.svg);
    }

    .menu-2 {
        background-image: url(img/menu-2.svg);
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .menu-main:hover .menu-2, .menu-main.active .menu-2 {
        background-image: url(img/menu-2a.svg);
    }*/

    .modal-backdrop
    {
        opacity:0 !important;
    }
    /*.bot-menu menu-fix1*/
    path.par1 {
        fill: none;
    }
</style>