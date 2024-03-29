@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Contact Us</h1>
<p class="mb-8">
    <strong>QVHA</strong><br>
    PO Box 766<br>
    Mashpee, MA 02649
</p>


<p class="mb-8">
    If you have any questions, or would like to get in touch with a member of the board, please send us an email at <a href="mailto:board@qvhamashpee.com">board@qvhamashpee.com</a>.
</p>

<!-- <form action="https://fieldgoal.io/f/NOOuct" method="POST">
    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>
    </div>



    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-address">
                Street Address
            </label>

            <input
                type="text"
                id="contact-address"
                placeholder="123 Golf Way"
                name="contact-address"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                required
            >
        </div>

        <div class="w-full px-3 md:w-1/2">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-phone">
                Phone Number
            </label>

            <input
                type="phone"
                id="contact-phone"
                placeholder="508-555-1212"
                name="contact-phone"
                class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
            >
        </div>
    </div>

    <div class="w-full mb-12">
        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
            Message
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"
            class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
            placeholder="A lovely message here."
            required
        ></textarea>
    </div>


    

    <div class="flex flex-wrap mb-6 -mx-3">
        <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
            <div class="g-recaptcha" data-sitekey="6LfhX7IUAAAAAEQi_XqByDCp9RLJvbmbYtzhVIpW"></div>
        </div>

        <div class="w-full justify-end px-3 md:w-1/2">
            <input
                type="submit"
                value="Submit"
                class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
            >
        </div>
    </div>

</form> -->
@stop
