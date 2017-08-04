<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{!! asset('images/logo-mobile.png')!!}">
        <title>Dezign | Home page</title>
        <!--css-->
        <link rel="stylesheet" type="text/css" href="{!! asset('/css/bootstrap.min.css')!!}">
        <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css')!!}">
        <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css')!!}">
        <!--js-->
        <script type="text/javascript" src="{!! asset('js/jquery-3.2.1.min.js')!!}"></script>
        <script type="text/javascript" src="{!! asset('js/bootstrap.min.js')!!}"></script>
    </head>
    <body>
        <div id="app-dezign">
            <div id="header" class="structural-block">
                <div class="container content-main">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{!! asset('/') !!}" title="Logo Dezign"><div class="logo-site"></div></a>
                        </div>
                        <div class="col-md-4">
                            <ul class="menu-top list-inline">
                                <li><a href="#">Sản phẩm</a></li>
                                <li><a href="#">Dự án</a></li>
                                <li><a href="#">Nội thất</a></li>
                                <li><a href="#">Ngoại thất</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <form id="custom-search-form" class="form-search form-horizontal">
                                        <div class="input-append relative">
                                            <input type="text" class="search-query mac-style" placeholder="Bắt đầu tìm kiếm của bạn ...">
                                            <button type="submit" class="btn"><img src="{!! asset('images/icon-seach.png')!!}" title="Search icon" /></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <nav role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                          <ul class="nav">
                                            <li class="dropdown">
                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="avatar" src="{!! asset('images/avatar-default.png') !!}" title="Avatar default"><b>Đăng nhập</b> <span class="caret"></span></a>
                                                <ul id="login-dp" class="dropdown-menu">
                                                    <li>
                                                         <div class="row">
                                                                <div class="col-md-12">
                                                                    Đăng nhập qua
                                                                    <div class="social-buttons">
                                                                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                                        <a href="#" class="btn btn-google"><i class="fa fa-google-plus"></i> Google+</a>
                                                                    </div>
                                                                    hoặc:
                                                                     <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                                            <div class="form-group">
                                                                                 <label class="sr-only" for="exampleInputEmail2">Địa chỉ Email</label>
                                                                                 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                 <label class="sr-only" for="exampleInputPassword2">Mật khẩu</label>
                                                                                 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                                                 <div class="help-block text-right"><a href="">Quên mật khẩu ?</a></div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                 <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                                                            </div>
                                                                            <div class="checkbox">
                                                                                 <label>
                                                                                 <input type="checkbox">Giữ tôi đăng nhập
                                                                                 </label>
                                                                            </div>
                                                                     </form>
                                                                </div>
                                                                <div class="bottom text-center">
                                                                    <a href="#" data-toggle="modal" data-target="#SigupModal"><b>Tham gia với chúng tôi</b></a>
                                                                </div>
                                                         </div>
                                                    </li>
                                                </ul>
                                            </li>
                                          </ul>
                                        </div><!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-page" class="structural-block">
                <div class="container content-main">
                    <div class="content-show-images">
                        <div class="row">
                            <?php 
                                $arg = [
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f6722ce1c0.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1293/thumbs_593f3eec78ba3.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/602/thumbs_149809683158ec9367ec29a[1].jpg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f510821697.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f50f797a31.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f50f574054.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f8088e3361.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f50f4126c2.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f50f350786.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f808659034.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f80860d217.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1115/thumbs_593f2dda14246.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1255/thumbs_593f67278311e.jpeg',
                                    'http://dezignwall.com:8888/uploads/member/1293/thumbs_593f3ef11ee21.jpeg'
                                ]
                            ?>
                           
                            <div class="col-md-4 item-card">
                                <?php foreach ($arg as $key => $value) {?>
                                    <div class="card-image relative">
                                        <div class="top-card">
                                            <div class="info-member">
                                                <div class="left-info-member"><img class="avatar avatar-card" src="http://dezignwall.com:8888/uploads/company/ae195b8024ee8b2a931c87bec326bafa_569e825736504.jpg"></div>
                                                <div class="right-info-member">
                                                    <p class="image-title"><a href="#">Image name</a></p>
                                                    <p class="image-create">By Quang hiep | Company ABC Like</p>
                                                    <p class="image-create">Created: YYYY-MM-DD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"><img class="src_img" src="<?php echo $arg[rand(0,13)];?>"/></a>
                                        <div class="description-bottom">
                                            <div class="description">
                                                <div class="col-xs-12">
                                                    <p>Go, get ur organize on. Life is better when you can find things.</p>
                                                </div>
                                            </div>
                                            <div class="bottom-card">
                                                <div class="box-top">
                                                    <div class="col-xs-3"><div class="likes"><p><span id="number-like">0</span> Likes</p></div></div>
                                                    <div class="col-xs-3"><div class="view"><p><span id="number-view">0</span> Views</p></div></div>
                                                    <div class="col-xs-3"><div class="share"><p><span id="number-share">0</span> Share</p></div></div>
                                                    <div class="col-xs-3"><div class="comment"><p><span id="number-comment">0</span> Comment</p></div></div>
                                                </div>
                                                <div class="box-bottom">
                                                    <div class="col-xs-3"><i class="fa fa-heart " title="Click here to like ad"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-eye" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-share-alt-square" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3 "><i class="fa fa-comment" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-4 item-card">
                                <?php foreach ($arg as $key => $value) {?>
                                    <div class="card-image relative">
                                        <div class="top-card">
                                            <div class="info-member">
                                                <div class="left-info-member"><img class="avatar avatar-card" src="http://dezignwall.com:8888/uploads/company/ae195b8024ee8b2a931c87bec326bafa_569e825736504.jpg"></div>
                                                <div class="right-info-member">
                                                    <p class="image-title"><a href="#">Image name</a></p>
                                                    <p class="image-create">By Quang hiep | Company ABC Like</p>
                                                    <p class="image-create">Created: YYYY-MM-DD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"><img class="src_img" src="<?php echo $arg[rand(0,13)];?>"/></a>
                                        <div class="description-bottom">
                                            <div class="description">
                                                <div class="col-xs-12">
                                                    <p>Go, get ur organize on. Life is better when you can find things.</p>
                                                </div>
                                            </div>
                                            <div class="bottom-card">
                                                <div class="box-top">
                                                    <div class="col-xs-3"><div class="likes"><p><span id="number-like">0</span> Likes</p></div></div>
                                                    <div class="col-xs-3"><div class="view"><p><span id="number-view">0</span> Views</p></div></div>
                                                    <div class="col-xs-3"><div class="share"><p><span id="number-share">0</span> Share</p></div></div>
                                                    <div class="col-xs-3"><div class="comment"><p><span id="number-comment">0</span> Comment</p></div></div>
                                                </div>
                                                <div class="box-bottom">
                                                    <div class="col-xs-3"><i class="fa fa-heart " title="Click here to like ad"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-eye" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-share-alt-square" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3 "><i class="fa fa-comment" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-4 item-card">
                                <?php foreach ($arg as $key => $value) {?>
                                    <div class="card-image relative">
                                        <div class="top-card">
                                            <div class="info-member">
                                                <div class="left-info-member"><img class="avatar avatar-card" src="http://dezignwall.com:8888/uploads/company/ae195b8024ee8b2a931c87bec326bafa_569e825736504.jpg"></div>
                                                <div class="right-info-member">
                                                    <p class="image-title"><a href="#">Image name</a></p>
                                                    <p class="image-create">By Quang hiep | Company ABC Like</p>
                                                    <p class="image-create">Created: YYYY-MM-DD</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"><img class="src_img" src="<?php echo $arg[rand(0,13)];?>"/></a>
                                        <div class="description-bottom">
                                            <div class="description">
                                                <div class="col-xs-12">
                                                    <p>Go, get ur organize on. Life is better when you can find things.</p>
                                                </div>
                                            </div>
                                            <div class="bottom-card">
                                                <div class="box-top">
                                                    <div class="col-xs-3"><div class="likes"><p><span id="number-like">0</span> Likes</p></div></div>
                                                    <div class="col-xs-3"><div class="view"><p><span id="number-view">0</span> Views</p></div></div>
                                                    <div class="col-xs-3"><div class="share"><p><span id="number-share">0</span> Share</p></div></div>
                                                    <div class="col-xs-3"><div class="comment"><p><span id="number-comment">0</span> Comment</p></div></div>
                                                </div>
                                                <div class="box-bottom">
                                                    <div class="col-xs-3"><i class="fa fa-heart " title="Click here to like ad"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-eye" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3"><i class="fa fa-share-alt-square" aria-hidden="true"></i></div>
                                                    <div class="col-xs-3 "><i class="fa fa-comment" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="structural-block">
                <div class="container content-main">
                    <div class="top">
                        <div class="row">
                            <div class="col-sm-3 text-sm-center">
                                <p class="copyright"><span>©<strong>D</strong><i>ezign</i></span> Inc. 2017</p>
                            </div>
                            <div class="col-sm-5 text-sm-center">
                                <ul class="list-inline">
                                    <li><a name="about-us" href="http://dezignwall.com:8888/page/about-us">About us</a></li>
                                    <li><a name="contact" href="http://dezignwall.com:8888/page/contact">Contact</a></li>
                                    <li><a name="upgrade" href="http://dezignwall.com:8888/profile/upgrade">Upgrade</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-xs-6 col-md-6 text-center"><a href="http://dezignwall.com:8888/page/terms-of-use" name="terms-of-use">Terms of use</a></div>
                                    <div class="col-xs-6 col-md-6 text-center"><a href="http://dezignwall.com:8888/page/privacy-policy" name="privacy-policy">Privacy policy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="SigupModal" tabindex="-1" role="dialog" aria-labelledby="SiginModalLabel"> 
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 margin-auto">
                        <div class="modal-body">
                            <div id="login-dp" class="dropdown-menu-custom">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                                Tại tài khoản qua
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-google"><i class="fa fa-google-plus"></i> Google+</a>
                                </div>
                                hoặc:
                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Địa chỉ Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Nhập địa chỉ Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Nhập địa mật khẩu" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Xác nhận mật khẩu" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Tại tài khoản</button>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="bottom text-center">
                                        <a href="#" data-toggle="modal" data-target="#SiginModal"><b>Đã có tài khoản</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="SiginModal" tabindex="-1" role="dialog" aria-labelledby="SiginModalLabel"> 
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 margin-auto">
                        <div id="login-dp" class="dropdown-menu-custom">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
                            Dăng nhập khoản qua
                            <div class="social-buttons">
                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                <a href="#" class="btn btn-google"><i class="fa fa-google-plus"></i> Google+</a>
                            </div>
                            hoặc:
                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                     <label class="sr-only" for="exampleInputEmail2">Địa chỉ Email</label>
                                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="">
                                </div>
                                <div class="form-group">
                                     <label class="sr-only" for="exampleInputPassword2">Mật khẩu</label>
                                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required="">
                                     <div class="help-block text-right"><a href="">Quên mật khẩu ?</a></div>
                                </div>
                                <div class="form-group">
                                     <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                </div>
                                <div class="checkbox">
                                     <label>
                                     <input type="checkbox">Giữ tôi đăng nhập
                                     </label>
                                </div>
                            </form>
                            <div class="row">
                                <div class="bottom text-center">
                                    <a href="#" data-toggle="modal" data-target="#SigupModal"><b>Tham gia với chúng tôi</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#SiginModal').on('show.bs.modal', function (e) {
                    document.title = "abc";
                    window.history.pushState({"html":"abc","pageTitle":"abc"},"", "pppp");
                    $("#SigupModal").modal("hide");
                });
                $('#SigupModal').on('show.bs.modal', function (e) {
                    document.title = "abc";
                    window.history.pushState({"html":"abc","pageTitle":"abc"},"", "pppp");
                    $("#SiginModal").modal("hide");
                });
            </script>
        </div>
    </body>
</html>