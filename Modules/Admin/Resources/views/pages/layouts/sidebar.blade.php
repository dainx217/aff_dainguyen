@if (permissionShow(get_data_user('admins'))[0] == 'get_admin.full')
    @foreach (config('setting_admin.sidebar') as $menus)
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                <i class="{{ $menus['class-icon'] }}"></i>
                
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">{{ $menus['name'] }}</span>
            <span class="menu-arrow"></span>
        </span>
        @if (isset($menus['sub']))
            <div class="menu-sub menu-sub-accordion menu-active-bg">
                @foreach ($menus['sub'] as $menu)
                    <div  class="menu-item menu-accordion">
                        <a class="menu-link" href="{{ route($menu['route']) }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">{{ $menu['name'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
    @endforeach
@else
    @foreach (config('setting_admin.sidebar') as $menus)
    @if (isset($menus['sub']))
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            @foreach ($menus['sub'] as $key => $menu)
                @if (in_array($menu['route'], permissionShow(get_data_user('admins'))))
                    @if($key == 0)
                        <span class="menu-link">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                <i class="{{ $menus['class-icon'] }}"></i>
                                
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">{{ $menus['name'] }}</span>
                            <span class="menu-arrow"></span>
                        </span>
                    @endif
                @endif
            @endforeach               
                <div class="menu-sub menu-sub-accordion menu-active-bg">
                    @foreach ($menus['sub'] as $menu)
                            @if (in_array($menu['route'], permissionShow(get_data_user('admins'))))
                                <div  class="menu-item menu-accordion">
                                    <a class="menu-link" href="{{ route($menu['route']) }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">{{ $menu['name'] }}</span>
                                    </a>
                                </div>
                            @endif
                    @endforeach
                </div>

        </div>
    @endif
    @endforeach
@endif


