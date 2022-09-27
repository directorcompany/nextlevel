	<?php $__env->startSection('title','quiz questions'); ?>

	<?php $__env->startSection('content'); ?>

				<div class="container">
                    <div class="content">

                    	 <!--foreach-->
                         <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card">
                            <div class="card-header">

                                  <h3><?php echo e($quiz->name); ?></h3>

                            </div>

                            <div class="card-body">


                            <p><h3  class="heading"></h3></p>




                                <div class="card-body table">
                                     <!--foreach-->
                                     <?php $__currentLoopData = $quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <table class="table table-striped">
                                        <tbody>




                                            <tr class="read">

                                                 <?php echo e($ques->question); ?>


                                                <td class="cell-author hidden-phone hidden-tablet">
                                                     <!--foreach-->
                                                     <?php $__currentLoopData = $ques->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p>
                                                            <?php echo e($answer->answer); ?>


                                                            <?php if($answer->is_correct): ?>
                                                           <span class="badge badge-success">
                                                            Правильный ответ
                                                           </span>
                                                           <?php endif; ?>

                                                        </p>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <!--endforeach-->
                                                </td>




                                            </tr>



                                        </tbody>

                                    </table>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--endforeach-->
                                </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--endforeach-->

                                <div class="card-foot">
                                <td>
                                    <a href="<?php echo e(route('quiz.index')); ?>"><button class="btn btn-info pull-center">Назад</button></a>
                                 </td>
                                </div>


                            </div>
                   		</div>

                		</div>

           			</div>
        		</div>

            </div>
            </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/quiz/question.blade.php ENDPATH**/ ?>