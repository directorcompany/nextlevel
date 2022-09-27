@extends('backend.layouts.master')

	@section('title','quiz questions')

	@section('content')

				<div class="container">
                    <div class="content">

                    	 <!--foreach-->
                         @foreach($quizzes as $quiz)

                        <div class="card">
                            <div class="card-header">

                                  <h3>{{$quiz->name}}</h3>

                            </div>

                            <div class="card-body">


                            <p><h3  class="heading"></h3></p>




                                <div class="card-body table">
                                     <!--foreach-->
                                     @foreach($quiz->questions as $ques)

                                    <table class="table table-striped">
                                        <tbody>




                                            <tr class="read">

                                                 {{$ques->question}}

                                                <td class="cell-author hidden-phone hidden-tablet">
                                                     <!--foreach-->
                                                     @foreach($ques->answers as $answer)
                                                        <p>
                                                            {{$answer->answer}}

                                                            @if($answer->is_correct)
                                                           <span class="badge badge-success">
                                                            Правильный ответ
                                                           </span>
                                                           @endif

                                                        </p>
                                                        @endforeach
                                                    <!--endforeach-->
                                                </td>




                                            </tr>



                                        </tbody>

                                    </table>
                                    @endforeach
                                    <!--endforeach-->
                                </div>
                              @endforeach
                            <!--endforeach-->

                                <div class="card-foot">
                                <td>
                                    <a href="{{route('quiz.index')}}"><button class="btn btn-info pull-center">Назад</button></a>
                                 </td>
                                </div>


                            </div>
                   		</div>

                		</div>

           			</div>
        		</div>

            </div>
            </div>


@endsection
