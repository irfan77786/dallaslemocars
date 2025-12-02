@section('styles')
    <style>
        .main-header {
            background: #fff;
            padding: 10px 0px;
        }
        .continue-button {
            width: 310px;
            height: 50px;
            font-size: 20px;
        }
        @media only screen and (max-width: 767px) {
            #proceed-bar { display: none; }
            .bottom-header {
                padding: 10px 0px 10px !important;
            }
            .continue-button {
                width: 360px;
                height: 40px;
                font-size: 20px;
            }
        }
    </style>
    @endsection
    <!-- header section start -->
    <header id="proceed-bar" class="header-section" style="bottom: 0 !important; box-shadow: 0 2px 9px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <!-- main menu -->
        <div class="main-header bottom-header">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <button class="btn btn-primary continue-button">
                        Continue &nbsp; <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
