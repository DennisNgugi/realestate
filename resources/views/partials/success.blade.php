@if(session()->get('success'))
    <div class="alert alert-success" role="alert" id="flash-message">
      {{ session()->get('success') }}
    </div><br />
  @endif

  @section('script')
  <script>
  $('#flash-message').delay(3000).fadeOut(2000);
  </script>
  @stop
