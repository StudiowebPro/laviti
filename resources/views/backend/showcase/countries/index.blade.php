@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.showcase.country.management'))

@section('after-styles')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@endsection

@section('page-header')
    <h1>
        {{ trans('labels.backend.showcase.country.management') }}
        <small>{{ trans('labels.backend.showcase.country.header_index') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.showcase.country.title_index') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.showcase.countries.country-header-buttons')
            </div><!--box-tools pull-right-->
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.showcase.country.table.name') }}</th>
					<th>{{ trans('labels.backend.showcase.country.table.is_visible') }}</th>
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
            {!! history()->renderType('Country') !!}
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
                    "search": "Поиск:",
                    paginate: {
                        first       :       '{{ trans('tables.paginate.first') }}',
                        previous    :       '{{ trans('tables.paginate.previous') }}',
                        next        :       '{{ trans('tables.paginate.next') }}',
                        last        :       '{{ trans('tables.paginate.last') }}'
                    },
                    "emptyTable"    :   '{{ trans('tables.no_data') }}',
                    "info"          :   "{{ trans('tables.show_entries.showing') }} _START_ {{ trans('tables.show_entries.to') }} _END_ {{ trans('tables.show_entries.of') }} _TOTAL_",
                    "infoEmpty"     :   "{{ trans('tables.show_entries.showing') }} 0 {{ trans('tables.show_entries.to') }} 0 {{ trans('tables.show_entries.of') }} 0"
                },
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.showcase.country.get") }}',
                    type: 'post',
                    data: {is_visible: 1, trashed: false}
                },
                columns: [
                    {data: 'name', name: 'countries.name'},
					{data: 'is_visible', name: 'countries.is_visible'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500
            });
        });
    </script>
@endsection
