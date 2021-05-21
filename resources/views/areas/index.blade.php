@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col-2">
            <a href="{{ route('areas.create') }}" class="btn btn-success">SET UP NEW SHOP</a>
        </div>
    </div>
    <br/>
    <div class="card">
        <div style="background-color: brown" class="card-header"><h3 style="color:white">Registered
                Shops</h3></div>
        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-sm table-bordered table-striped table-hover datatable">
                    <thead>
                    <tr>
                        {{--                <th>ID</th>--}}
                        <th>Shop ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Reg No</th>
                        <th>Telephone</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        {{-- <th>Category</th> --}}
                        <th>Status</th>
                        <th>Option</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $key => $shop)

                        <tr data-entry-id="{{ $shop->id }}">
                            <td>{{$shop->id}}</td>
                            <td> <img class="img-thumbnail" width="170"  height="150" src="{{ asset('/storage/files/'.$shop->photo) }}" alt="" title=""></td>
                            {{-- <td><img class="img-thumbnail" width="170"  height="150" src="{{ url('storage/files/'.$shop->photo) }}" alt="" title="" /></td> --}}
                            <td>{{$shop->name}}</td>
                            <td>{{$shop->reg_no}}</td>
                            <td>{{$shop->telephone}}</td>
                            <td>{{$shop->description}}</td>
                            <td>{{$shop->address}}</td>
                            <td>{{$shop->latitude}}</td>
                            <td>{{$shop->longitude}}</td>
                            {{-- <td>{{$shop->category->name}}</td> --}}
                            @switch($shop->status)
                            @case('1')
                            <td>Inactive</td>
                            @break;
                            @case('0')
                            <td>Active</td>
                            @break;
                            @endswitch
                            <td>
                                <a href="{{ route('categories.edit', $shop->id) }}"
                                   class="btn btn-warning btn-sm">EDIT</a>
                                <form action="{{ route('categories.destroy', $shop->id) }}" method="POST"
                                      onsubmit="return confirm('{{ trans('Are You Sure?') }}');"
                                      style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger btn-sm"
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
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        });
    </script>
@endsection
