@extends('backend.layouts.master')

	@section('title','Админ панель')

	@section('content')

	<div class="container">
                    <div class="content">
                    	@if(Session::has('message'))

     					<div class="alert alert-success">	
							 	{{Session::get('message')}}</div>
     					@endif
                        <div class="card">
                            <div class="card-header">
                                <h3>Все вопросы</h3>
                            </div>

                            <div class="card-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Вопросы</th>
									  <th>Тест</th>
									  <th>Дата</th>
									  <th></th>
									  <th></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	@if(count($questions)>0)
								  	@foreach($questions as $key=>$question)
									<tr>
									  <td>{{$key+1}}</td>
									  <td>{{$question->question}}</td>
									  <td>{{$question->quiz->name}}</td>
									   <td>{{date('F d,Y',strtotime($question->created_at))}}</td>
									  <td>
									  	<a href="{{route('question.show',[$question->id])}}"> <button class="btn btn-info">Вид</button></a>
									  </td>

									  <td>
									  		<a href="{{route('question.edit',[$question->id])}}">
									  			<button class="btn btn-primary">Редактор</button>

									  		</a>

									  </td>
									  <td>

									  	<form id="delete-form{{$question->id}}" method="POST" action="{{route('question.destroy',[$question->id])}}" >
											  @csrf
									  		{{method_field('DELETE')}}

									  	</form>
									  	<a href="#" onclick="if(confirm('Вы хотите удалить?')){

									  		event.preventDefault();
									  		document.getElementById('delete-form{{$question->id}}').submit()
									  	}else{
									  		event.preventDefault();
									  	}

									  	">
									  	<input type="submit" value="Удалить" class="btn btn-danger">
									  </a>



									  </td>
									</tr>
									@endforeach

									@else
									<td>No question to display</td>
									@endif


								  </tbody>
								</table>
								<div class="pagination pagination-centered" >
									{{ $questions->links()}}
								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>




@endsection
