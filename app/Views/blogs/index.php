 <!-- Blogs-->
 <section class="blog-section" id="blog">
   <div class="container">
     <h2 class="text-center mt-0">Recent Blogs</h2>
     <a href="/blog/create" class="btn btn-primary">Create</a>
     <hr class="divider" />
     <div class="row gx-4 gx-lg-5">
       <?php foreach ($blogs as $blog) : ?>
         <div class="col-lg-3 col-md-6 text-center">
           <div class="card mt-5">
             <div class="card-header">
               <h3 class="card-title"><?= esc($blog['blog_title']) ?></h3>
             </div>
             <div class="card-body">
               <p class="card-text"><?= esc($blog['blog_description']) ?></p>
             </div>
             <div class="card-footer">
               <a href="/blog/view/<?= $blog['blog_id'] ?>" class="btn btn-primary">View</a>
               <a href="/blog/edit/<?= $blog['blog_id'] ?>" class="btn btn-warning">Edit</a>
               <form action="/blog/delete/<?= $blog['blog_id'] ?>" method="post">
                 <?= csrf_field() ?>
                 <button class="btn btn-danger" type="submit">Delete</button>
               </form>
             </div>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </div>
 </section>