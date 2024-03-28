@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <!-- HEADER END --><!-- SECTION INNER PAGES BANNER START -->
    <section class="Sec-Innerpages">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="InnerpagesCOntent">
                        <h1>Privacy Policy</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION INNER PAGES BANNER END -->
@endsection
@section('css')
    <style>
        /* .Sec-Banner {
                    background-image: url(../images/bannermain.png);

                } */
    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
    <script>
        $(".info_ayami").hover(function() {
            $(".ayami-show").toggleClass("result_hover")
        });
    </script>
@endsection
