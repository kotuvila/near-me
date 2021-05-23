@extends('layouts.master')



@section('content')

    <div class="card">

        <div class="card-header" style="background-color: brown">
            <h3 style="color:white">Edit Item Details</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('shops.update', $shop->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">

                        <div class="row form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <div class="col-md-3">
                                <lable>Shop ID<span style="color: red">*</span>:</lable><br>
                            </div>
                            <div class="col-md-9">
                                <input type="text" value="{{ $shop->id }}" readonly name="id" id="ID"
                                    class="form-control form-control-sm"
                                    value="{{ old('id', isset($shop) ? $shop->id : '') }}" />
                                @if ($errors->has('id'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('id') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Shop Name<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control form-control-sm"
                                    placeholder="Enter Name Here"
                                    value="{{ old('name', isset($shop) ? $shop->name : '') }}">
                                @if ($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                            </div>
                        </div>



                        <div class="row form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Shop Photo<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="file" name="photo" class="form-control" placeholder="image"
                                    value="{{ old('photo', isset($shop) ? $shop->photo : '') }}">
                                <img src="{{ asset('/storage/files/' . $shop->photo) }}" width="300px">
                                @if ($errors->has('photo'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('photo') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('reg_no') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Business Register No(optional)<span style="color: red"></span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="reg_no" class="form-control form-control-sm"
                                    placeholder="Enter  Name Here"
                                    value="{{ old('reg_no', isset($shop) ? $shop->reg_no : '') }}">
                                @if ($errors->has('reg_no'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('reg_no') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Telephone<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="telephone" class="form-control form-control-sm"
                                    placeholder="Enter  Telephone Number Here"
                                    value="{{ old('telephone', isset($shop) ? $shop->telephone : '') }}">
                                @if ($errors->has('telephone'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('telephone') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Description:</lable>
                            </div>
                            <div class="col-lg-9">
                                <textarea type="text" name="description" class="form-control form-control-sm"
                                    placeholder="Enter  Description Here">{{ old('description', isset($shop) ? $shop->description : '') }}</textarea>
                                @if ($errors->has('description'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Address:</lable>
                            </div>
                            <div class="col-lg-9">
                                <textarea type="text" name="address" class="form-control form-control-sm"
                                    placeholder="Enter  address Here">{{ old('address', isset($shop) ? $shop->description : '') }}</textarea>
                                @if ($errors->has('address'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('address') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        {{-- <div class="row form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <div class="col-lg-3"><lable>Category:</lable></div>
                            <div class="col-lg-9">
                                <select class="form-control form-control-sm" name="category_id" id="category_id" value="{{ old('category', isset($shop) ? $shop->category : '') }}">
                                    <option hidden disabled>Select Category</option>
                                    @foreach ($categories as $id => $category)
                                        <option
                                            value="{{ $category->id }}" {{ isset($category) && $category->id == $shop->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('category') }}
                                    </em>
                                @endif
                            </div>
                        </div> --}}


                        <div class="row form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Latitude<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="latitude" id="lat-span" class="form-control form-control-sm"
                                    placeholder="Enter  latitude Here"
                                    value="{{ old('latitude', isset($shop) ? $shop->latitude : '') }}">
                                {{-- <span id="lat-span"></span></li> --}}
                                @if ($errors->has('latitude'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('latitude') }}
                                    </em>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable> Longitude<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" id="lon-span" name="longitude" class="form-control form-control-sm"
                                    placeholder="Enter  longitude Here"
                                    value="{{ old('longitude', isset($shop) ? $shop->longitude : '') }}">
                                {{-- <span id="lon-span"></span></li> --}}
                                @if ($errors->has('longitude'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('longitude') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable>Select Store Location<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <button type="button" onclick="showPosition();">Show My Store on Google Map</button>
                                {{-- <input type="hidden" name="latitude" id="latitude" value="0" />
                                <input type="hidden" name="longitude" id="longitude" value="0" /> --}}
                                <div id="embedMap" style="width: 400px; height: 300px;">
                                    <!--Google map will be embedded here-->
                                </div>
                            </div>
                        </div>

                        <div class="row form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <div class="col-lg-3">
                                <lable>Status<span style="color: red">*</span>:</lable>
                            </div>
                            <div class="col-lg-9">
                                <select name="status" class="form-control form-control-sm"
                                    value="{{ old('status', isset($shop) ? $shop->status : '') }}">
                                    <option disabled>Select Status</option>
                                    @switch($shop->status)
                                        @case('0')
                                            <option value="0" selected>Active</option>
                                            <option value="1">Inactive</option>
                                        @break;
                                        @case('1')
                                            <option value="1" selected>Inactive</option>
                                            <option value="0">Active</option>
                                        @break;
                                    @endswitch
                                    {{-- <option value="Active" {{ old('active', $shop->active == 'Active' ? 'selected' : '') }} >Active</option>
                                    <option value="Inactive" {{ old('inactive', $shop->active == 'Inactive' ? 'selected' : '') }}>Inactive</option> --}}
                                </select>
                                @if ($errors->has('status'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                    </em>
                                @endif
                            </div>
                        </div>


                        <div class="row">
                            <div class="offset-10 col-md-1">
                                <input type="submit" value="Update" class="btn btn-success" />
                            </div>
                            <div class="col-lg-1">
                                <a class="btn btn-light" href="{{ url()->previous() }}">Cancel</a>
                            </div>
                        </div>

                    </div>
                </div>




            </form>
        </div>
    </div>


    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        function showPosition() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showMap, showError);
            } else {
                alert("Sorry, your browser does not support HTML5 geolocation.");
            }
        }

        // Define callback function for successful attempt
        function showMap(position) {
            // Get location data
            lat = position.coords.latitude;
            long = position.coords.longitude;
            var latlong = new google.maps.LatLng(lat, long);

            var myOptions = {
                center: latlong,
                zoom: 16,
                mapTypeControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                }

            }

            var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
            var marker = new google.maps.Marker({
                position: latlong,
                map: map,
                draggable: true,
                title: "You are here!"
            });

            google.maps.event.addListener(marker, 'dragend', function(marker) {
                var latLng = marker.latLng;

                var x = latLng.lat();
                var y = latLng.lng();

                document.getElementById("lat-span").value = x;
                document.getElementById("lon-span").value = y;


                // document.getElementById('lat-span').innerHTML = latLng.lat();
                // document.getElementById('lon-span').innerHTML = latLng.lng();
            });
        }

        // Define callback function for failed attempt
        function showError(error) {
            if (error.code == 1) {
                result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
            } else if (error.code == 2) {
                result.innerHTML = "The network is down or the positioning service can't be reached.";
            } else if (error.code == 3) {
                result.innerHTML = "The attempt timed out before it could get the location data.";
            } else {
                result.innerHTML = "Geolocation failed due to unknown error.";
            }
        }

    </script>



@endsection
