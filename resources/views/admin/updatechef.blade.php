<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href = "/public">
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
   <div class="container-scroller" style = "background-color: #2d2f34;">
            @include("admin.navbar")
            <div style = "width:100%; text-align:center; padding:20px 40px;">
                <form action = "{{url('updatechef', $data->id)}}" method="post" enctype = "multipart/form-data">
                @csrf
                <fieldset>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Name: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "name" value = "{{$data->name}}" required>
                     </div>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Speciality: </label>
                     <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "speciality" value = "{{$data->speciality}}" required>
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;">Old Image: </label>
                      <img style = "height: 150px;padding: 20px 20px;margin-left: 600px; text-align: center;" src = "/chefimage/{{$data->image}}">
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;">Image: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                     </div>
                     <div style="width:96%">
                     <div>
            
                     <input style = "color: white; border-radius: 10px; background-color:#5c1f99; width:25%;font-size: 30px;margin-left: 131px; " type = "submit" value="Submit">
                     </div>
                     </fieldset>
                </form>
       </div>
            </div>
       @include("admin.adminscript")
  </body>
</html>