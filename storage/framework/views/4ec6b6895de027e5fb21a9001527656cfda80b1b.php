	<?php $__env->startSection('title','Админ панель'); ?>

	<?php $__env->startSection('content'); ?>

	<div class="container">
     <div class="content">

     	<?php if(Session::has('message')): ?>

     		<div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
     	<?php endif; ?>



     <form action="<?php echo e(route('question.update',[$question->id])); ?>" method="POST">
		 <?php echo csrf_field(); ?>
     	<?php echo e(method_field('PUT')); ?>


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
						<?php $__currentLoopData = App\Models\Quiz::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($quiz->id); ?>"
							<?php if($quiz->id==$question->quiz_id): ?>selected
							<?php endif; ?>

							><?php echo e($quiz->name); ?></option>
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
					<input type="text" name="question" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="name of a quiz" value="<?php echo e($question->question); ?>" >
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
				<label class="control-lable" for="options">Варианты</label>
			<?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="row my-2">
				 <div class="col-md-10">
					<input type="text" name="options[]" class="form-control" value="<?php echo e($answer->answer); ?>" required="" >
                 </div>
				
				<div class="col-md-2">
				<span>	<input type="radio" class="form-check-input" name="correct_answer" value="<?php echo e($key); ?>"<?php if($answer->is_correct): ?><?php echo e('checked'); ?><?php endif; ?>

					>Правильный ответ</span>
				</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/question/edit.blade.php ENDPATH**/ ?>