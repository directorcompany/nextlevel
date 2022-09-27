	<?php $__env->startSection('title','Админ панель'); ?>

	<?php $__env->startSection('content'); ?>

	<div class="container-fluid">
                    <div class="content">
                    	<?php if(Session::has('message')): ?>

     					<div class="alert alert-success">	
						<?php echo e(Session::get('message')); ?>

					   </div>
     					<?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <h3>Все пользователи</h3>
                            </div>

                            <div class="card-body">
                            	<table class="table table-striped">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Ф.И.О</th>
									  <th>Предмет</th>
									  <th>Цель</th>
									  <th>Время</th>
									  <th>Оценка</th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php if(count($results)>0): ?>
								  	<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
									  <td class="number"><?php echo e(++$i); ?></td>
									  <td><?php echo e($user->name); ?></td>
									  <td><?php echo e($user->subjects); ?></td>
									  <td><?php echo e($user->main); ?></td>
									  <td><?php echo e($user->time); ?></td>
									  <td><?php echo e($user->value); ?></td>
									  <td>

									  	<form id="delete-form<?php echo e($user->id); ?>" method="POST" action="<?php echo e(route('user.destroy',[$user->id])); ?>" >
											  <?php echo csrf_field(); ?>
									  		<?php echo e(method_field('DELETE')); ?>


									  	</form>
									  	<a href="#" onclick="if(confirm('Вы хотите удалить?')){

									  		event.preventDefault();
									  		document.getElementById('delete-form<?php echo e($user->id); ?>').submit()
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
									<td>No user to display</td>
									<?php endif; ?>


								  </tbody>
								</table>
								<div class="pagination pagination-centered" >
									<?php echo e($results->links()); ?>

								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>


<?php $__env->stopSection(); ?>

<style>
td {
	max-width: 1400px;
	word-break: break-all;	
}	
.number {
	width: 5vw;
}
</style>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/start/index.blade.php ENDPATH**/ ?>