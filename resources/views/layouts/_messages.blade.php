@if(session('message'))
  <div class="alert alert-success">
    {{ session()->get('message') }}
  </div>
@endif
