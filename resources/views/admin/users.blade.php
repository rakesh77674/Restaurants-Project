<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
  
   <div class="container-scroller">
    @include("admin.navbar")  
    <div style= "display: flex; background-color: #2d2f34; justify-content: center; align-items: flex-start; width: 100%;">
            <table bgcolor="grey" style="background-color: #191c24; margin-top: 10px; width: 95%;" border="3px"  width = "100%">
                <tr style="background: #5b1e99;">
                    <th style="padding: 20px">Name</th>
                    <th style="">Email</th>
                    <th style="text-align: center;">Action</th>
                </tr>

                @foreach($data as $data)
                <tr text-align="center">
                <td style="padding: 20px 20px;">{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")
                <td style="display: flex; justify-content: center;"><a style = "background: #9e253c; color: white; display: flex; width: 100px; padding: 8px 20px;border-radius: 5px;
                                justify-content: center;text-decoration: none;" href= "{{url('/userdelete', $data->id)}}">Delete</a></td>
                @else
                <td style = "text-align: center;"><a style = " background: #5d516a; color: white; width: 20%; padding:8px 15px; border-radius: 3px; text-decoration: none;"href = "">Not allowed</a></td>
                @endif
                </tr>
                @endforeach
            </table>
        </div>
   </div>
      
       @include("admin.adminscript")
  </body>
</html>