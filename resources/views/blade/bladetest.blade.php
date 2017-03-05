@extends('layouts.master')

@section('title')
	Blade
@endsection

@section('body')

      <div class="jumbotron">
        <h1>Jumbotron heading</h1>
        <p class="lead">
          @if($gender == 'male')
            male
          @elseif($gender == 'female')
            female
          @else
            unknown
          @endif
        @unless(empty($text))
          {{$text}}
        @endunless

        <p>{{isset($text) ? $text : 'var does not exist' }}</p>
        <p>{{ $no_var or 'var does not exist' }}</p>
        </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
@endsection