<!DOCTYPE html>
<html>

<head>
    {{-- head tag (include meta,title,style) --}}
    @include('partials.head')

    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    
    {{-- another styles here --}}
    @stack('styles')

</head>
<body class="app">
    {{-- loader --}}
    @include('partials.loader')

    {{-- sidebar --}}
    @include('partials.menu')

    <div class="page-container">

        {{-- header --}}
        @include('partials.header')

        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                <div class="row gap-20 masonry pos-r">
                    <div style="padding-top: 20px" class="container-fluid">
                        <div class="masonry-sizer col-md-12"></div>
                        <div class="masonry-item col-md-12">
                            <div class="bgc-white p-20 bd">
                                @if(session('message'))
                                    <div class="row mb-2">
                                        <div class="col-lg-12">
                                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                                        </div>
                                    </div>
                                @endif
                                @if($errors->count() > 0)
                                    <div class="alert alert-danger">
                                        <ul class="list-unstyled">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- main body --}}
                                @yield('content')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            {{--footer-text--}}
        </footer>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>

    {{-- foot (include scripts) --}}
    @include('partials.foot')

    {{-- another scripts here --}}
    @stack('scripts')
</body>
</html>
