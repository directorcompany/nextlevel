@extends('backend.layouts.master')

	@section('title','Админ панель')

	@section('content')

	<div class="container">
     <div class="content">

     	@if(Session::has('message'))

     		<div class="alert alert-success">{{Session::get('message')}}</div>
     	@endif



     <form action="{{route('question.update',[$question->id])}}" method="POST">
		 @csrf
     	{{method_field('PUT')}}

	<div class="card">
            <div class="card-header">
                <h3>Редактирование вопросов</h3>
            </div>


            <div class="card-body">
                 <div class="form-group">
				<label class="control-lable" for="name">Выбирайте тестов</label>
				<div class="controls">
					<select name="quiz" class="form-control">
						<option value=""></option>
						@foreach(App\Models\Quiz::all() as $quiz)
						<option value="{{$quiz->id}}"
							@if($quiz->id==$question->quiz_id)selected
							@endif

							>{{$quiz->name}}</option>
						@endforeach

					</select>
				</div>
			     @error('question')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror

			</div>

            <div class="form-group">
				<label class="control-lable" for="name">Имя вопроса</label>
				<div class="controls">
					<input type="text" name="question" class="form-control @error('name') border-red @enderror" placeholder="name of a quiz" value="{{$question->question}}" >
				</div>
			     @error('question')
			    <span class="invalid-feedback" role="alert">
			        <strong>{{ $message }}</strong>
			    </span>
			@enderror

			</div>

			 <div class="form-group">
				<label class="control-lable" for="options">Варианты</label>
			@foreach($question->answers as $key=>$answer)
				<div class="row my-2">
				 <div class="col-md-10">
					<input type="text" name="options[]" class="form-control" value="{{$answer->answer}}" required="" >
                 </div>
				
				<div class="col-md-2">
				<span>	<input type="radio" class="form-check-input" name="correct_answer" value="{{$key}}"@if($answer->is_correct){{'checked'}}@endif

					>Правильный ответ</span>
				</div>
				</div>
			@endforeach
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
