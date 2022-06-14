@section('title', '| Settings')

<div class="content-wrapper dashboard">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Settings </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class=" breadcrumb-item"><a href="{{ route('dashboard.home') }}"> Home </a></li>
                        <li class="breadcrumb-item active"> Settings </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general"
                        role="tab" aria-controls="nav-general" aria-selected="true">General Settings</a>
                    <a class="nav-item nav-link" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab"
                        aria-controls="nav-product" aria-selected="false">Related to products</a>
                    <a class="nav-item nav-link" id="nav-shipping-tab" data-toggle="tab" href="#nav-shipping" role="tab"
                        aria-controls="nav-shipping" aria-selected="false">shipping status</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">...</div>
                <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">...
                </div>

                <div class="tab-pane fade show active" id="nav-general" role="tabpanel"
                    aria-labelledby="nav-general-tab">
                    @include('dashboard.setting._general')
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>

{{-- @endsection --}}
