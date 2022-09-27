@extends('backend.layouts.master')

@section('title','Админ панель')


@section('content')

<div class="container">
            <div class="content">
                 @if(Session::has('message'))

                        <div class="alert alert-success">       
                           {{Session::get('message')}}
                        </div>
                     @endif
                <div class="card">
                    <div class="card-header">


                    </div>

                    <div class="card-body">


                    <p><h3  class="heading">{{$question->question}}</h3></p>



                        <div class="card-body table">
                            <table class="table table-striped">
                                <tbody>
                                    @foreach($question->answers as $key=>$answer)


                                    <tr class="read">


                                        <td class="cell-author hidden-phone hidden-tablet">
                                            {{$key+1}}. {{$answer->answer}}
                                            @if($answer->is_correct)
                                            <span class="badge badge-success pull-right">Правильный</b></span>
                                            @endif

                                        </td>




                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>

                        <div class="module-foot">
                           <a href="{{route('question.edit',[$question->id])}}"> <button class="btn btn-primary">Редактировать</button></a>

                        <form id="delete-form{{$question->id}}" method="post" action="{{route('question.destroy',[$question->id])}}" style="display: none">@csrf
                          {{method_field('DELETE')}}



                        </form>
                        <a href="" onclick="if(confirm('Вы хотите удалить?')){
                          event.preventDefault();
                          document.getElementById('delete-form{{$question->id}}').submit();
                        }else{
                          event.preventDefault();
                        }


                        ">

                       <input type="submit" value="Удалить" class="btn btn-danger">
                       </a>
                             <a href="{{route('question.index')}}"><button class="btn btn-secondary pull-right">Назад</button></a>






                        </div>


                    </div>
               </div>

            </div>

         </div>
    </div>

    </div>
    </div>


@endsection

