	<?php $__env->startSection('title','Админ панель'); ?>

	<?php $__env->startSection('content'); ?>

	<div class="container-fluid">
                    <div class="content">
                    	<?php if(Session::has('message')): ?>

     					<div class="alert alert-success">		<?php echo e(Session::get('message')); ?></div>
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
									  <th>Имя</th>
									  <th>Email</th>
									  <th>Пароль</th>
									  <th></th>
									  <th></th>
									</tr>
								  </thead>
								  <tbody>
								  	<?php if(count($users)>0): ?>
								  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
									  <td><?php echo e($key+1); ?></td>
									  <td><?php echo e($user->name); ?></td>
									  <td><?php echo e($user->email); ?></td>
									  <td>*****</td>


									  <td>
									  		<a href="<?php echo e(route('user.edit',[$user->id])); ?>">
									  			<button class="btn btn-primary">Редактор</button>

									  		</a>

									  </td>
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
									<?php echo e($users->links()); ?>

								</div>
                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/user/index.blade.php ENDPATH**/ ?>