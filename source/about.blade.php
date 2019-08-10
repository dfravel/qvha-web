@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About the QVHA</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Welcome to the Quashnet Valley Homeowners Association - a community of over 100 homes north of Routes 28 and 151 in Mashpee, MA</p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam possimus earum harum itaque est!</p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam!</p>


    <div class="w-full mt-20">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4810.091204331231!2d-70.50097018890581!3d41.62271762053737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1565439785496!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

@endsection
