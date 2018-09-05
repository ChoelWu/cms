<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>首页_Choel个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
    <meta name="keywords" content="个人博客,Choel个人博客,个人博客模板,Choel"/>
    <meta name="description" content="Choel个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset(config('view.index_static_path') . '/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset(config('view.index_static_path') . '/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset(config('view.index_static_path') . '/css/m.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset(config('view.index_static_path') . '/js/modernizr.js') }}"></script>
    <![endif]-->
    <script>
        window.onload = function () {
            var oH2 = document.getElementsByTagName("h2")[0];
            var oUl = document.getElementsByTagName("ul")[0];
            oH2.onclick = function () {
                var style = oUl.style;
                style.display = style.display == "block" ? "none" : "block";
                oH2.className = style.display == "block" ? "open" : ""
            }
        }
    </script>
</head>
<body>
<header>
    <div class="tophead">
        <div class="logo"><a href="/">Choel个人博客</a></div>
        <div id="mnav">
            <h2><span class="navicon"></span></h2>
            <ul>
                @foreach($nav_list as $nav)
                    <li><a href="{{ $nav['url'] }}">{{ $nav['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <nav class="topnav" id="topnav">
            <ul>
                @foreach($nav_list as $nav)
                    <li><a href="{{ $nav['url'] }}">{{ $nav['name'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
<div class="picshow">
    <ul>
        <li><a href="/"><i><img src="{{ asset(config('view.index_static_path') . '/images/b01.jpg') }}"></i>
                <div class="font">
                    <h3>个人博客模板《早安》</h3>
                </div>
            </a></li>
        <li><a href="/"><i><img src="{{ asset(config('view.index_static_path') . '/images/b02.jpg') }}"></i>
                <div class="font">
                    <h3>个人博客模板《早安》</h3>
                </div>
            </a></li>
        <li><a href="/"><i><img src="{{ asset(config('view.index_static_path') . '/images/b03.jpg') }}"></i>
                <div class="font">
                    <h3>个人博客模板《早安》</h3>
                </div>
            </a></li>
        <li><a href="/"><i><img src="{{ asset(config('view.index_static_path') . '/images/b04.jpg') }}"></i>
                <div class="font">
                    <h3>个人博客模板《早安》</h3>
                </div>
            </a></li>
        <li><a href="/"><i><img src="{{ asset(config('view.index_static_path') . '/images/b05.jpg') }}"></i>
                <div class="font">
                    <h3>个人博客模板《早安》</h3>
                </div>
            </a></li>
    </ul>
</div>
<article>
    <div class="blogs">
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text02.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">陌上花开，可缓缓归矣</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/zd03.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/zd01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/zd02.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/zd01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li><span class="blogpic"><a href="/"><img
                            src="{{ asset(config('view.index_static_path') . '/images/text01.jpg') }}"></a></span>
            <h3 class="blogtitle"><a href="/">网页中图片属性固定宽度，如何用js改变大小</a></h3>
            <div class="bloginfo">
                <p>用最简单的代码，实现瀑布流布局，没有繁琐的css，没有jq，只需要做到以下就可以实现瀑布流的效果。思路很简单，看成是三列布局，分别用三个ul来调用。帝国cms列表模板，...</p>
            </div>
            <div class="autor"><span class="lm"><a href="/" title="CSS3|Html5" target="_blank" class="classname">CSS3|Html5</a></span><span
                        class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span
                        class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
    </div>
    <div class="sidebar">
        <div class="about">
            <div class="avatar"><img src="{{ asset(config('view.index_static_path') . '/images/avatar.jpg') }}" alt="">
            </div>
            <p class="abname">dancesmile | Choel</p>
            <p class="abposition">Web前端设计师、网页设计</p>
            <div class="abtext"> 一个80后草根女站长！09年入行。一直潜心研究web前端技术，一边工作一边积累经验，分享一些个人博客模板，以及SEO优化等心得。</div>
        </div>
        <div class="search">
            <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
                <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字"
                       style="color: rgb(153, 153, 153);"
                       onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}"
                       onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
                <input name="show" value="title" type="hidden">
                <input name="tempid" value="1" type="hidden">
                <input name="tbname" value="news" type="hidden">
                <input name="Submit" class="input_submit" value="搜索" type="submit">
            </form>
        </div>
        <div class="cloud">
            <h2 class="hometitle">标签云</h2>
            <ul>
                <a href="/">陌上花开</a> <a href="/">校园生活</a> <a href="/">html5</a> <a href="/">SumSung</a> <a
                        href="/">青春</a> <a href="/">温暖</a> <a href="/">阳光</a> <a href="/">三星</a><a href="/">索尼</a> <a
                        href="/">华维荣耀</a> <a href="/">三星</a> <a href="/">索尼</a>
            </ul>
        </div>
        <div class="paihang">
            <h2 class="hometitle">点击排行</h2>
            <ul>
                <li><b><a href="/download/div/2015-04-10/746.html" target="_blank">【活动作品】柠檬绿兔小白个人博客模板30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/t02.jpg') }}"></i>展示的是首页html，博客页面布局格式简单，没有复杂的背景，色彩局部点缀，动态的幻灯片展示，切换卡，标...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-02-19/649.html" target="_blank"> 个人博客模板（2014草根寻梦）30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b03.jpg') }}"></i>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设...
                    </p>
                </li>
                <li><b><a href="/download/div/2013-08-08/571.html" target="_blank">黑色质感时间轴html5个人博客模板30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b04.jpg') }}"></i>黑色时间轴html5个人博客模板颜色以黑色为主色，添加了彩色作为网页的一个亮点，导航高亮显示、banner图片...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-09-18/730.html" target="_blank">情侣博客模板系列之《回忆》Html30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b05.jpg') }}"></i>Html5+css3情侣博客模板，主题《回忆》，使用css3技术实现网站动画效果，主题《回忆》,分为四个主要部分，...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-04-17/661.html" target="_blank">黑色Html5个人博客模板主题《如影随形》30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b06.jpg') }}"></i>014第二版黑色Html5个人博客模板主题《如影随形》，如精灵般的影子会给人一种神秘的感觉。一张剪影图黑白...
                    </p>
                </li>
                <li><b><a href="/jstt/bj/2015-01-09/740.html" target="_blank">【匆匆那些年】总结个人博客经历的这四年…30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/mb02.jpg') }}"></i>博客从最初的域名购买，到上线已经有四年的时间了，这四年的时间，有笑过，有怨过，有悔过，有执着过，也...
                    </p>
                </li>
            </ul>
        </div>
        <div class="paihang">
            <h2 class="hometitle">站长推荐</h2>
            <ul>
                <li><b><a href="/download/div/2015-04-10/746.html" target="_blank">【活动作品】柠檬绿兔小白个人博客模板30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/t02.jpg') }}"></i>展示的是首页html，博客页面布局格式简单，没有复杂的背景，色彩局部点缀，动态的幻灯片展示，切换卡，标...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-02-19/649.html" target="_blank"> 个人博客模板（2014草根寻梦）30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b03.jpg') }}"></i>2014第一版《草根寻梦》个人博客模板简单、优雅、稳重、大气、低调。专为年轻有志向却又低调的草根站长设...
                    </p>
                </li>
                <li><b><a href="/download/div/2013-08-08/571.html" target="_blank">黑色质感时间轴html5个人博客模板30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b04.jpg') }}"></i>黑色时间轴html5个人博客模板颜色以黑色为主色，添加了彩色作为网页的一个亮点，导航高亮显示、banner图片...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-09-18/730.html" target="_blank">情侣博客模板系列之《回忆》Html30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b05.jpg') }}"></i>Html5+css3情侣博客模板，主题《回忆》，使用css3技术实现网站动画效果，主题《回忆》,分为四个主要部分，...
                    </p>
                </li>
                <li><b><a href="/download/div/2014-04-17/661.html" target="_blank">黑色Html5个人博客模板主题《如影随形》30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/b06.jpg') }}"></i>014第二版黑色Html5个人博客模板主题《如影随形》，如精灵般的影子会给人一种神秘的感觉。一张剪影图黑白...
                    </p>
                </li>
                <li><b><a href="/jstt/bj/2015-01-09/740.html" target="_blank">【匆匆那些年】总结个人博客经历的这四年…30...</a></b>
                    <p><i><img src="{{ asset(config('view.index_static_path') . '/images/mb02.jpg') }}"></i>博客从最初的域名购买，到上线已经有四年的时间了，这四年的时间，有笑过，有怨过，有悔过，有执着过，也...
                    </p>
                </li>
            </ul>
        </div>
        <div class="links">
            <h2 class="hometitle">友情链接</h2>
            <ul>
                <li><a href="http://www.yangqq.com" title="Choel个人博客">Choel个人博客</a></li>
                <li><a href="http://www.yangqq.com" title="Choel个人博客">Choel个人博客</a></li>
                <li><a href="http://www.yangqq.com" title="Choel个人博客">Choel个人博客</a></li>
            </ul>
        </div>
        <div class="weixin">
            <h2 class="hometitle">官方微信</h2>
            <ul>
                <img src="{{ asset(config('view.index_static_path') . '/images/wx.jpg') }}">
            </ul>
        </div>
    </div>
</article>
<div class="blank"></div>
<footer>
    <p>Design by <a href="/">Choel个人博客</a> <a href="/">蜀ICP备11002373号-1</a></p>
</footer>
<script src="{{ asset(config('view.index_static_path') . '/js/nav.js') }}"></script>
</body>
</html>