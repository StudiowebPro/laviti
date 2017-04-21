@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.products.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.products.management') }}
        <small>{{ trans('labels.backend.access.products.visible') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.products.visible') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.access.includes.partials.product-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.backend.access.products.table.id') }}</th>
                        <th>{{ trans('labels.backend.access.products.table.name') }}</th>
                        <th>{{ trans('labels.backend.access.products.table.price') }}</th>
                        <th>{{ trans('labels.backend.access.products.table.available') }}</th>
                        <th>{{ trans('labels.backend.access.users.table.created') }}</th>
                        <th>{{ trans('labels.backend.access.users.table.last_updated') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->renderType('User') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.access.product.get") }}',
                    type: 'post',
                    data: {is_visible: 1, trashed: false}
                },
                columns: [
                    {data: 'id', name: '{{config('access.products_table')}}.id'},
                    {data: 'name', name: '{{config('access.products_table')}}.name'},
                    {data: 'price', name: '{{config('access.products_table')}}.price'},
                    {data: 'is_available', name: '{{config('access.products_table')}}.is_available'},
                    {data: 'created_at', name: '{{config('access.products_table')}}.created_at'},
                    {data: 'updated_at', name: '{{config('access.products_table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection
