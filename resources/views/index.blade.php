  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Laravel</title>

    </head>
<style>
.nav {
    
    background:lightgray;
    height:0;
    position:relative;
    z-index:999
}
.nav .brend {
    
    width:49%;
    float:left;
    
}

.nav .brend h2 {
    
    margin:20px 0 7px;
    color:white;
    text-transform:uppercase;
    font-size: 30px;
}

.nav .links {
    
    width:51%;
    float:left;
    margin: 20px 0 7px;
    font-family: 'Dosis', sans-serif;
    text-transform: uppercase;
    font-size: 15px;
    
}

.nav .links  li {
    
    display:inline-block;
    padding:3px 5px;
    border-bottom: 2px solid rgba(0, 0, 0, 0);
    cursor:pointer;
    color:white;
    transition:all .2s ease-in ;
    margin-right: 3px;
}

.nav .links  li a {
    
    text-decoration:none;
    color:white
}


 
.nav .links  li.active a,
.nav .links  li a:hover{
     color:#1abc9c
     
} 

.nav .links li.active ,
.nav .links li:hover{
     color:#1abc9c;
     border-bottom: 2px solid rgb(31, 178, 148);
    
}

.team .container > div{
    
    float:left
}

.team .container div:first-child {
    
    width:32%;
    margin-right: 1%
}

.team .container div:first-child h2 {
    
    margin: 10px 0 17px 0;
   
}

.team .container div:first-child  p {
    
    font-size: 13px;
    color: rgb(177, 177, 177);
    margin-bottom: 0;
}

.team .container div:not(:first-child) {
    
    width:15.25%;
    margin-left:12px;
    position: relative;
    transition:all 5s ease-in
    
}

.team .container div:not(:first-child) .over {
    
    position: absolute;
    width:100%;
    height:100%;
    top:0;
    left:0;
    bottom:0;
    right:0;
    background-color: rgba(26, 188, 156, 0.76);
    color:white;
    text-align:center;
    line-height:122px;
    display:none;
    font-family: 'Raleway', sans-serif;
    z-index: 2
  
}

.team .container div:not(:first-child):hover .over {
    
   display:block
}

.team .container div:not(:first-child) img {
    
    width:100%;
    display:block
}

.topnavbar a {
      display: inline-block;
      vertical-align: middle;
      color: #000;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-weight: bold;
    }
 .topnavbar a:hover {
      color: #fff;
    }
  .topnavbar .icon {
      display: none;
      font-size: 15px;
    }

  .topnavbar {
       transition: top 0.3s;
    }

.logo {
    height: 50px;
    width: 43px;
    position: relative;
    right: 25px;
}
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
html {
    font-size: 16px;
}
</style>

    <body>
    <div class="nav">
        <div>
            
        </div>
        <nav>
            <ul class="links">
                <li>
                    <div >
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public">首頁</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/PE">體育場館</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">總務處</a>
                    <div>
                    <div>
                        <ul>
                            <li>
                                <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">智慧水表管理</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div>
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/CIC">計資中心</a>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/GAD">空氣品質</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div>
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/LIB">圖書館</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href = "http://localhost/%e5%ad%b8%e9%95%b7,%e5%a8%81%e5%93%a5/laravel/public/SUMUP">總結</a>
                    </div>
                </li>
            </ul>
        </nav>
        </div>
        <div>@yield('content')</div>
    </body>
</html>


