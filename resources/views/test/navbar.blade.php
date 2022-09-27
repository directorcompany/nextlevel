<div class="wrapper">
        <div class="welcome_text">
            <form class="welcome_form" action="{{route('quiz')}}" name="welcome_form" onsubmit="submitForm(event)">    
             <input type="text" placeholder="Ф.И.О" name="name" required>
             <select class="form-control" name="options" required>
                <option></option> 
                @foreach($quizzes as $quiz)
                <option >{{$quiz->name}}</option>    
                @endforeach
            </select>
             <textarea  placeholder="Почему хотите изучать этот предмет?"  name="main" class="form-control my-4" required></textarea>
             <button>Начинать тест</button>
            </form>
        </div>
    </div>
