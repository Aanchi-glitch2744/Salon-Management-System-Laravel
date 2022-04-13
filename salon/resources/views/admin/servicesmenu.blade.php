<x-app-layout>
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include("admin.admincss")

  </head>
  <body>

  <div class="container-scroller">
  
  @include("admin.navbar")  

  <div style="position: relative; top:60px; right: -150px;">
      <form action="{{url('/uploadservices')}}" method="post" enctype="multipart/form-data">

      @csrf 

            <div style="margin-bottom: 20px;"> 
                <label>Title: </label> 
                <input type="text" name="title" placeholder=" Write a title " required style="color:blue;">
             </div>
            <div style="margin-bottom: 20px;">
                 <label>Price: </label> 
                 <input type="num" name="price" placeholder=" Price " required style="color:blue;"> 
            </div>
            <div style="margin-bottom: 20px;">
                 <label>Image: </label> 
                 <input type="file" name="image" required>
            </div>
            <div style="margin-bottom: 20px;">
                 <label>Description: </label> 
                 <input type="text" name="description" placeholder=" Description " required style="color:blue;"> 
            </div>
            <div style="margin-bottom: 20px;">
                 <input style="color:pink; padding:2px; border:1px solid pink; background-color: green" type="submit" value=" Save "> 
            </div>
      </form>
  </div>

</div>
  
  @include("admin.adminscript")
      
   
  </body>
</html>