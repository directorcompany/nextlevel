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
                                <h3>Создание пользователя</h3>
                            </div>

                            <div class="card-body">
                            	<form method='post' action="<?php echo e(route('user.store')); ?>" >
                                    <?php echo csrf_field(); ?>

                            		<div class="form-group">
                            			<label class="control-lable">Ф.И.О</label>
                            			<div class="controls">
                            				<input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="name" value="<?php echo e(old('name')); ?>" >


                            			</div>
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
									<label class="control-lable" for="email">Email</label>
									<div class="controls">
										<input type="text" name="email" class="form-control <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="email" value="<?php echo e(old('email')); ?>" >
									</div>
									 <?php $__errorArgs = ['email'];
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
                                    <label class="control-lable" for="password">Пароль</label>
                                    <div class="controls">
                                        <input type="text" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="password" value="<?php echo e(old('password')); ?>" >
                                    </div>
                                     <?php $__errorArgs = ['password'];
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
									<button type="submit" class="btn btn-success">Подтвердить</button>
								</div>
                            </form>

                       		</div>
                   		</div>

                		</div>

           			</div>
        		</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Disk_C\OSPanel\domains\OpenServer\domains\nextlevel\resources\views/backend/user/create.blade.php ENDPATH**/ ?>