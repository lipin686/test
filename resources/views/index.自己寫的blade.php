  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    </head>
<style>

ul { /* 取消ul預設的內縮及樣式 */
    margin: 0;
    padding: 0;
    list-style: none;
} 
ul.menu {
    border: #ccc 1px solid;
    display: inline-block;
    font-family: 'Open Sans', Arial, sans-serif;
    font-size: 20px;
}


ul.menu li {
    position: relative;
    white-space: nowrap;
    border-right: #ccc 1px solid;
}

ul.menu > li:last-child {
    border-right: none;
}

ul.menu > li {
    float: left; /* 只有第一層是靠左對齊*/
}

ul.menu a {
    background-color: #fff;
    color: #333;
    display: block;
    padding: 0 30px;
    text-decoration: none;
    line-height: 40px;
}
ul.menu a:hover { /* 滑鼠滑入按鈕變色*/
    background-color: #ef5c28;
    color: #fff;
}
ul.menu li:hover > a { /* 滑鼠移入次選單上層按鈕保持變色*/
    background-color: #ef5c28;
    color: #fff;
}


ul.menu ul {
    border: #ccc 1px solid;
    position: absolute;
    z-index: 99;
    left: 5;
    top: 100%;
    min-width: 180px;
}

ul.menu ul li {
    border-bottom: #ccc 1px solid;
}

ul.menu ul li:last-child {
    border-bottom: none;
}

ul.menu ul ul { /*第三層以後的選單出現位置與第二層不同*/
    z-index: 999;
    top: 10px;
    left: 90%;
}
ul.menu ul { /*隱藏次選單*/
    display: none;
}

ul.menu li:hover > ul { /* 滑鼠滑入展開次選單*/
    display: block;
}
.navbar1{
    display:inline;
    position:fixed;
    left:0;
    font-size: 20px;
    
}
.navbar2{
    display:none;
    position:fixed;
    right:0;
}
a{
    text-decoration:none;
}
@media only screen and (min-width:1200px) {
    .navbar2 { display: inline; }
}
</style>
    <body>
        
    <div class="alert alert-primary">
        <div class="navbar1">
            <a href="http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public">NCHU Smart Campus</a>
        </div>
        <nav class="navbar2">
            <ul class ="menu ">
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public">首頁</a>
                </li>
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/PE">體育場館</a>
                </li>
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">總務處</a>
                    <ul>
                        <li>
                            <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                        </li>
                        <li>
                            <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                            <ul>
                                <li>
                                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                                </li>
                                <li>
                                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                                    <ul>
                        <li>
                            <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                        </li>
                        <li>
                            <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                        </li>
                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/CIC">計資中心</a>
                
                    <ul>
                        <li>
                            <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">空氣品質</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/LIB">圖書館</a>
                </li>
                <li>
                    <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/SUMUP">總結</a>
                </li>
            </ul>
        </nav>
        </div>
        <br>
        <div class="alert alert-primary">

            <div>
                aaa
                <div>
                    aaa
                </div>
            </div>
            <nav>
                bbb
                <div>
                    bbb
                </div>
            </nav>
        </div>
    
       </body>
</html>


