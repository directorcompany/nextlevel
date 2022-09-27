@extends('backend.layouts.master')
    @section('title', 'Админ панель')
    @section('content')


    <div class="container">
        <div class="content">

            <div class="card">
                <div class="card-header">
                    <h3>Все тесты</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Имя</th>
                          <th>Описание</th>
                          {{-- <th>Minutes</th> --}}
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          @if (count($quizzes)>0)
                          @foreach ($quizzes as $key => $quiz)
                            <tr>
                                <td scope="row">{{$key+1}}</td>
                                <td>{{$quiz->name}}</td>
                                <td>{{$quiz->description}}</td>
                                {{-- <td>{{$quiz->minutes}}</td> --}}
                                <td>
                                    <a href="{{route('quiz.question',[$quiz->id])}}">
                                        <button class="btn btn-info">Вид</button>
                                    </a>
                                </td>


                                <td>
                                    <a href="{{ route('quiz.edit',[$quiz->id])}}">
                                        <button class="btn btn-primary">Редактор</button>
                                    </a>
                                </td>
                                <td>
                                    <form id="delete-form{{$quiz->id}}" method="post"
                                        action="{{ route('quiz.destroy',[$quiz->id])}}">
                                        @csrf
                                        {{method_field('DELETE')}}
                                    </form>
                                    <a href="#" onclick="if(confirm('Вы хотите удалить?')){

                                            event.preventDefault();
                                            document.getElementById('delete-form{{$quiz->id}}').submit()
                                        }else{
                                            event.preventDefault();
                                        }

                                        ">
                                        <input type="submit" value='Удалить' class='btn btn-danger'>
                                    </a>
                                </td>
                            </tr>
                          @endforeach
                          @else
                          <td></td>
                          @endif
                      </tbody>
                    </table>
                   </div>
               </div>

            </div>

           </div>
    </div>



@endsection
