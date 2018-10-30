<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">

    <!--
<div class="card-header">
Invoice
<strong>01/01/01/2018</strong>
  <span class="float-right"> <strong>Status:</strong> Pending</span>

</div>
-->

<div class="row mb-4">
<div class="col-sm-6">
<img src="{{url('images/'.$view->best_photo_1)}}" class="mb-3" alt="">
</div>

<div class="col-sm-6 my-2 ml-1">
<h6 class="mb-2"><strong>Realmast LTD</strong></h6>
<div>Bekim house, Westlands</div>
<div>Email: info@realmast.com</div>
<div>Phone: +254 722 409481</div>
</div>
</div>

<div>
  <h3>{{$view->property_name}}</h3>
  <div class="row">
  <div class="col-md-6">
  <p>Price: {{"Ksh. ".$view->price}}</p>
  <p>Location:{{$view->location->locations}}</p>
  <p>Property type: {{$view->propertytype->property_type}}</p>
  <p>Property purpose: {{$view->propertypurpose->property_purpose}}</p>
  </div>

    <div class="col-md-6">
  <p>Bedrooms: {{$view->bedrooms}}</p>
  <p>Bathrooms: {{$view->bathrooms}}</p>
  <p>Garage: {{$view->garage}}</p>
</div>
</div>
<h3>Description</h3>
<p>{{$view->description}}</p>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<img src="{{url('images/'.$view->best_photo_2)}}" alt="">
</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/js/jquery.printPage.js"></script>
