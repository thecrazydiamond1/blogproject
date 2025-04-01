<!DOCTYPE html>
<html lang="en">
   <head>
    
   
    @include('home.homecss')
    <style type="text/css">
        .page-content{
            margin-top:10px;
        }
        .post_title
        {
            font-size: 30px;
            margin-top:10px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:Black;

        }
        .div_center{
            text-align: center;
            padding:30px;
            color:black;
            font-weight: bold;
        }
        label{
            display:inline-block;
            width:200px;
        }
        .alert{
            margin-top:10px;
        }
        </style>
      
 
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
       
      </div>
      <!-- header section end -->
      <div class="page-content">
     
     @if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif
      
         <h1 class="post_title">Add Post</h1>
         <div>
             <form action="{{url('create_post')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="div_center">
                     <label>Post Title</label>
                     <input type="text" name="title">
                 </div>
                 <div class="div_center">
                     <label>Post Description</label>
                     <textarea name="description"></textarea>
                 </div>
                 <div class="div_center">
                     <label>Add Image</label>
                     <input type="file" name="image">

                 </div>
                 <div class="div_center">
                     <input type="submit" class="btn btn-primary">

                 </div>
             </form>
         </div>
</div>


 
      <!-- footer section start -->
    @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>