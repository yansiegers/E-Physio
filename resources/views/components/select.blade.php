@props([
    'disabled' => false,
    'list',
    'value' => ''
])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block border-eph-grey rounded-md px-4 py-3']) !!}>
    @foreach (json_decode($list, true) as $item)
        <option value="{{ $item }}" @if($item == $value) selected @endif>
            {{ $item }}
        </option>
    @endforeach
</select>
