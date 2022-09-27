	<?php $__env->startSection('title','Админ панель'); ?>

	<?php $__env->startSection('content'); ?>

	<div class="container">
                    <div class="content">
                    	<?php if(Session::has('message')): ?>

     					<div class="alert alert-success">	
							 	<?php echo e(Session::get('message')); ?></div>
     					<?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <h3>Все вопросы</h3>
                            </div>

                            <div class="card-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Вопросы</th>
									  <th>Тест</th>
									  <th>Дата</th>
									  <th></th>
									  <th></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php if(count($questions)>0): ?>
								  	<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
									  <td><?php echo e($key+1); ?></td>
									  <td><?php echo e($question->question); ?></td>
									  <td><?php echo e($question->quiz->name); ?></td>
									   <td><?php echo e(date('F d,Y',strtotime($question->created_at))); ?></td>
									  <td>
									  	<a href="<?php echo e(route('question.show',[$question->id])); ?>"> <button class="btn btn-info">Вид</button></a>
									  </td>

									  <td>
									  		<a href="<?php echo e(route('question.edit',[$question->id])); ?>">
									  			<button class="btn btn-primary">Редактор</button>

									  		</a>

									  </td>
									  <td>

									  	<form id="delete-form<?php echo e($question->id); ?>" method="POST" action="<?php echo e(route('question.destroy',[$question->id])); ?>" >
											  <?php echo csrf_field(); ?>
									  		<?php echo e(method_field('DELETE')); ?>


									  	</form>
									  	<a href="#" onclick="if(confirm('Вы хотите удалить?')){

									  		event.preventDefault();
									  		document.getElementById('delete-form<?php echo e($question->id); ?>').submit()
									  	}else{
									  		event.preventDefault();
									  	}

									  	">
									  	<input type="submit" value="Удалить" class="btn btn-danger">
									  </a>



									  </td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									<?php else: ?>
									<td>No question to display</td>
									<?php endif; ?>


								  </tbody>
								</table>
								<div class="pagination pagination-centered" >
									<?php echo e($questions->links()); ?>

								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/question/index.blade.php ENDPATH**/ ?>