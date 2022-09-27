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
                                <h3>Редактирование пользователя</h3>
                            </div>

                            <div class="card-body">
                            	<form action="{{route('user.update',[$user->id])}}" method="POST">@csrf
                                    {{method_field('PUT')}}

                            		<div class="form-group">
                            			<label class="control-lable">Ф.И.О</label>
                            			<div class="controls">
                            				<input type="text" name="name" class="form-control @error('name') border-red @enderror" placeholder="name" value="{{$user->name}}" >


                            			</div>
                                         @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                            		</div>




                                    <div class="form-group">
                                    <label class="control-lable" for="password">Пароль</label>
                                    <div class="controls">
                                        <input type="text" name="password" class="form-control @error('password') border-red @enderror" placeholder="password" value="{{$user->visible_password}}" >
                                    </div>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    </div>

                                    <div class="form-group">
                                    <label class="control-lable" for="occupation">Предмет</label>
                                    <div class="controls">
                                        <input type="text" name="occupation" class="form-control @error('question') border-red @enderror" placeholder="occupation" value="{{$user->occupation}}" >
                                    </div>
                                     @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    </div>

                                    <div class="form-group">
                                    <label class="control-lable" for="occupation">Адресс</label>
                                    <div class="controls">
                                        <input type="text" name="address" class="form-control @error('address') border-red @enderror" placeholder="address" value="{{$user->address}}" >
                                    </div>
                                     @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    </div>

                                    <div class="form-group">
                                    <label class="control-lable" for="occupation">Телефон</label>
                                    <div class="controls">
                                        <input type="text" name="phone" class="form-control @error('phone') border-red @enderror" placeholder="phone" value="{{$user->phone}}" >
                                    </div>
                                     @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    </div>




								<div class="form-group">
									<button type="submit" class="btn btn-success">Редактировать</button>

								</div>




                            </form>

                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>






@endsection
