@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <p>
                        Age: @age([1996,25,2])
                    </p>

                    <p>
                        @sayHello(Auth::user()->email)
                    </p>
                    {{-- {{ $married }} --}}
                    <?php echo '<p>' . $married . '</p>' ?>
                    {{-- {{ dd(get_defined_vars()['__data']) }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
