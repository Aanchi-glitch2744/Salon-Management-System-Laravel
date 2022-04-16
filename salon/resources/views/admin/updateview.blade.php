<x-app-layout>
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
  
  @include("admin.admincss")

  </head>
  <body>

  <div class="container-scroller">
  
  @include("admin.navbar")  

  <div style="position: relative; top:60px; right: -150px;">
      <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

      @csrf 

            <div style="margin-bottom: 20px;"> 
                <label>Title: </label> 
                <input type="text" name="title" value="{{$data->title}}" required style="color:blue;">
             </div>
            <div style="margin-bottom: 20px;">
                 <label>Price: </label> 
                 <input type="num" name="price" value="{{$data->price}}" required style="color:blue;"> 
            </div>
            
            <div style="margin-bottom: 20px;">
                 <label>Description: </label> 
                 <input type="text" name="description" value="{{$data->description}}" required style="color:blue;"> 
            </div>
            
            <div style="margin-bottom: 20px;">
                 <label>Previous Image: </label> 
                 <img height="200" width="200" src="/servicesimage/{{$data->image}}">
            </div>
            <div style="margin-bottom: 20px;">
                 <label>New Image: </label> 
                 <input type="file" name="image" required>
            </div>
            <br>
            <div style="margin-bottom: 20px;">
                 <input style="color:pink; padding:3px; border:1px solid pink; background-color: green" type="submit" value=" Save "> 
            </div>
      </form>

      <div>

</div>
  
  @include("admin.adminscript")
      
   
  </body>
</html>