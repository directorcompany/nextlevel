  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** --> 
                    <a href="<?php echo e(route('home')); ?>" class="logo">
                        <img src="<?php echo e(asset('img/nextlevel4.jpg')); ?>"  width="110px" height="70px" alt="NextLevel"/>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#welcome" class="active">Главная</a></li>
                        <li><a href="#work-process">Курсы</a></li>
                        <li><a href="#blog">Галерея</a></li>
                        <li><a href="#contact-us">Контакты</a></li>
                        <li><a href="<?php echo e(route('verify')); ?>" class="<?php echo e((request()->is('test')) ? 'active' : ''); ?>">Тест </a></li> 
                            <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li>
                                    <a href="<?php echo e(route('login')); ?>">Авторизация</a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register') && !$user): ?>
                                <li>
                                    <a  href="<?php echo e(route('register')); ?>">Регистрация</a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                           
                            <div class="dropup">
                                <button class="btn btn-default" type="button" data-toggle="dropdown"><?php echo e(Auth::user()->name); ?>

                                <span class="caret"></span><i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                 <li>
                                     <a class="dropdown-item" href="<?php echo e(route('main')); ?>"><i class="fa fa-home fa-sm fa-fw mr-2 text-gray-400"></i>Админ</a>
                                    </li>
                                  <li>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Выход
                                 </a>

                                 <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                     <?php echo csrf_field(); ?>
                                 </form>
                                </li>
                                
                                </ul>
                              </div>
                           
                        <?php endif; ?>
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
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** --><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/layouts/header.blade.php ENDPATH**/ ?>