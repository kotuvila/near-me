@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ route('promotions.create') }}" class="btn btn-warning"> ADD NEW PROMO</a>
        </div>
    </div>
    <br />
    <div class="card">
        <div class="card-header" style="background-color: brown">
            <h3 style="color:white">
                Promotions</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-sm table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            {{-- <th>Status</th> --}}
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($promotions as $key => $promotion)

                            <tr data-entry-id="{{ $promotion->id }}">
                                <td>{{ $promotion->id }}</td>
                                <td>{{ $promotion->name }}</td>
                                <td>{{ $promotion->description }}</td>
                                <td>{{ $promotion->start_date }}</td>
                                <td>{{ $promotion->end_date }}</td>
                                {{-- <td>{{ $promotion->status }}</td> --}}
                                <td>
                                    <a href="{{ route('promotions.edit', $promotion->id) }}"
                                        class="btn btn-warning btn-sm" style="width: 90px">EDIT</a>
                                    <br>
                                    <br>

                                    <a href="{{ route('promotions.edit', $promotion->id) }}" style="width: 90px"
                                        class="btn btn-warning btn-sm">VIEW</a>
                                    <br>
                                    <br>

                                    <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('Are You Sure?') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input style="width: 90px" type="submit" class="btn btn-warning btn-sm"
                                            value="{{ trans('DELETE') }}">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $('.datatable:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
        });

    </script>
@endsection
