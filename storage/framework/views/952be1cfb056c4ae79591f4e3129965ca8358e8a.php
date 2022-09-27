<?php $__env->startSection('title','Админ панель'); ?>


<?php $__env->startSection('content'); ?>

<div class="container">
            <div class="content">
                 <?php if(Session::has('message')): ?>

                        <div class="alert alert-success">       
                           <?php echo e(Session::get('message')); ?>

                        </div>
                     <?php endif; ?>
                <div class="card">
                    <div class="card-header">


                    </div>

                    <div class="card-body">


                    <p><h3  class="heading"><?php echo e($question->question); ?></h3></p>



                        <div class="card-body table">
                            <table class="table table-striped">
                                <tbody>
                                    <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <tr class="read">


                                        <td class="cell-author hidden-phone hidden-tablet">
                                            <?php echo e($key+1); ?>. <?php echo e($answer->answer); ?>

                                            <?php if($answer->is_correct): ?>
                                            <span class="badge badge-success pull-right">Правильный</b></span>
                                            <?php endif; ?>

                                        </td>




                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </tbody>
                            </table>
                        </div>

                        <div class="module-foot">
                           <a href="<?php echo e(route('question.edit',[$question->id])); ?>"> <button class="btn btn-primary">Редактировать</button></a>

                        <form id="delete-form<?php echo e($question->id); ?>" method="post" action="<?php echo e(route('question.destroy',[$question->id])); ?>" style="display: none"><?php echo csrf_field(); ?>
                          <?php echo e(method_field('DELETE')); ?>




                        </form>
                        <a href="" onclick="if(confirm('Вы хотите удалить?')){
                          event.preventDefault();
                          document.getElementById('delete-form<?php echo e($question->id); ?>').submit();
                        }else{
                          event.preventDefault();
                        }


                        ">

                       <input type="submit" value="Удалить" class="btn btn-danger">
                       </a>
                             <a href="<?php echo e(route('question.index')); ?>"><button class="btn btn-secondary pull-right">Назад</button></a>






                        </div>


                    </div>
               </div>

            </div>

         </div>
    </div>

    </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/question/show.blade.php ENDPATH**/ ?>