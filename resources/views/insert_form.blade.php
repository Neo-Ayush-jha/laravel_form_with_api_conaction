@extends('header')
@section('data')
    <div class="container ">
        <div class="row">
            <div class="col-lg-6 col-sm-10 mt-4 mx-auto ">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="text-cEnter btn btn-warning fs-5">Apply here</a>
                        <hr>
                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 ">
                                <label for=""  mb-1 ><b>Name :-</b></label>
                                <input type="text" name="name" placeholder="Enter your name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="mb-3 col-lg-6 col-sm-12">
                                    <label for=""  mb-1><b>Contact :-</b></label>
                                    <input type="number" name="contact" placeholder="Enter your contact number"
                                        class="form-control @error('contact') is-invalid @enderror"
                                        value="{{ old('contact') }}">
                                    @error('contact')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-lg-6 col-sm-12">
                                    <label for=""  mb-1><b>Email :-</b></label>
                                    <input type="email" name="email_id" placeholder="name@example.com"
                                        class="form-control @error('email_id') is-invalid @enderror"
                                        value="{{ old('email_id') }}">
                                    @error('email_id')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for=""  mb-1><b>Photo :-</b></label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6 col-sm-12">
                                    <label for=""  mb-1><b>State :-</b></label>
                                    <input type="text" name="state" placeholder="Your state name"
                                        class="form-control @error('state') is-invalid @enderror"
                                        value="{{ old('state') }}">
                                    @error('state')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-lg-6 col-sm-12">
                                    <label for=""  mb-1><b>City :-</b></label>
                                    <input type="text" name="city" placeholder="Your city name"
                                        class="form-control @error('city') is-invalid @enderror"
                                        value="{{ old('city') }}">
                                    @error('city')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3  col">
                                <label for=""  mb-1><b>Address :-</b></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="address" placeholder="Enter your addres"
                                class="form-control @error('address') is-invalid @enderror"
                                value="{{ old('address') }}" rows="3"></textarea>
                                {{-- <input type="" name="address" placeholder="Enter your addres"
                                    class="form-control @error('address') is-invalid @enderror"
                                    value="{{ old('address') }}"> --}}
                                @error('address')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
