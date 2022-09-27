    <?php $__env->startSection('title', 'Админ панель'); ?>
    <?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="content">

            <div class="card">
                <div class="card-header">
                    <h3>Все тесты</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Имя</th>
                          <th>Описание</th>
                          
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php if(count($quizzes)>0): ?>
                          <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($key+1); ?></td>
                                <td><?php echo e($quiz->name); ?></td>
                                <td><?php echo e($quiz->description); ?></td>
                                
                                <td>
                                    <a href="<?php echo e(route('quiz.question',[$quiz->id])); ?>">
                                        <button class="btn btn-info">Вид</button>
                                    </a>
                                </td>


                                <td>
                                    <a href="<?php echo e(route('quiz.edit',[$quiz->id])); ?>">
                                        <button class="btn btn-primary">Редактор</button>
                                    </a>
                                </td>
                                <td>
                                    <form id="delete-form<?php echo e($quiz->id); ?>" method="post"
                                        action="<?php echo e(route('quiz.destroy',[$quiz->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                    </form>
                                    <a href="#" onclick="if(confirm('Вы хотите удалить?')){

                                            event.preventDefault();
                                            document.getElementById('delete-form<?php echo e($quiz->id); ?>').submit()
                                        }else{
                                            event.preventDefault();
                                        }

                                        ">
                                        <input type="submit" value='Удалить' class='btn btn-danger'>
                                    </a>
                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                          <td></td>
                          <?php endif; ?>
                      </tbody>
                    </table>
                   </div>
               </div>

            </div>

           </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/quiz/index.blade.php ENDPATH**/ ?>