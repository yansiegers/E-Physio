<div {{ $attributes }}>
    @foreach ($list as $item => $label)
        <div>
            <x-forms.input id="{{ $name.$item }}" type="radio" name="{{ $name }}" value="{{ $item }}" :checked="$item == $value ? 'checked' : null"/>
            <x-forms.label for="{{ $name.$item }}" value="{{ $label }}" class="inline"/>
        </div>
    @endforeach
</div>
