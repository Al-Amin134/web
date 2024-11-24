<!doctype html>
<html lang="en">
<head>
    <style>
        table, th,tr,td{
            border: 1px solid;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>BookStore </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="#"> <i class="bi bi-book-half"></i> BookStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">

            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class ="row mt-2">
        <div class ="col-lg-10">
            


            <form action="<?php echo e(route('index')); ?>" method="get">
            <div class="row g-3">
                <div class="col">
                  <input type="text" name="search"  class="form-control"  placeholder="Search" value="<?php echo e(request('search')); ?>" aria-label="First name">
                </div>
                <div class="col">
                 <input type="submit" value="Search" class="btn btn-success">
                </div>
              </div>
            </form>
            
        </div>
        <div class = "col-lg-2">
            <p class="text-end">
            <a href=" /create"> <button type="button" class="btn btn-primary">Add Book</button></a>
           
           </p>
        </div>
    
    </div>
    <h1 style="text-align: center">Books Table</h1>
    <table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Price</th>
        <th colspan="3" style="text-align: center">Action</th>
    </tr>

    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td><?php echo e($book->id); ?></td>
        <td><?php echo e($book->title); ?></td>
        <td><?php echo e($book->Author); ?></td>
        <td><?php echo e($book->isbn); ?></td>
        <td><?php echo e($book->price); ?></td>
      <td><a href="<?php echo e(url('/'.$book->id.'/show')); ?>" class="btn btn-primary">View</a></td>
      <td><a href="<?php echo e(url('/'.$book->id.'/edit')); ?>"  class="btn btn-success">Edit </a></td>
   
      <td>
        <form action="<?php echo e(route('destroy')); ?>" method="post" onsubmit="return confirm('Are you sure to delete?')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="hidden" name="id" value="<?php echo e($book->id); ?>">
            <input type="submit" value="Delete"class="btn btn-danger">
        </form>
    </td>
     
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
  <?php echo e($books->links()); ?>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /home/al-amin/Desktop/laravel_final_preperation /cse4222_g3/resources/views/books/index.blade.php ENDPATH**/ ?>