@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-grey">
    <h1 class="display-4">Let's get in touch!</h1>
  <div class="row">
    <div class="col-sm-5">
      <p><span class="glyphicon glyphicon-map-marker"></span> Yogyakarta, Indonesia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +62 xxx xxx xxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span> niki.hidayati@mail.ugm.ac.id</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
    
    <!-- social medias -->
    <div class="social noselect">
      <button onclick='location.href="https://github.com/nikihdyt"' class="social_button"><i class="fab fa-github"></i></button>
      <button onclick='location.href="https://www.linkedin.com/in/niki-hidayati/"' class="social_button"><i class="fab fa-linkedin-in"></i></button>
      <button onclick='location.href="https://g.dev/nikihdyti"' class="social_button"><i class="fa fa-code"></i></button>
    </div>

  </div>
</div>
@endsection