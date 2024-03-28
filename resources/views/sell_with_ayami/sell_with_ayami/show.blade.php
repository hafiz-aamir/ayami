@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Sell_with_ayami {{ $sell_with_ayami->id }}</h3>
                    @can('view-'.str_slug('Sell_with_ayami'))
                        <a class="btn btn-success pull-right" href="{{ url('/sell_with_ayami/sell_with_ayami') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $sell_with_ayami->id }}</td>
                            </tr>
                            <tr><th> Receive A Home </th><td> {{ $sell_with_ayami->receive_a_home }} </td></tr><tr><th> Property Type1 </th><td> {{ $sell_with_ayami->property_type1 }} </td></tr><tr><th> Unit </th><td> {{ $sell_with_ayami->unit }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @include('layouts.admin.footer')
    </div>
@endsection

