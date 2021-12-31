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
                    <th style="">Phone</th>
                    <th style="">Guest</th>
                    <th style="">Date</th>
                    <th style="">Time</th>
                    <th style="">Message</th>
                   
                </tr>
                 @foreach($data as $data)
                <tr text-align="center">
                <td style="padding: 20px 20px;">{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->guest}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td style="max-width:2rem;">{{$data->message}}</td>
                

                @endforeach

       @include("admin.adminscript")
  </body>
</html>