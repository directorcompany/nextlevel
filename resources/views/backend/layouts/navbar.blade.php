<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
         <link type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/bootstrap.minimum.css')}}" rel="stylesheet">
         <link type="text/css" href="{{asset('admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
       {{-- <link type="text/css" href="{{asset('css/styles.css')}}" rel="stylesheet">    --}}
        <!-- <link type="text/css" href="{{asset('admin/css/theme.css')}}" rel="stylesheet"> -->
        <link type="text/css" href="{{asset('img/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
         <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css"> 
        <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
    </head>
  
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background: white;" href="{{route('main')}}">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/nextlevel4.jpg')}}">
        </div>
        {{-- <div class="sidebar-brand-text mx-3 text-info">NextLevel</div> --}}
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('main')}}">
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
         
            <a class="collapse-item" href="{{route('quiz.create')}}">Создание Тестов</a>
            <a class="collapse-item" href="{{route('quiz.index')}}">Вид тестов</a>
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
      
            <a class="collapse-item" href="{{route('question.create')}}">Создание вопросы</a>
            <a class="collapse-item" href="{{route('question.index')}}">Вид Вопросов</a>
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
            <a class="collapse-item" href="{{route('user.create')}}">Создание Пользователя</a>
            <a class="collapse-item" href="{{route('user.index')}}">Вид Пользователя</a>
            <a class="collapse-item" href="{{route('var')}}">Результаты</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    @yield('sidebar')
    @yield('footer')