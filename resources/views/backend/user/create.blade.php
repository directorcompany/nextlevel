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
                                <h3>Создание пользователя</h3>
                            </div>

                            <div class="card-body">
                            	<form method='post' action="{{route('user.store')}}" >
                                    @csrf

                            		<div class="form-group">
                            			<label class="control-lable">Ф.И.О</label>
                            			<div class="controls">
                            				<input type="text" name="name" class="form-control @error('name') border-red @enderror" placeholder="name" value="{{old('name')}}" >


                            			</div>
                                         @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                            		</div>



                            		<div class="form-group">
									<label class="control-lable" for="email">Email</label>
									<div class="controls">
										<input type="text" name="email" class="form-control @error('question') border-red @enderror" placeholder="email" value="{{old('email')}}" >
									</div>
									 @error('email')
									<span class="invalid-feedback" role="alert">
									    <strong>{{ $message }}</strong>
									</span>
									@enderror

									</div>

                                    <div class="form-group">
                                    <label class="control-lable" for="password">Пароль</label>
                                    <div class="controls">
                                        <input type="text" name="password" class="form-control @error('password') border-red @enderror" placeholder="password" value="{{old('password')}}" >
                                    </div>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
								<div class="control-group">
									<button type="submit" class="btn btn-success">Подтвердить</button>
								</div>
                            </form>

                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>






@endsection
