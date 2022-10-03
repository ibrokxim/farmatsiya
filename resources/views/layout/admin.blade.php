<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../public/favicon.ico">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mvp/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);
.fa-2x {
font-size: 2em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size:20px;
}


.main-menu:hover,nav.main-menu.expanded {
width:250px;
overflow:visible;
}

.flex {
    background-color: white;
}
.main-menu {
background:#190734;
border-right:1px solid #e5e5e5;
position:absolute;
top:0;
bottom:0;
height:100%;
left:0;
width:60px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

.main-menu>ul {
margin:7px 0;
}

.main-menu li {
position:relative;
display:block;
width:250px;
}

.form_title{
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #000000;
}
.form_label{
    font-weight: 400;
    font-size: 18px;
    color: #000000;
    width: 200px;
    text-align: end;
}
.form_btn{
    font-weight: 700;
    font-size: 18px;
    color: #FFFFFF;
    padding: 18px 40px;
    background: #171E83;
    border-radius: 10px;
    border: none;
}
.form-select.step4{
  width: 100%;
  max-width: 426px;
  font-weight: 400;
  font-size: 18px;
  color:rgba(0, 0, 0, .5);
}
.form_input{
    background: #F3F4FF;
    border-radius: 10px;
    border: none;
    box-shadow: none;
    padding: 19px 26px;
    width: 100%;
    max-width: 426px;
}
.main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:#999;
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;
  
}

.main-menu .nav-icon {
position:relative;
display:table-cell;
width:60px;
height:36px;
text-align:center;
vertical-align:middle;
font-size:18px;
}

.main-menu .nav-text {
position:relative;
display:table-cell;
vertical-align:middle;
width:190px;
  font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
position:absolute;
left:0;
bottom:0;
}

.no-touch .scrollable.hover {
overflow-y:hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y:auto;
overflow:visible;
}

a:hover,a:focus {
text-decoration:none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline:0;
margin:0;
padding:0;
}
.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#5fa2db;
}
.area {
float: left;
background: #ffffff;
width: 100%;
height: 100%;
}
@font-face {
  font-family: 'Titillium Web';
  font-style: normal;
  font-weight: 300;
  src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
}

</style>
<style type="text/css">
    .field {text-align: right;}
</style>
</head>
<body>
    <div class="area display flex"  style="padding:30px 30px 30px 80px">
    <nav class="main-menu" style="position: fixed;">
   
        <ul>
            <li>
                <a href="{{ route('admin.message.index') }}">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Сообщения
                    </span>
                </a>              
            </li>
            
            <li class="has-subnav">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text">
                        Пользователи
                    </span>
                </a>                
            </li>
            <li class="has-subnav">
                <a href="{{ route('admin.admin_users.index') }}">
                   <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Редакторы
                    </span>
                </a>      
            </li>
           
            <li class="has-subnav">
                <a href="{{ route('admin.states.index') }}">
                    @php
                    $posts = App\Models\StatesSend::where('status', '=', 'Проверяется')
                                                    ->count();
                @endphp
                   <i class="fa fa-folder-open fa-2x"> <span class="badge text-bg-secondary">({{$posts}})</span></i>
                    <span class="nav-text">
                        Заявки
                    </span>
                </a>           
            </li>
            <li>
                <a href="{{ route('admin.posts.index') }}">
                    <i class="fa fa-font fa-2x"></i>
                    <span class="nav-text">
                       Статьи
                    </span>
                </a>
            </li>                
        </ul>
        <ul class="logout">
            <li>
               <a href="{{ route('admin.logout') }}">
                     <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Выйти
                    </span>
                </a>
            </li>  
        </ul>
    </nav>

 
                
 @yield('content')
               
</body>

</html>
