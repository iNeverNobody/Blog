<?php
    echo `<!DOCTYPE html>
    <html lang="zh-hans">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World!</title>
        <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.css"> 
        <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap-theme.css">
        <link rel="stylesheet" href="./assets/css/main.css">
    </head>
    <body>
        <script>
            alert("网站开发中。。。"); 
        </script>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">   
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.html">Blog</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./index.html">首页</a></li>
                    <li><a href="./assets/pages/about.html">关于</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            亿点东西
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="./assets/pages/something/index.html">主页</a></li>
                            <li><a href="./assets/pages/something/text.html">文章</a></li>
                            <li><a href="./assets/pages/something/interesting.html">有趣的东西</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="JavaScript:alert('没做好呢')">下载</a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="JavaScript:history.back(1);">返回</a></li>
                        </ul>
                    </li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" id="form-ctrl" class="form-control" placeholder="Search..." onfocus="document.getElementById('form-ctrl').placeholder='This can\'t search...'" onblur="document.getElementById('form-ctrl').placeholder='Search...'">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                </ul>
            </div>
            </div>
        </nav>
        <div id="say"></div>
        <hr>
        
        <hr>
        <footer id="foot"></footer>
    </body>
    <script src="./bootstrap-3.4.1-dist/jqeury/main.js"></script>
    <script src="./bootstrap-3.4.1-dist/js/bootstrap.js"></script> 
    <script src="./assets/js/index.js"></script>
    </html>
    `;
?>