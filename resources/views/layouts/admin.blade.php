@include('layouts.admin_partials._header')

    <!-- Page Wrapper -->
    <div id="wrapper">

            @include('layouts.admin_partials._sidebar')

        <main id="content-area">

            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content" class="pb-2">

                    @include('layouts.admin_partials._topbar')

                </div>

                <div class="container-fluid pb-2 mb-2">

                    @yield('content')

                </div>
                <!-- End of Main Content -->

               @include('layouts.admin_partials._footer-block')

            </div>
            <!-- End of Content Wrapper -->

        </main>

    </div>
    <!-- End of Page Wrapper -->

    @include('layouts.admin_partials._scrollTopBtn')


@include('layouts.admin_partials._footer')
