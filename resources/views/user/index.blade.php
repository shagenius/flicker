@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('layouts/admin-menu')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Active</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($users as $user) { ?>
                            <tr>
                                <td><a href="user/<?=$user->id;?>"><?=$user->id;?></a></td>
                                <td><?=$user->name;?></td>
                                <td><?=$user->email;?></td>
                                <td><?=$user->active;?></td>
                            </tr>
                        <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection