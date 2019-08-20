@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About the QVHA</h1>

    <p class="mb-6">Welcome to the Quashnet Valley Homeowners Association, a not for profit corporation representating a community of over 100 homes north of Routes 28 and 151 in Mashpee, MA</p>

    <p class="mb-6">The QVHA annual assessment is $200 per household. The bulk of this assessment is spent on landscaping within the common areas, with the remainder allocated to cover insurance, legal, utilities, and accounting expenses.</p>


    <p class="mb-6">With the exception of three homes on Olde Barnstable Road, the rest of our community is on streets named after professional golfers:</p>
    <ul class="list-disc ml-8">
        <li class="text-sm">Ben <strong>Hogan</strong></li>
        <li class="text-sm">Sam <strong>Snead</strong></li>
        <li class="text-sm">Arnold <strong>Palmer</strong></li>
        <li class="text-sm">Byron <strong>Nelson</strong></li>
        <li class="text-sm">Johnny <strong>Miller</strong></li>
        <li class="text-sm">Gary <strong>Player</strong></li>
    </ul>

    <div class="px-2">
        <div class="flex flex-wrap -mx-4">
            <div class="p-0 sm:p-3 w-full sm:w-full md:w-1/2 mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                    <h4>Board of Directors</h4>
                    <ul class="list-disc ml-4">
                        <li class="text-sm">Tony Venuti - President</li>
                        <li class="text-sm">Christopher Nelson - Treasurer</li>
                        <li class="text-sm">Dave Fravel - Secretary</li>
                        <li class="text-sm">Gary Johnson - Board Member</li>
                        <li class="text-sm">Open</li>
                    
                    </ul>
                </div>
                
            </div>

            <div class="p-0 sm:p-3 w-full sm:w-full md:w-1/2 mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                        <h4>Committees</h4>
                        <ul class="list-disc ml-4">
                            <li class="text-sm">Landscape Committee</li>
                            <li class="text-sm">Sunshine Committee</li>
                        </ul>
                </div>
                

            </div>
        </div>
    </div>

    @include('_components.questions-cta')
    
    






    <div class="w-full mt-20">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4810.091204331231!2d-70.50097018890581!3d41.62271762053737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1565439785496!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

@endsection
