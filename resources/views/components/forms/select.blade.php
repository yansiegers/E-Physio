<select
    {{ $attributes->class(['block border border-eph-black rounded-lg text-base px-4 py-3', 'border-eph-grey-light color-eph-grey-light' => $attributes->has('disabled')]) }}>
    @foreach ($list as $item => $label)
        <option value="{{ $item }}" @if ($item == $value) selected @endif>
            {{ $label }}
        </option>
    @endforeach
</select>
