    @section('styles')
    <style>
        .continue-button {
            width: 290px;
            height: 45px;
            font-size: 20px;
        }
        @media only screen and (max-width: 767px) {
            .bottom-header {
                padding: 10px 0px 10px !important;
            }
        }
    </style>
    @endsection
    <!-- header section start -->
    <header class="header-section" style="bottom: 0 !important; box-shadow: 0 2px 9px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <!-- main menu -->
        <div class="main-header bottom-header">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <button class="btn btn-primary continue-button">
                        Continue <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
