@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <section class="back-tabs about-main-links">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="first-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('about-ayami') }}">About Ayami</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('founders-and-team-advisor') }}"> Founders & Leader Team
                                    Advisor</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('giving-back') }}">Giving Back</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('our-business-partners') }}">Our Business Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="back-tabs giving-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="cash-bonus">
                        <h3>Giving Back</h3>
                    </div>
                    <div class="first-tabs">
                        <p>AyAMi gives back to local communities!</p>
                        <p>We will match charitable donations! If you would like to donate all or portion of your rebate to
                            a charity, we will match 25% of any donations that are $5,000 or more. Ask us about our list of
                            approved organizations or let us know if you would like to add a new charity to our list.</p>
                        <p>AyAMi holds annual fundraiser events to support local communities and global charities. Let Us
                            Know if There Is a Charity You Would Like Us to Support!</p>
                        <p>AyAMi’s Founders organized and held a fundraiser at their residence in April 2022 to support
                            victims of the war in Ukraine. They raised a total of $3,600 exactly, including their $500 match
                            and distributed the funds in May 2022 to two charities based in Poland. The Little Big Man
                            Foundation received 11,000zł ($2,494), which is the largest single donation and ~10% of all the
                            donations the Foundation received at the time, to support Ukrainian victims. The Polish Medical
                            Mission (Ukraine Project) received the remaining 4,881zł ($1,106). </p>
                        <p>The Little Big Man Foundation’s goal is to help and support children in orphanages and the
                            organization is focused on delivering that help to children in Ukraine and young Ukrainian
                            refugees who ended up in orphanages in Poland. All of the funds that they raise are used to
                            either purchase items (primary goal) or equip orphanages so they can accommodate more children
                            from Ukraine.</p>
                        <p>The Polish Medical Mission (Ukraine Project) provides medical assistance for hospitals in
                            Ukraine. They send transports with medical supplies to hospitals throughout Ukraine.</p>
                        <p>Stay Tuned for the Next Year’s Fundraiser! Let Us Know if There Is a Charity You Would Like Us to
                            Support!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
