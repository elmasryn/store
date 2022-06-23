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
                    <a class="nav-item nav-link {{ $tab == 1 ? 'active' : '' }}" wire:click="tab(1)" tab="{{$tab}}" id="nav-general-tab" data-toggle="tab" href="#nav-general"
                        role="tab" aria-controls="nav-general" aria-selected="true">General Settings</a>
                    <a class="nav-item nav-link {{ $tab == 2 ? 'active' : '' }}" wire:click="tab(2)" tab="{{$tab}}" id="nav-shipping-tab" data-toggle="tab" href="#nav-shipping"
                        role="tab" aria-controls="nav-shipping" aria-selected="false">Shipping status</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade {{ $tab == 1 ? 'show active' : '' }}" id="nav-general" role="tabpanel"
                    aria-labelledby="nav-general-tab">
                    @include('dashboard.settings._general')
                </div>

                <div class="tab-pane fade {{ $tab == 2 ? 'show active' : '' }}" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
                    @include('dashboard.settings._shipping')
                </div>
                @include('alerts')
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>

{{-- @endsection --}}
