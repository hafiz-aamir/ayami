@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Edit Sell_with_ayami #{{ $sell_with_ayami->id }}</h3>
                    @can('view-'.str_slug('Sell_with_ayami'))
                        <a class="btn btn-success pull-right" href="{{ url('/sell_with_ayami/sell_with_ayami') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/sell_with_ayami/sell_with_ayami/' . $sell_with_ayami->id) }}" accept-charset="UTF-8"  enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('sell_with_ayami.sell_with_ayami.form', ['submitButtonText' => 'Update'])

                    </form>
                </div>
            </div>
        </div>
        </div>
        @include('layouts.admin.footer')
    </div>
@endsection
