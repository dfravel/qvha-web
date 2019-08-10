@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Thank you from {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Thank you for your submission on {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Thank You</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Your submission has been received. Someone from the board will be in touch as soon as possible.</p>

   



@endsection
