@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h2>Profile</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <p>Ini adalah halaman profile</p>
        </div>
    </div>
</div>
@endsection
