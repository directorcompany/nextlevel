@extends('backend.layouts.master')
    @section('title', 'Админ панель')
    @section('content')



    <div class="container">
        <div class="content">
<form action="{{ route('quiz.update',[$quiz->id]) }}" method="post">
    @csrf
    {{method_field('PUT')}}
    

            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif



            <div class="card">
                <div class="card-header">
                    <h3>Создание тестов</h3>
                </div>

                {{-- Module body --}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="quiz-name" class="control-label">Имя теста</label>


                        {{-- Name of the Quiz --}}
                        <div class="controls">
                            <input type="text" class="form-control" name="name" placeholder="имя тестов" value="{{ $quiz->name }}">
                            {{-- Error Messages --}} <br>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            {{-- Error Messages --}}
                        </div>
                        {{-- Name of the Quiz --}}


                        {{-- Quiz Description --}}
                        <div class="form-group">
                            <label for="quiz-description" class="control-label">Описание тестов</label>
                            <textarea name="description"  class="form-control" placeholder="Quiz description">{{$quiz->description}}</textarea>
                            {{-- Error Messages --}} <br>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            {{-- Error Messages --}}
                        </div>
                        {{-- Quiz Description --}}



                        {{-- Duration --}}
                        {{-- <div class="controls">
                            <label for="quiz-duration" class="control-label">Quiz duration</label>
                            <input type="text" class="span8" name="minutes" placeholder="minutes" value="{{ $quiz->minutes }}"> --}}
                            {{-- Error Messages --}}
                            {{-- @error('minutes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror --}}
                            {{-- Error Messages --}}
                        {{-- </div> --}}
                        {{-- Duration --}}



                        {{-- Submit Button --}}
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Подтвердить</button>
                        </div>
                        {{-- Submit Button --}}
                    </div>
                </div>
            </div>
      
</form>
  </div>
    </div>

@endsection




