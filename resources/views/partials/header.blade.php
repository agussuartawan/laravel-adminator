<div class="header navbar">
    <div class="header-container">
        <div class="row">
            <div class="col-8">
                <ul class="nav-left">
                   <li>
                       <a href="#" id="sidebar-toggle" class="sidebar-toggle">
                           <i class="ti-menu"></i>
                       </a>
                   </li>
                </ul>
            </div>
            <div class="col-4">
                <a href="{{ route('penjualan.create') }}" class="btn btn-outline-info mt-3 mr-3 float-right">
                   <i class="fas fa-shopping-cart"></i>
                   Jual
                </a>
            </div>
        </div>
        {{-- <ul class="nav-right">
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif
        </ul> --}}
    </div>
</div>