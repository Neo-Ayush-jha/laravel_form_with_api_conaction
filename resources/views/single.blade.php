@extends('header')
<style>
    .hover02 figure img {
        width: 300px;
        height: 450px;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }

    .hover02 figure:hover img {
        width: 340px;
        height: 550px;
    }
</style>
@section('data')
    <div class="col-8 border offset-md-2 mt-3 p-1">
        <div class="row" style="height:550px">
            <div class="col-4 mt-3 me-1">
                <div class="column">
                    <div class="hover02 column">
                        <div>
                            <figure><img src="{{ asset('image/' . $form->image) }}" /></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $form->name }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $form->contact }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $form->email_id }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td> {{ $form->address }} </td>
                    </tr>
                    <tr>
                        <th>city and state</th>
                        <td> {{ $form->city }} {{ $form->state }}</td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col my-3">
                        <a href="" class="btn btn-success">Done</a>
                        <a href="" class="btn btn-warning">Edit</a>
                    </div>

                </div>
            </div>
        </div>
    @endsection
