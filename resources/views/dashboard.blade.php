
@extends('layouts.app')
@section('content')


<div class="jumbotron text-left">


  <div class="container ">

        <h1> Recived messages  </h1>
       
         
      
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-align">
                <thead>
                  <tr >
            <th >Sender</th>
            <th>title</th>
            <th>Action</th>
     
            
          </tr>
        </thead>
        <tbody>
          @if(count($messages ) > 0)
        @foreach($messages  as $message)
       
           <td>{{$message->name}}</td>
          <td >{{$message->title}}</td>
          <td>
               
<a href ="#" class="show-modal button btn btn-primary btn-speces"   data-id="{{$message->id}}" data-message="{{$message->message}}">
  <i class="far fa-eye" ></i>
</a>
    
<a  type ="submit" class="button btn btn-danger btn-speces" a href ="{{route('dltmsg', $message->id)}}"><i class="far fa-trash-alt" ></i></a>

</td> 
  </tr>
    
  @endforeach
    
  @endif
 
</tbody>
 
</table>
</div>

</div>


</div>

</div>

<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                   
                    <div class="form-group">
                      <label for="message"></label>
                      <b id="by"/>
                    </div>
                    </div>
                    </div>
                  </div>
                  </div>
@endsection
   
    @section('sidebar')
    @parent
    <h3>This page contains all the messages recived.<br>
    Admin can read or delete.<h3>
    <div class="sidebar">
    <img src="https://image.flaticon.com/icons/svg/78/78948.svg" width="300" height="175">
    </div>
    @endsection
    




    