@include('includes.default')

<meta name="description" content="{{ isset($description) ? $description : '' }}">
<meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
<title>E-Physio {{ isset($title) ? Str::title(' – '.$title) : '' }}</title>

@include('includes.styles')
