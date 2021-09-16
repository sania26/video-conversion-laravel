<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 mr-auto ml-auto mt-5">
        <h3 class="text-center">
            Upload Video
        </h3>
        <form method="post" action="<?php echo e(route('upload')); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="video-title">Title</label>
                <input type="text"
                       class="form-control"
                       name="title"
                       placeholder="Enter video title">
                <?php if($errors->has('title')): ?>
                    <span class="text-danger">
                        <?php echo e($errors->first('title')); ?>

                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Video File</label>
                <input type="file" class="form-control-file" name="video">

                <?php if($errors->has('video')): ?>
                    <span class="text-danger">
                        <?php echo e($errors->first('video')); ?>

                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default">
            </div>

            <?php echo e(csrf_field()); ?>

        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>