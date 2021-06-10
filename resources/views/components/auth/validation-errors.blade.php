@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div>
            Oeps, daar ging iets fout.
        </div>
        <ul class="mt-3 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
