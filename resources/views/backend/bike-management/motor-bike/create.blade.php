@extends('backend.master')

@section('title', 'Create Motor Bike')

@section('body')
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>{{ isset($motorBike) ? 'update' : 'Create' }}Motor Bike</h3>
                    <a href="{{ route('admin.motor-bikes.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($motorBike) ? route('admin.motor-bikes.update', $motorBike->id) : route('admin.motor-bikes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($motorBike))
                            @method('put')
                        @endif

                        <div class="row mt-3">
                            <label for="" class="col-md-4"> Bike Brand Name</label>
                            <div class="col-md-8">
                                <select name="bike_brand_id" class=" form-control " data-toggle="select" data-placeholder="Choose ...">
                                    <option value="">Select a Bike Brand</option>
                                    @foreach($bikeBrands as $bikeBrand)
                                        <option value="{{ $bikeBrand->id }}" {{ $errors->any() ? (old('bike_brand_id')) :(isset($motorBike) && $motorBike->bike_brand_id == $bikebrand->id ? 'selected' : '')}}> {{ $bikeBrand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('bike_brand_id') <span class="text-danger">{{ $errors->first('bike_brand_id') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"> Model Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ isset($motorBike) ? $motorBike->model_name : '' }}" placeholder=" Motor Bike Model Name" />
                            </div>
                            @error('model_name') <span class="text-danger">{{ $errors->first('model_name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Other Info</label>
                            <div class="col-md-8">
                                <textarea type="text" name="other_info" class="form-control" placeholder="Bike Motor Type Other Info" id="" cols="30" rows="5">{{ isset($motorBike) ? $motorBike->other_info : '' }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control" placeholder="Bike Motor Type Image" accept="">
                                @if(isset($motorBike))
                                    <img src="{{ asset($motorBike->image) }}" alt="" style="height: 80px">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($motorBike) && $motorBike->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="{{ isset($motorBike) ? 'update' : 'Create' }} Motor Bike">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
