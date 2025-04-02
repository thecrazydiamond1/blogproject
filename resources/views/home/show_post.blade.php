<!DOCTYPE html>
<html lang="en">
   <head>
    
   
    @include('home.homecss')
    <style type="text/css">
        .title_deg
        {
            font-size: 30px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:black;

        }
        .table_deg{
            border: 1px solid white;
            width: 80%;
            color:black;
            font-weight: light;
            text-align: center;
            margin-left: 30px;
        }
        .th_deg{
            background-color: skyblue;
        }
        .img_deg{
            height: 100px;
            width: 150px;
            padding: 10px;
        }
        /* .btn-btn{
            background-color: green;
            color: white;
            padding: 5px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
        }
        .btn-btn:hover{
            
            text-decoration: none;
        } */
        
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
        <h1 class="title_deg">All Posts</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Post Title</th>
                
                <th>Post by</th>
                <th>UserType</th>
                
                <th>Delete</th>
                
                <th>Update</th>
                <th>View post</th>
            </tr>
            @foreach($posts as $post)
            
                <td>{{$post->title}}</td>
                
                <td>{{$post->name}}</td>
               
                <td>{{$post->usertype}}</td>
                @if(Auth::user() && $post->usertype=='user' && $post->user_id==Auth::user()->id)
                 <td><a href="{{url('destroy_post', $post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a></td>
                    <td><a href="{{url('edit_post', $post->id)}}" class="btn btn-primary">Edit</a></td>
                    @else 
                    <td>-</td>
                    <td>-</td>
                    @endif
                    <td><a href="{{url('show_details', $post->id)}}" class="btn btn-success">View</a></td>
            </tr>

            @endforeach
        </table>
                 


 
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