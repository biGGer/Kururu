@extends('master')

@section('content')
<h2 class="sub-header">Users</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{{ $user->id }}}</td>
                    <td>{{{ $user->name }}}</td>
                    <td>{{{ $user->email }}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop