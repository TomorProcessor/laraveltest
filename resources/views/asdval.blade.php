<div>

    <!-- ha nem component lenne, akkor így kellene -->
{{--    @section('yieldfromchild')--}}
{{--        <p>this is yielded in the extended layout</p>--}}
{{--    @endsection--}}

    <x-asdval valami="<p>this is yielded in the extended layout</p>">
    </x-asdval>


    {{ $testContent = "<p>This is a test paragraph</p>"  }}
    <h1>TEST</h1>
    {{ $testContent  }} <!-- innerText -->
    {!! $testContent !!} <!-- innerHtml -->

    @foreach($array as $num)
        <!-- $loop -> info a foeach-ről -->
        This is a number
        <b>{{ $num }}</b>
        <br/>
    @endforeach

    @extends('components.base')
</div>
