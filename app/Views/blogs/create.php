<div class="container">
  <div class="col-lg-8">
    <form action="/blog/create" method="post">
      <?= csrf_field() ?>
      <h2><?= esc($title) ?></h2>
      <?= session()->getFlashdata('error') ?>
      <?= service('validation')->listErrors() ?>
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="blog_title" class=" form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class=" form-control" name="blog_description" cols="45" rows="4" id="description"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="/blog" class="btn btn-light">Back</a>
    </form>
  </div>
</div>