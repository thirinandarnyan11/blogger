<?php $__env->startSection('style'); ?>
  <style type="text/css">
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bloggercontent'); ?>
<section class="ftco-intro">
  <div class="container">
    <div class="row justify-content-start mt-5">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
          <h1>Create Post</h1>
          </div>
          <div class="card-body">
          <form action="<?php echo e(route('post.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="custom-select custom-select-sm" name="category_id" style="height: 30px;">
                      <option selected>Choose Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($row->id); ?>"
                              ><?php echo e($row->name); ?>

                          </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        </div>
                    </div>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Post Content</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="post_content" name="post_content" placeholder="What is on your mind..."></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                  <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                </div>
              </div>
               <div id="image_preview"></div>
               <div class="form-group row">
                <label for="categoryName" class="col-sm-2 col-form-label">Video</label>
                <div class="col-sm-10">
                  <input type="file" id="uploadVideo" name="uploadVideo" multiple/>
                </div>
              </div>
              <div class="form-group row mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <input type="submit" class="btn btn-primary" name='submitImage' value="Submit"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.masterblog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/createpost.blade.php ENDPATH**/ ?>