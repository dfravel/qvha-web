@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Frequently Asked Questions {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Frequently Asked Questions about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Frequently Asked Questions</h1>

    <div class="px-2">
        <div class="flex flex-wrap -mx-4">
            <div class="p-0 sm:p-3 w-full mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                    <h4>Where can I find a copy of the by-laws?</h4>
                    <p class="mb-6">A link to a copy of the bylaws are included below. Yeah - we know it's hard to read and seems to be a copy of a copy of a copy, but it's the original legal copy on file with the town and we don't believe we are in a position to have them re-typed. If anyone has a legal background and can point us in the right direction on this we'd welcome the advice</p>

                    <div class="inline-flex items-center bg-pink-600 leading-none text-white rounded-full py-4 px-6 shadow text-teal text-sm hover:bg-pink-300 hover:text-white">
                        <span><a href="https://qvhamashpeecom-my.sharepoint.com/:b:/g/personal/secretary_qvhamashpee_com/EY8dVX3J1W5Jh5YWmDby-8UBzsaKrftmceQL9DFrCmCdsA?e=3edRdV" target="_blank" class="text-white hover:text-white">QVHA Bylaws</a></span>
                    </div>
                </div>
            </div>

            <div class="p-0 sm:p-3 w-full mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                    <h4>How much is the annual assessment?</h4>
                    <p class="mb-6">The annual assessment (approved by majority vote in August 2018) is $200 per household. Notices are sent via email and mail in November of each year and we ask that homeowners pay the assessment by January 1.</p>
                </div>
            </div>

            <div class="p-0 sm:p-3 w-full mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                    <h4>I'm selling my home. What do I need from the association?</h4>
                    <p class="mb-6">Prior to closing, the association will create a "Certificate of No Lien." This indicates that you've paid your assessments through the calendar year.</p>
                </div>
            </div>     

            <div class="p-0 sm:p-3 w-full mb-4">
                <div class="overflow-hidden rounded-lg shadow-lg bg-white p-6 h-full">
                    <h4>Where can I get a directory of homeowners?</h4>
                    <p class="mb-6">Please use the "send us a message" link at the bottom of this page to request a copy of the directory. Given the private nature of the information it contains, we prefer to not make it available on the website.</p>
                </div>
            </div>


        </div>
    </div>

    

    @include('_components.questions-cta')
   
    

@endsection
