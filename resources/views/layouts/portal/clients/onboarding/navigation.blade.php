@php
    $classes = "absolute bottom-0 px-32 py-16";
    if (isset($with_next) ? $with_next : true) {
        $classes .= "w-screen flex justify-between";
    }
@endphp

<div class="{{ $classes }}">
    <a href="{{ url()->previous() }}" class="inline-block text-eph-grey font-bold text-center no-underline px-4 py-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block align-middle" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Terug
    </a>
    @if (isset($with_next) ? $with_next : true)
        <x-forms.button class="btn-outline-1 rounded-full" type="submit" form="{{ $form }}">
            Volgende
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 inline-block align-middle" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </x-forms.button>
    @endif
</div>
