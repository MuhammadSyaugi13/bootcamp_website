@if ($messege = Session::get('error'))
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{$messege}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif