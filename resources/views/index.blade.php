@extends('header')
<style>
    .hover02 figure img {
        width: 230px;
        height: 230px;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        margin-top: 10px
    }

    .hover02 figure:hover img {
        width: 250px;
        height: 250px;
    }
</style>
@section('data')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-10 offset-md-2">
                    <div class="row ">
                        @foreach ($form as $item)
                            <div class="col-3 mt-5 mx-1 border" style="height: 430px">
                                <div class="column">
                                    <div class="hover02 column">
                                        <div>
                                            <figure><img src="{{ asset('image/' . $item->image) }}" /></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-body">
                                        <strong>{{ $item->name }}</strong>
                                        <p class="m-0 p-0"> {{ $item->address }} </p>
                                        <p class="m-0 p-0"> {{ $item->state }} {{ $item->city }}</p>
                                        <p class="m-0 text-lead p-0">{{ $item->email }}</p>
                                        <a href="{{ route('single', ['form' => $item->id]) }}"
                                            class="btn btn-success mt-2 offset-md-3 stretched-link">Apply</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
