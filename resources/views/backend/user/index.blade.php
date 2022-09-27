@extends('backend.layouts.master')

	@section('title','Админ панель')

	@section('content')

	<div class="container-fluid">
                    <div class="content">
                    	@if(Session::has('message'))

     					<div class="alert alert-success">		{{Session::get('message')}}</div>
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
									  <th>Имя</th>
									  <th>Email</th>
									  <th>Пароль</th>
									  <th></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	@if(count($users)>0)
								  	@foreach($users as $key=>$user)
									<tr>
									  <td>{{$key+1}}</td>
									  <td>{{$user->name}}</td>
									  <td>{{$user->email}}</td>
									  <td>*****</td>


									  <td>
									  		<a href="{{route('user.edit',[$user->id])}}">
									  			<button class="btn btn-primary">Редактор</button>

									  		</a>

									  </td>
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
									{{$users->links()}}
								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>




@endsection
