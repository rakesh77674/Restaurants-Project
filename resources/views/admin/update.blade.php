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
                <form action = "{{url('updatedata', $data->id)}}" method="post" enctype = "multipart/form-data">
                @csrf
                <fieldset>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Title: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "title" value = "{{$data->Title}}" required>
                     </div>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Price: </label>
                     <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "price" value = "{{$data->Price}}" required>
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;">Old Image: </label>
                      <img style = "height: 150px;padding: 20px 20px;margin-left: 600px; text-align: center;" src = "/foodimages/{{$data->image}}">
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;">Image: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                     </div>
                     <div style="width:96%">

                     <label style = "font-size: 24px; padding:20px 5px; top:20px">Description:</label>
                     <textarea name= "description"  rows="4" cols="20" style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;">
                      {{$data->description}}
                     </textarea>

                     
                     {{-- <label>Description</label>
                     <input style = "color: blue;" type = "text"  name = "description" placeholder = "Description" required>
                     </div> --}}
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