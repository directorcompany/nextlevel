    <?php $__env->startSection('title', 'Админ панель'); ?>
    <?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="content">
<form action="<?php echo e(route('quiz.update',[$quiz->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PUT')); ?>

    

            <?php if(Session::has('message')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            <?php endif; ?>



            <div class="card">
                <div class="card-header">
                    <h3>Создание тестов</h3>
                </div>

                
                <div class="card-body">
                    <div class="form-group">
                        <label for="quiz-name" class="control-label">Имя теста</label>


                        
                        <div class="controls">
                            <input type="text" class="form-control" name="name" placeholder="имя тестов" value="<?php echo e($quiz->name); ?>">
                             <br>
                            <?php $__errorArgs = ['name'];
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
                            <label for="quiz-description" class="control-label">Описание тестов</label>
                            <textarea name="description"  class="form-control" placeholder="Quiz description"><?php echo e($quiz->description); ?></textarea>
                             <br>
                            <?php $__errorArgs = ['description'];
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





<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/quiz/edit.blade.php ENDPATH**/ ?>