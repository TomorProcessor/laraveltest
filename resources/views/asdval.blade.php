@php use App\Models\User; @endphp
<div>

    <!-- ha nem component lenne, akkor így kellene -->
{{--    @section('yieldfromchild')--}}
{{--        <p>this is yielded in the extended layout</p>--}}
{{--    @endsection--}}

{{--    <x-base>--}}
{{--        <x-slot:content>--}}
{{--            <p>this is yielded in the extended layout</p>--}}
{{--        </x-slot:content>--}}
{{--    </x-base>--}}


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

    @php
        $id = 5;
        $user = User::findOrFail($id);
    @endphp

    <p>User's products who has ID=5</p>
{{--    {{ $user->products }}--}}
    @foreach($user->products as $product)
        Product name: {{ $product->name }} <br/>
    @endforeach
</div>
