@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Sellwithayami {{ $sellwithayami->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/sellwithayami/sellwithayami') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $sellwithayami->id }}</td>
                            </tr>
                            <tr><th> Receive A Home </th><td> {{ $sellwithayami->receive_a_home }} </td></tr><tr><th> Property Type1 </th><td> {{ $sellwithayami->property_type1 }} </td></tr><tr><th> Unit </th><td> {{ $sellwithayami->unit }} </td></tr>
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

