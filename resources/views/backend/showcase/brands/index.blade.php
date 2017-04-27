@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.showcase.brand.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.showcase.brand.management') }}
        <small>{{ trans('labels.backend.showcase.brand.visible') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.showcase.brand.visible') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.showcase.brands.brand-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.showcase.brand.table.name') }}</th>
					<th>{{ trans('labels.backend.showcase.brand.table.country_id') }}</th>
					<th>{{ trans('labels.backend.showcase.brand.table.is_visible') }}</th>
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
            {!! history()->renderType('Brand') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')
    {{ Html::script("js/backend/plugin/datatables/jquery.dataTables.min.js") }}
    {{ Html::script("js/backend/plugin/datatables/dataTables.bootstrap.min.js") }}

    <script>
        $(function() {
            $('#users-table').DataTable({
                "lengthMenu": [ 25, 50, 75, 100 ],
                "language": {
                    "search": "Поиск:"
                },
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.showcase.brand.get") }}',
                    type: 'post',
                    data: {is_visible: 1, trashed: false}
                },
                columns: [
                    {data: 'name', name: 'brands.name'},
					{data: 'country_id', name: 'brands.country_id'},
					{data: 'is_visible', name: 'brands.is_visible'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection
