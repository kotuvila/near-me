@extends('layouts.master')



@section('content')

    <div class="card">

        <div class="card-header bg-primary">
            <h3 style="color:white">Edit Item Details</h3>
        </div>

        <div class="card-body">

            <form action="{{ route("admin.items.update", [$item]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">

                        <div class="row form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <div class="col-md-3"><lable>ID<span style="color: red">*</span>:</lable><br></div>
                            <div class="col-md-9">
                                <input type="text" value="{{ $item->id }}" readonly name="id" id="ID" class="form-control form-control-sm" value="{{ old('id', isset($item) ? $item->id : '') }}"/>
                                @if($errors->has('id'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('id') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Item Code<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-9">
                                <input type="text" name="code" class="form-control form-control-sm"  placeholder="Enter Code Here" value="{{ old('code', isset($item) ? $item->code : '') }}">
                                @if($errors->has('code'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('code') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable> Name<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter  Name Here" value="{{ old('name', isset($item) ? $item->name : '') }}">
                                @if($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable> Description:</lable></div>
                            <div class="col-lg-9">
                                <textarea   type="text" name="description" class="form-control form-control-sm" placeholder="Enter  Description Here" >{{ old('description', isset($item) ? $item->description : '') }}</textarea>
                                @if($errors->has('description'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('supplier') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable> Supplier<span style="color: red">*</span>:</lable></div>
                            {{--                                {{ trans('global.role.fields.supplier') }}*--}}
                            <div class="col-lg-9">
                                <select class="form-control select2" name="suppliers[]" id="supplier"  multiple="multiple">
                                    @foreach($suppliers as $id => $supplier)
                                        <option value="{{ $supplier->id }}" {{ (in_array($id, old('suppliers', [])) || isset($item) && $item->supplier->contains($id)) ? 'selected' : '' }}>
                                            {{ $supplier->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('supplier'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('supplier') }}
                                    </em>
                                @endif
                                {{--                            <p class="helper-block">--}}
                                {{--                                {{ trans('global.role.fields.supplier_helper') }}--}}
                                {{--                            </p>--}}
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('brand') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Brand:</lable></div>
                            <div class="col-lg-9">
                                <select class="form-control form-control-sm" name="brand_id" id="brand_id" value="{{ old('brand', isset($item) ? $item->category : '') }}">
                                    <option hidden disabled>Select Brand</option>
                                    @foreach($brands as $id => $brand)
                                        <option
                                            value="{{ $brand->id }}" {{ isset($brand) && $brand->id == $item->brand_id ? 'selected' : '' }}>
                                            {{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('brand'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('brand') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Category:</lable></div>
                            <div class="col-lg-9">
                                <select class="form-control form-control-sm" name="category_id" id="category_id" value="{{ old('category', isset($item) ? $item->category : '') }}">
                                    <option hidden disabled>Select Category</option>
                                    @foreach($categories as $id => $category)
                                        <option
                                            value="{{ $category->id }}" {{ isset($category) && $category->id == $item->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('category'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('category') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('subcategory') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Subcategory:</lable></div>
                            <div class="col-lg-9">
                                <select class="form-control form-control-sm" name="subcategory_id" id="subcategory_id" value="{{ old('subcategory', isset($item) ? $item->subcategory : '') }}">
                                    <option hidden disabled>Select Subcategory</option>
                                    @foreach($subcategories as $id => $subcategory)
                                        <option
                                            value="{{ $subcategory->id }}" {{ isset($subcategory) && $subcategory->id == $item->subcategory_id ? 'selected' : '' }}>
                                            {{ $subcategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($errors->has('subcategory'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('subcategory') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable> Price<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-9">
                                <input type="text" name="price" class="form-control form-control-sm" placeholder="Enter  Price Here" value="{{ old('price', isset($item) ? $item->price : '') }}">
                                @if($errors->has('price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('price') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('sale_price') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Sale Price<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-9">
                                <input type="text" name="sale_price" class="form-control form-control-sm" placeholder="Enter Sale  Price Here" value="{{ old('sale_price', isset($item) ? $item->sale_price : '') }}">
                                @if($errors->has('sale_price'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('sale_price') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Amount<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-4">
                                <input type="text" name="amount" class="form-control form-control-sm" placeholder="Enter Amount Here" value="{{ old('amount', isset($item) ? $item->amount : '') }}">
                                @if($errors->has('amount'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('amount') }}
                                    </em>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <select name="amount_type" class="form-control form-control-sm" placeholder="Enter Amount Type Here" value="{{ old('amount_type', isset($item) ? $item->amount_type : '') }}">
                                    >
                                    <option hidden disabled>Select Amount Type</option>
                                    <option value="mg" {{ old('amount_type', $item->amount_type == 'mg' ? 'selected' : '') }}>mg</option>
                                    <option value="ml" {{ old('amount_type', $item->amount_type == 'ml' ? 'selected' : '') }}>ml</option>
                                </select>
                                @if($errors->has('amount_type'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('amount_type') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Status<span style="color: red">*</span>:</lable></div>
                            <div class="col-lg-9">
                                <select name="status" class="form-control form-control-sm" value="{{ old('status', isset($item) ? $item->status : '') }}">
                                    <option hidden disabled>Select Status</option>
                                    <option value="Active" {{ old('status', $item->status == 'Active' ? 'selected' : '') }} >Active</option>
                                    <option value="Inactive" {{ old('status', $item->status == 'Inactive' ? 'selected' : '') }}>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                    </em>
                                @endif
                            </div>
                        </div>








                        <div class="row">
                            <div class="offset-10 col-md-1">
                                <input type="submit" value="Update" class="btn btn-success"/>
                            </div>
                            <div class="col-lg-1">
                                <a class="btn btn-light" href="{{url()->previous()}}">Cancel</a>
                            </div>
                        </div>

                    </div>
                </div>




            </form>
        </div>
    </div>

@endsection
