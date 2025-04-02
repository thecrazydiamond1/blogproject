<!DOCTYPE html>
<html lang="en">
   <head>
    
   
    @include('home.homecss')
    <style>
      .title{
         font-size: 30px;
         font-weight: bold;
         padding: 20px;
         color: black;
         text-decoration: underline;
         text-align: center;
         margin-top: 20px;
      }
      .description{
         font-size: 20px;
         padding: 20px;
         color: black;
         text-align: center;
         margin-top: 20px;
      }
      
     
    </style>
 
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
       
      </div>
      <!-- header section end -->
      
      <div style="text-align:center;" class="col-md-12">
    @if($posts)
    <img style="padding:20px; display:block; margin:0 auto;" src="{{ asset('postimage/' . $posts->image) }}" alt="Post Image" class="services_image">
    <h2 class="title" ><b>{{$posts->title}}<b></h2>
    <h4 class="description">{{$posts->description}}</h4>

    <p class="service_text_2">Posted by an {{$posts->name}} </p>
  

    @else
    <p>No post found.</p>
    @endif
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