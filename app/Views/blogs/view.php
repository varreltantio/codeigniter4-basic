 <!-- Blog -->
 <section class="blog-section" id="blog">
   <div class="container">
     <div class="row gx-4 gx-lg-5">
       <div class="col-lg-8 col-md-6">
         <h3 class="card-title"><?= esc($blog['blog_title']) ?></h3>
         <p class="card-text"><?= esc($blog['blog_description']) ?></p>
         <a href="/blog" class="btn btn-primary">Back</a>
         <a href="/blog/edit/<?= $blog['blog_id'] ?>" class="btn btn-warning">Edit</a>
         <form action="/blog/delete/<?= $blog['blog_id'] ?>" method="post">
           <?= csrf_field() ?>
           <button class="btn btn-danger" type="submit">Delete</button>
         </form>
       </div>
     </div>
 </section>