@extends('backend.layouts.master')

	@section('title','Exam Assign')

	@section('content')

	<div class="span9">
     <div class="content">

     	@if(Session::has('message'))

     		<div class="alert alert-success">{{Session::get('message')}}</div>
     	@endif



     <form action="{{route('exam.assign')}}" method="GET">
		 <!-- @csrf -->

	<div class="module">
            <div class="module-head">
                <h3>Назначить тест</h3>
            </div>


            <div class="module-body">
                 <div class="control-group">
				<label class="control-lable" for="name">Выберите тест</label>
				<div class="controls">
					<select name="quiz_id" class="span8 ">
						@foreach(App\Models\Quiz::all() as $quiz)
						<option value="{{$quiz->id}}">{{$quiz->name}}</option>
						@endforeach

					</select>
				</div>
			     @error('question')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror

			</div>
                 <div class="control-group">
				<label class="control-lable" for="name">Выберите пользователя</label>
				<div class="controls">
					<select name="user_id" class="span8 ">
						@foreach(App\Models\User::where('is_admin','0')->get() as $user)
						<option value="{{$user->id}}">{{$user->name}}</option>
						@endforeach

					</select>
				</div>
			     @error('question')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror

			</div>

			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-success">Подтвердить</button>
				</div>
		    </div>

   		</div>
	</div>

</form>


</div>
</div>


@endsection
