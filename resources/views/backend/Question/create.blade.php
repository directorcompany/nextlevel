@extends('backend.layouts.master')

	@section('title','create quiz')

	@section('content')

<div class="container">
              <div class="content mt-4">
				  
			  @if(Session::has('message'))

<div class="alert alert-success">{{Session::get('message')}}</div>
@endif

<form action="{{route('question.store')}}" method="POST">
	@csrf

<div class="card">
<div class="card-header">
   <h3>Создание Вопросов</h3>
</div>


<div class="card-body">
	<div class="form-group">
   <label class="" for="name">Выбирайте Тестов</label>
   <div class="form">
	   <select name="quiz" class="form-control">
		   <option value=""></option>
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

<div class="form-group">
   <label class="control-lable" for="name">Имя вопроса</label>
   <div class="controls">
	   <input type="text" name="question" required class="form-control @error('name') border-red @enderror" placeholder="name of a quiz" value="{{old('question')}}" >
   </div>
	@error('question')
   <span class="invalid-feedback" role="alert">
	   <strong>{{ $message }}</strong>
   </span>
@enderror

</div>

<div class="form-group ">
   <label class="control-lable mr-2" for="options">Варианты</label>

      @for($i=0;$i<4;$i++)
 <div class="row my-2 ml-0">

  	   <div class="col-md-8">
	   <input type="text" name="options[]"  class="form-control @error('name') border-red @enderror" placeholder=" options{{$i+1}}" required="" >
       </div>
	   <div class="col-md-4">
	 <span class="ml-4"> <input type="radio" name="correct_answer"  required value="{{$i}}" class="form-check-input">Это правильный ответ </span>
	   </div>	
 </div>
        @endfor

@error('question')
  <span class="invalid-feedback" role="alert">
	   <strong>{{ $message }}</strong>
   </span>
@enderror

</div>



<div class="form-group ml-2">
<button type="submit" class="btn btn-success">Подтвердить</button>
</div>

</div>
</div>
</form>

       </div>
</div>

@endsection
