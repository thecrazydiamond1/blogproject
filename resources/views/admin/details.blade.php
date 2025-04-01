<head> 
    @include('admin.css')
    <style type="text/css">
        .card-title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }
        .card-text{
            font-size: 20px;
            padding: 10px;
            color: white;
        }
        .img{
            height:auto;
            width: 100px;
            padding: 10px;
            margin:auto;
            
        }
        .card{
            border: 1px solid white;
            width: 80%;
            color: white;
            font-weight: light;
            text-align: center;
            
            background-color: #212529;
        }
        .card-body{
            background-color: #343a40;
            color: white;
            padding: 20px;
            width: 100%;
        }
        </style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
       @include('admin.sidebar')
            <!-- Sidebar Navigation end-->
            <div class="card">
 
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title ">Post Title : {{ $posts->title }}</h5>
        <p class="card-text">Description : {{ $posts->description }}</p>
        <p class="card-text">Posted By : {{ $posts->name }}</p>
        <p class="card-text">User Type: {{ $posts->usertype }}</p>
        <p class="card-text">Post Status: {{ $posts->post_status }}
        <p class="card-text">Post ID: {{ $posts->id }}

        </p>
        <p class="card-text"> <img src="{{ asset('postimage/' . $posts->image) }}" alt="Post Image"></p>

  </div>
       
    </hr>
  
  </div>
</div>
        @include  ('admin.footer') 
    </div>
  </body>