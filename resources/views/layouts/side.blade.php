<div class="card ">
    <div class="card-header"> <i class="fas fa-user"></i>&emsp; Administrator Panel</div>
    <div class="card-body">
        <p class="">Name: {{auth()->user()->name}}</p> <hr>
        <p>E-mail: <small>{{auth()->user()->email}}</small></p> <hr>
        <p>Role: ADMINISTRATOR</p> <hr>
        <p>Status: ONLINE &emsp; <i class="fas fa-circle" style="color:green;"></i></p> <hr>
        <a href="{{route('home.logout')}}" class="btn btn-danger btn-block"> <i class="fas fa-power-off"></i>&emsp; Sign out</a>

    </div>
</div>