<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <head> 
    @include('admin.css')
    <style type="text/css">
        .post_title
        {
            font-size: 30px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:white;

        }
        .div_center{
            text-align: center;
            padding:30px;
        }
        label{
            display:inline-block;
            width:200px;
        }

        .img_deg{
            height:auto;
            width: 100px;
            padding: 10px;
            margin:auto;
            
        }
        </style>
      
  </head>
  <body>

   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     
       @include('admin.sidebar')
     
            <!-- Sidebar Navigation end-->
            <div class="page-content">
     
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
             
                <h1 class="post_title">Update Post</h1>
                <div>
                
                    <form action="{{url('update', $posts->id)}}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    
                        <div class="div_center">
                            <label>Post Title</label>
                            <input type="text" name="title" value="{{ $posts->title }}">
                        </div>
                        
                        <div class="div_center">
                            <label>Post Description</label>
                            <textarea name="description" >{{$posts->description}}</textarea>
                        </div>
                        <div class="div_center">
                            <label>Add New Image</label>
                            <input type="file" name="image" value="{{ $posts->image }}">

                        </div>
                        <div class="div_center">
                            <label>Old Image</label>
                            <img src="{{ asset('postimage/' . $posts->image) }}" alt="Post Image" class="img_deg">

                        </div>
                        <div class="div_center">
                            <input type="submit" class="btn btn-primary" value="Update ">

                        </div>
                    </form>
                </div>
   </div>
        @include  ('admin.footer') 
    </div>
  </body>
</html>