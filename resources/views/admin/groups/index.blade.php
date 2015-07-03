@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
@lang('groups/title.management')
@parent
@stop

{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>@lang('groups/title.management')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-fw fa-home"></i>
                Dashboard
            </a>
        </li>
        <li>Groups</li>
        <li><a href="{{ route('groups') }}">Groups</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left"> <i class="fa fa-fw fa-bell-o"></i>
                        Groups List
                    </h4>
                    <div class="pull-right">
                    <a href="{{ route('create/group') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                    </div>
                </div>
                <br />
                <div class="panel-body">
                    @if ($groups->count() >= 1)

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>@lang('groups/table.id')</th>
                                    <th>@lang('groups/table.name')</th>
                                    <th>@lang('groups/table.users')</th>
                                    <th>@lang('groups/table.created_at')</th>
                                    <th>@lang('groups/table.actions')</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($groups as $group)
                                <tr>
                                    <td>{{{ $group->id }}}</td>
                                    <td>{{{ $group->name }}}</td>
                                    <td>{{{ $group->users()->count() }}}</td>
                                    <td>{{{ $group->created_at->diffForHumans() }}}</td>
                                    <td>
                                        <a href="{{ route('update/group', $group->id) }}">
                                            <i class="fa fa-fw fa-pencil text-warning"></i>
                                        </a>
                                        <!-- let's not delete 'Admin' group by accident -->
                                        @if ($group->id != 1)
                                            @if($group->users()->count())
                                                <a href="#" data-toggle="modal" data-target="#users_exists" data-name="{{{ $group->name }}}" class="users_exists">
                                                    <i class="fa fa-fw fa-info text-warning"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('confirm-delete/group', $group->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        @lang('general.noresults')
                    @endif   
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>




@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<div class="modal fade" id="users_exists" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                @lang('groups/message.users_exists')
            </div>
        </div>
    </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});
    $(document).on("click", ".users_exists", function () {

        var group_name = $(this).data('name');
        $(".modal-header h4").text( group_name+" Group" );
    });
</script>
@stop
