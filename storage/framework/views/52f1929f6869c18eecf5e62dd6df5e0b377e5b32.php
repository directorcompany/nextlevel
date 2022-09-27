	<?php $__env->startSection('title','create quiz'); ?>

	<?php $__env->startSection('content'); ?>

<div class="container">
              <div class="content mt-4">
				  
			  <?php if(Session::has('message')): ?>

<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<form action="<?php echo e(route('question.store')); ?>" method="POST">
	<?php echo csrf_field(); ?>

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
		   <?php $__currentLoopData = App\Models\Quiz::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		   <option value="<?php echo e($quiz->id); ?>"><?php echo e($quiz->name); ?></option>
		   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	   </select>
   </div>
	<?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="invalid-feedback" role="alert">
	   <strong><?php echo e($message); ?></strong>
   </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>

<div class="form-group">
   <label class="control-lable" for="name">Имя вопроса</label>
   <div class="controls">
	   <input type="text" name="question" required class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="name of a quiz" value="<?php echo e(old('question')); ?>" >
   </div>
	<?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="invalid-feedback" role="alert">
	   <strong><?php echo e($message); ?></strong>
   </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>

<div class="form-group ">
   <label class="control-lable mr-2" for="options">Варианты</label>

      <?php for($i=0;$i<4;$i++): ?>
 <div class="row my-2 ml-0">

  	   <div class="col-md-8">
	   <input type="text" name="options[]"  class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder=" options<?php echo e($i+1); ?>" required="" >
       </div>
	   <div class="col-md-4">
	 <span class="ml-4"> <input type="radio" name="correct_answer"  required value="<?php echo e($i); ?>" class="form-check-input">Это правильный ответ </span>
	   </div>	
 </div>
        <?php endfor; ?>

<?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  <span class="invalid-feedback" role="alert">
	   <strong><?php echo e($message); ?></strong>
   </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>



<div class="form-group ml-2">
<button type="submit" class="btn btn-success">Подтвердить</button>
</div>

</div>
</div>
</form>

       </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/question/create.blade.php ENDPATH**/ ?>