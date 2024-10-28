<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Jexactyl') }} - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="_token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#0e4688">

        <script src="https://unpkg.com/feather-icons"></script>

        @include('layouts.scripts')

        @section('scripts')
            {!! Theme::css('vendor/select2/select2.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/bootstrap/bootstrap.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/adminlte/admin.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/adminlte/colors/skin-blue.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/sweetalert/sweetalert.min.css?t={cache-version}') !!}
            {!! Theme::css('vendor/animate/animate.min.css?t={cache-version}') !!}
            <!-- Ability to customize Jexactyl theme -->
            <link rel="stylesheet" href="/themes/{{ config('theme.admin', 'jexactyl') }}/css/{{ config('theme.admin', 'jexactyl') }}.css">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        @show
    </head>
    <body class="skin-blue fixed">
        <div class="wrapper">
            <header class="main-header">
                <a href="{{ route('index') }}" class="logo">
                    <img src="{{ config('app.logo') }}" width="48" height="48" />
                </a>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.index') ?: 'active' }}">
                            <a href="{{ route('admin.index')}}">
                                <i data-feather="tool" style="margin-left: 12px;"></i> 
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.tickets') ?: 'active' }}">
                            <a href="{{ route('admin.tickets.index')}}">
                                <i data-feather="help-circle" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.api') ?: 'active' }}">
                            <a href="{{ route('admin.api.index')}}">
                                <i data-feather="git-branch" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.databases') ?: 'active' }}">
                            <a href="{{ route('admin.databases') }}">
                                <i data-feather="database" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.locations') ?: 'active' }}">
                            <a href="{{ route('admin.locations') }}">
                                <i data-feather="navigation" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.nodes') ?: 'active' }}">
                            <a href="{{ route('admin.nodes') }}">
                                <i data-feather="layers" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.servers') ?: 'active' }}">
                            <a href="{{ route('admin.servers') }}">
                                <i data-feather="server" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.users') ?: 'active' }}">
                            <a href="{{ route('admin.users') }}">
                                <i data-feather="users" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.mounts') ?: 'active' }}">
                            <a href="{{ route('admin.mounts') }}">
                                <i data-feather="hard-drive" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                        <li class="{{ ! starts_with(Route::currentRouteName(), 'admin.nests') ?: 'active' }}">
                            <a href="{{ route('admin.nests') }}">
                                <i data-feather="archive" style="margin-left: 12px;"></i>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content Header -->
                <section class="content-header">
                    @yield('content-header')
                </section>

                <!-- Main Content -->
                <section class="content">
                    <!-- Display errors -->
                    @if (count($errors) > 0)
                        <!-- Error handling code -->
                    @endif

                    <!-- Display alerts -->
                    @foreach (Alert::getMessages() as $type => $messages)
                        <!-- Alert handling code -->
                    @endforeach

                    @yield('content')
                </section>

            </div>

            <!-- Donation message at the bottom of the page -->
            <footer style="text-align: center; padding: 20px; background-color: #f8f9fa; position: relative; bottom: 0; width: 100%;">
                Please consider donating to kokofixcomputers using GitHub Sponsors
            </footer>

        </div>

        @section('footer-scripts')
            <!-- Footer scripts -->
            ...
        @show
    </body> 
</html> 
