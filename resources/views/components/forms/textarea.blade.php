<textarea
    {{ $attributes->class(['border border-eph-black rounded-lg text-base px-4 py-3', 'border-eph-grey-light color-eph-grey-light' => $attributes->has('disabled')]) }}>{{ $slot }}</textarea>
