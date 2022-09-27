<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
         <link type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo e(asset('css/bootstrap.minimum.css')); ?>" rel="stylesheet">
         <link type="text/css" href="<?php echo e(asset('admin/bootstrap/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">
       
        <!-- <link type="text/css" href="<?php echo e(asset('admin/css/theme.css')); ?>" rel="stylesheet"> -->
        <link type="text/css" href="<?php echo e(asset('img/icons/css/font-awesome.css')); ?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
         <link href="<?php echo e(asset('css/all.min.css')); ?>" rel="stylesheet" type="text/css"> 
        <link href="<?php echo e(asset('css/ruang-admin.min.css')); ?>" rel="stylesheet">
    </head>
  
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background: white;" href="<?php echo e(route('main')); ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo e(asset('img/nextlevel4.jpg')); ?>">
        </div>
        
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('main')); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
    Админ панель
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="menu-icon icon-pencil"></i>
          <span>Создать Тест</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="<?php echo e(route('quiz.create')); ?>">Создание Тестов</a>
            <a class="collapse-item" href="<?php echo e(route('quiz.index')); ?>">Вид тестов</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Создание Вопросов</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
      
            <a class="collapse-item" href="<?php echo e(route('question.create')); ?>">Создание вопросы</a>
            <a class="collapse-item" href="<?php echo e(route('question.index')); ?>">Вид Вопросов</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseId"
          aria-expanded="true" aria-controls="collapseId">
          <i class="menu-icon icon-user"></i>
          <span>Пользователь</span>
        </a>
        <div id="collapseId" class="collapse" aria-labelledby="headingId" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo e(route('user.create')); ?>">Создание Пользователя</a>
            <a class="collapse-item" href="<?php echo e(route('user.index')); ?>">Вид Пользователя</a>
            <a class="collapse-item" href="<?php echo e(route('var')); ?>">Результаты</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    <?php echo $__env->yieldContent('sidebar'); ?>
    <?php echo $__env->yieldContent('footer'); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/layouts/navbar.blade.php ENDPATH**/ ?>