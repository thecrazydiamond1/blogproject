<style>
   .service_text{
      font-size: 16px;
      font-weight: bold;
      color: black;
      
      margin-top: 20px;
   }
</style>
<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blogs </h1>
            <p class="services_text">Some of the posts are given below. You can take a view of those.</p>
            <div class="services_section_2">
               <div class="row">
                  @foreach($posts as $post)

                  <div class="col-md-4">
                  <img src="{{ asset('postimage/' . $post->image) }}" alt="Post Image" class="services_image">
                  <h4 class="service_text">{{$post->title}}</h4>
                     <p class="service_text_2">Posted by an {{$post->name}} </p>
                     <div class="btn btn-success"><a href="{{url('show_details', $post->id)}}">Read More....</a></div>
                  </div>
                @endforeach
               </div>
            </div>
         </div>
      </div>