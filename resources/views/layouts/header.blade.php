  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** --> 
                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('img/nextlevel4.jpg')}}"  width="110px" height="70px" alt="NextLevel"/>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#welcome" class="active">Главная</a></li>
                        <li><a href="#work-process">Курсы</a></li>
                        <li><a href="#blog">Галерея</a></li>
                        <li><a href="#contact-us">Контакты</a></li>
                        <li><a href="{{route('verify')}}" class="{{(request()->is('test')) ? 'active' : ''}}">Тест </a></li> 
                            @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">Авторизация</a>
                                </li>
                            @endif

                            @if (Route::has('register') && !$user)
                                <li>
                                    <a  href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
                        @else
                           
                            <div class="dropup">
                                <button class="btn btn-default" type="button" data-toggle="dropdown">{{ Auth::user()->name }}
                                <span class="caret"></span><i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="{{route('main')}}"><i class="fa fa-home fa-sm fa-fw mr-2 text-gray-400"></i>Админ</a>
                                    </li>
                                  <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Выход
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                     @csrf
                                 </form>
                                </li>
                                
                                </ul>
                              </div>
                           
                        @endguest
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
    
<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container" style="margin-bottom: 100px;">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>Учебный центр Next Level приглашает  вас🙋🏻‍♂️  </h1>
                    <h6 class="text-light"> На курсы и объявляет набор на новые группы!</h6>
                    {{-- <a href="#features" class="main-button-slide btn btn-primary">Discover More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->