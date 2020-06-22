
    @section('sidebar')

    <div class="well">
    <h3>  Login successfuly </h3>
    @if(isset(Auth::user()->email))
    <div class="alert alert-success success-block">
     <strong>Welcome {{ Auth::user()->name }}</strong>
     <br />
     <a href="{{ url('/logout') }}">Logout</a>
    </div>
   @else
    <script>window.location = "/dashboard";</script>
   @endif
 </div>
 @show