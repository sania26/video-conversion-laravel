<?php $__env->startSection('content'); ?>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mr-auto ml-auto mt-5">
        <h3 class="text-center">
            Videos
        </h3>
        <link href="https://vjs.zencdn.net/7.7.6/video-js.css" rel="stylesheet" />
    <!-- For IE8 (for Video.js versions prior to v7)
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    -->
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mt-5">
                <div class="video" >
                    <div class="title">
                        <h4>
                            <?php echo e($video->title); ?>

                        </h4>
                    </div>
                    <?php if($video->processed): ?>

                     <!-- <video src="/storage/<?php echo e($video->stream_path); ?>" class="w-100" type="application/x-mpegURL" controls></video>-->

                      <video-js id="my_video_1" class="vjs-default-skin" controls preload="auto" width="640" height="268">
    <source src="/storage/<?php echo e($video->stream_path); ?>" type="application/x-mpegURL">
   </video-js>
   <!--This is for Video.js by itself -->
   <script src="https://unpkg.com/video.js/dist/video.js"></script>
   <!--This is for HLS compatibility with all major browsers-->
   <script src = "https://unpkg.com/browse/@videojs/http-streaming@1.13.3/dist/videojs-http-streaming.min.js"></script>
   <script>
    var player = videojs('my_video_1');
   </script>



                    <?php else: ?>
                        <div class="alert alert-info w-100">
                             Please wait your Video is being processed!!!
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>