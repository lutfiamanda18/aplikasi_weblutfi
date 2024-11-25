@extends('layouts.app')

@section('content')
<div class="container"  style="padding-top: 100px;">
    <h2>Your Profile</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $profile->full_name }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $profile->phone ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $profile->address ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Avatar</th>
            <td><img src="{{ asset('storage/' . $profile->avatar) }}" alt="Avatar" width="100"></td>
        </tr>
    </table>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
</div>
@endsection
