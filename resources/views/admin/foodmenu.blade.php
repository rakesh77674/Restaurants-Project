<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        @include("admin.admincss")
  </head>
            <body>
            <div class="container-scroller" style = "background-color: #2d2f34;">
            @include("admin.navbar")
            <div style = "width:100%; text-align:center; padding:20px 40px;">
                <form action = "{{url('uploadfood')}}" method="post" enctype = "multipart/form-data">
                @csrf
                <fieldset>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Title: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "title" placeholder = "write a title" required>
                     </div>
                     <div>
                     <label style = "font-size: 24px; padding:20px 5px;">Price: </label>
                     <input style = "color: blue;padding:10px 54px; border-radius: 10px;widh:50%;" type = "text"  name = "price" placeholder = "Price" required>
                     </div>
                     <div style="width: 110%;">
                     <label style = "font-size: 24px; padding:20px 5px;">Image: </label>
                     <input style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;color:#b51f1f;" type = "file"  name = "image" placeholder = "Image" required>
                     </div>
                     <div style="width:96%">

                     <label style = "font-size: 24px; padding:20px 5px; top:20px">Description:</label>
                     <textarea name= "description" placeholder= "Description" rows="4" cols="20" style = "color: black;padding:10px 54px; border-radius: 10px;widh:50%;">
                      
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
            <div class="container-scroller" style = "background-color: #2d2f34;">
                  <div style= "display: flex; background-color: #2d2f34; justify-content: center; align-items: flex-start; width: 100%;">
            <table bgcolor="grey" style="background-color: #191c24; margin-top: 10px; width: 95%;" border="3px"  width = "100%">
                <tr style="background: #5b1e99;">
                    <th style="padding: 20px">Title</th>
                    <th style="">Price</th>
                    <th style="">Description</th>
                    <th style="">Image</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                @foreach($data as $data)
                <tr text-align="center">
                <td style="padding: 20px 20px;">{{$data->Title}}</td>
                <td>{{$data->Price}}</td>
                <td>{{$data->description}}</td>
                <td ><img height = "150" width = "150" margin = "12"src = "/foodimages/{{$data->image}}"></td>
             
               <div>
                <td style="display: flex; justify-content: center;"><a style = "background: #9e253c; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                 justify-content: center;text-decoration: none;margin: 12px;" href= "{{url('/foodmenu', $data->id)}}">Delete</a></td>
                <td style="display: flex; justify-content: center;"><a style = "background: green; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                justify-content: center;text-decoration: none;" href= "{{url('/updateview', $data->id)}}">update</a></td>
             <div>
                </tr>
                @endforeach
            </table>
        </div>
        </div>

                @include("admin.adminscript")
            </body>
</html>