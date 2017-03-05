@extends('layouts.master')

@section('title', 'Settings')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    {{ $married }}
                    {{-- {{ dd(get_defined_vars()['__data']) }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
