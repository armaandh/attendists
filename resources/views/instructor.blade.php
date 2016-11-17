Hello

@php
$myvar = $instruc->sectionz

@endphp

 @foreach ($myvar as $i)
    <h3>{{ $i->name}}</h3>
@endforeach

{{-- <h3>{{$instruc->sectionz}}</h3> --}}
