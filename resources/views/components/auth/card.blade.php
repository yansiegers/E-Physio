{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
<div {{ $attributes->merge(['class' => 'px-20 pt-8 pb-12 bg-eph-white rounded-xl shadow-md']) }}>
    <div class="flex justify-between mb-12">
        {{ $links }}
    </div>

    {{-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> --}}
    <div class="">
        {{ $slot }}
    </div>
</div>
