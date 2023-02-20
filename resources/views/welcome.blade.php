@foreach($imgFiles as $img)
 
  <img src="{{route('downloadFile', $img)}}" />
                   
 @endforeach