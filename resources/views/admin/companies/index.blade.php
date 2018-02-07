@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                        {{--<router-view name="example-component"></router-view>
                        <router-view></router-view>--}}
            <example-component></example-component>

        </div>
    </div>
@endsection