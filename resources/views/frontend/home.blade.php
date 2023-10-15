@extends('frontend.layouts.app')
@section('frontend-content')
<script src="{{ asset('node_modules/tsparticles/dist/tsparticles.min.js') }}"></script>

<div id="particles-container"></div>
<div id="tsparticles"></div>
<div class="w-full min-h-screen bg-gradient-to-t from-slate-200 to-slate-950 flex flex-col justify-center items-center">
    <h3 class="text-2xl font-bold text-slate-50">Welcome To </h3>
    <h1 class="text-3xl font-bold underline text-slate-50">
        Social Media Auto Poster
    </h1>
</div>
@endsection