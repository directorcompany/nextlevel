@extends('backend.layouts.master')

	@section('title','Админ панель')

	@section('content')

	<div class="container-fluid">
                    <div class="content">
                    	@if(Session::has('message'))

     					<div class="alert alert-success">	
						{{Session::get('message')}}
					   </div>
     					@endif
                        <div class="card">
                            <div class="card-header">
                                <h3>Все пользователи</h3>
                            </div>

                            <div class="card-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Ф.И.О</th>
									  <th>Предмет</th>
									  <th>Цель</th>
									  <th>Время</th>
									  <th>Оценка</th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	@if(count($results)>0)
								  	@foreach($results as $key=>$user)
									<tr>
									  <td class="number">{{++$i}}</td>
									  <td>{{$user->name}}</td>
									  <td>{{$user->subjects}}</td>
									  <td>{{$user->main}}</td>
									  <td>{{$user->time}}</td>
									  <td>{{$user->value}}</td>
									  <td>

									  	<form id="delete-form{{$user->id}}" method="POST" action="{{route('user.destroy',[$user->id])}}" >
											  @csrf
									  		{{method_field('DELETE')}}

									  	</form>
									  	<a href="#" onclick="if(confirm('Вы хотите удалить?')){

									  		event.preventDefault();
									  		document.getElementById('delete-form{{$user->id}}').submit()
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
									<td>No user to display</td>
									@endif


								  </tbody>
								</table>
								<div class="pagination pagination-centered" >
									{{$results->links()}}
								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>


@endsection

<style>
td {
	max-width: 1400px;
	word-break: break-all;	
}	
.number {
	width: 5vw;
}
</style>
