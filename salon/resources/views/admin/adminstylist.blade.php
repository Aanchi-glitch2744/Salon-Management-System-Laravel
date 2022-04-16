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

  <form action='{{url("/uploadstylist")}}' method='Post' enctype='multipart/form-data'>
    @csrf
    <div>
      <label>Name: </label>
      <input style="color: blue;" type="text" name="name" required="" placeholder="Enter Name">
    </div>
    <div>
      <label>Speciality: </label>
      <input style="color: blue;" type="text" name="speciality" require placeholder="Enter the Speciality">
    </div>
    <div>
      <label>Image: </label>
      <input type="file" name="image" require>
    </div>
    <br>
    <div>
      <input style="color: pink; background-color: green; border: 2px solid pink" type="submit" value=" Save ">
    </div>
  </form>

</div>
  
  @include("admin.adminscript")
      
   
  </body>
</html>