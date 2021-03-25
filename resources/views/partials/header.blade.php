<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
           <li>
               <a href="#" id="sidebar-toggle" class="sidebar-toggle">
                   <i class="ti-menu"></i>
               </a>
           </li>
        </ul>
        <ul class="nav-right">
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
        </ul>
    </div>
</div>