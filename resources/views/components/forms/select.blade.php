<select
    {{ $attributes->class(['block border-eph-grey rounded-md px-4 py-3', 'disabled' => $attributes->has('disabled')]) }}>
    @foreach ($list as $item)
        <option value="{{ $item }}" @if ($item == $value) selected @endif>
            {{ $item }}
        </option>
    @endforeach
</select>
