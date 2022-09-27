<div class="wrapper">
        <div class="welcome_text">
            <form class="welcome_form" action="<?php echo e(route('quiz')); ?>" name="welcome_form" onsubmit="submitForm(event)">    
             <input type="text" placeholder="Ф.И.О" name="name" required>
             <select class="form-control" name="options" required>
                <option></option> 
                <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option ><?php echo e($quiz->name); ?></option>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
             <textarea  placeholder="Почему хотите изучать этот предмет?"  name="main" class="form-control my-4" required></textarea>
             <button>Начинать тест</button>
            </form>
        </div>
    </div>
<?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/test/navbar.blade.php ENDPATH**/ ?>