@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    View User
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom_css/profile.css') }}" />
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>User Profile</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-fw fa-home"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li>
                User Profile
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="text-center mbl">
                                    @if($user->pic)
                                        <img src="{{{ url('/').'/uploads/users/'.$user->pic }}}" alt="img" class="img-circle img-bor"/>
                                    @else
                                        <img src="http://api.adorable.io/avatars/128/{{{ $user->email }}}" alt="img" class="img-circle img-bor"/>
                                    @endif
                                </div>
                            </div>
                            <div align="center">
                                <h2>{{{ $user->first_name }}} {{{ $user->last_name }}}</h2>
                                <p>{{{ $user->email }}}</p>
                                <img src="{{ asset('assets/img/flaticons/social-media-09.png') }}" alt="Picture" width="30" height="30">
                                <img src="{{ asset('assets/img/flaticons/social-media-16.png') }}" alt="Picture" width="30" height="30">
                                <img src="{{ asset('assets/img/flaticons/social-media-07.png') }}" alt="Picture" width="30" height="30">
                            </div>
                            &nbsp;&nbsp;
                            <div align="center">
                                <button type="button" class="btn btn-success btn-sm">Follow</button>
                                <button type="button" class="btn btn-primary btn-sm">Message</button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="text-primary">User Name</td>
                                    <td>{{{ $user->first_name }}} {{{ $user->last_name }}}</td>
                                </tr>
                                <tr>
                                    <td class="text-primary">Email</td>
                                    <td>{{{ $user->email }}}</td>
                                </tr>
                                @if($user->phone)
                                    <tr>
                                        <td class="text-primary">Phone Number</td>
                                        <td>{{{ $user->phone }}}</td>
                                    </tr>
                                @endif
                                @if($user->address)
                                    <tr>
                                        <td class="text-primary">Address</td>
                                        <td>{{{ $user->address }}} </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td class="text-primary">Status</td>
                                    <td>
                                    @if($user->deleted_at)
                                            <span class="label label-danger">Deleted</span>
                                    @elseif($user->activated)
                                            <span class="label label-success">Active</span>
                                    @else
                                            <span class="label label-warning">Not Active</span>
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">Facebook</td>
                                    <td>Nataliapery@example.com</td>
                                </tr>
                                <tr>
                                    <td class="text-primary">Skype</td>
                                    <td>Nataliapery1234</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop