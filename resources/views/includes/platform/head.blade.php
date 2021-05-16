@include('includes.default')

{{--<link rel="shortcut icon" href="/assets/icons/Icon - white.png" type="image/png">--}}

<meta name="description" content="{{ isset($description) ? $description : '' }}">
<meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
<title>Equiville {{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

@include('includes.styles')
