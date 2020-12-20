<div class="card">
            <div class="card-header">
                Administrator Panel
            </div>
            <div class="card-body">
                <p class="">Name: {{auth()->user()->name}}</p> <hr>
                <p>E-mail: <small>{{auth()->user()->email}}</small></p> <hr>
                <p>Role: ADMINISTRATOR</p> <hr>
                <p>Status: ONLINE &emsp; <i class="fas fa-circle" style="color:green;"></i></p> <hr>

            </div>
</div>