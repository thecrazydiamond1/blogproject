<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head> 
    <style type="text/css">
        .title_deg
        {
            font-size: 30px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:white;

        }
        .table_deg{
            border: 1px solid white;
            width: 80%;
            color:white;
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
    @include('admin.css')
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
        <h1 class="title_deg">All Posts</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Post Title</th>
                
                <th>Post by</th>
                <th>UserType</th>
                
                <th>Delete</th>
                <th>View post</th>
                <th>Update</th>
            </tr>
            @foreach($posts as $post)
            
                <td>{{$post->title}}</td>
                
                <td>{{$post->name}}</td>
               
                <td>{{$post->usertype}}</td>
                 <td><a href="{{url('delete_post', $post->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a></td>
                    <td><a href="{{url('detail', $post->id)}}" class="btn btn-success">View</a></td>
                    <td><a href="{{url('edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
            </tr>

            @endforeach
        </table>
       </div>
        @include  ('admin.footer') 
    </div>
  </body>
</html>