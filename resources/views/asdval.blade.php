@php use App\Models\User; @endphp
<div>
    @auth()
        <h1>Logged in user: {{ auth()->user()->name }}</h1>
    @else
        <h1>Not logged in</h1>
    @endauth

    <!-- ha nem component lenne, akkor így kellene -->
    {{--    @section('yieldfromchild')--}}
    {{--        <p>this is yielded in the extended layout</p>--}}
    {{--    @endsection--}}
    {{ $testVar = 'this is a testVar' }}

    <x-base :testPost="$testVar">
        <x-slot name="content">
            <p>this is yielded in the extended layout</p>
        </x-slot>
    </x-base>


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

    {{--    @extends('components.base')--}}

    @php
        $id = 5;
        $user = User::findOrFail($id);
    //        ha n + 1 problem lenne, akkor User::width kell
    @endphp

    <p>User's products who has ID=5</p>
    {{--    {{ $user->products }}--}}
    @foreach($user->products as $product)
        Product name: {{ $product->name }} <br/>
    @endforeach

    <form method="GET" action="#">
        <input type="text" name="search" placeholder="SEARCH" value="{{ request('search') }}"/>
    </form>

    <p>Users, whose name suits the searched text</p>
    @foreach(User::query()->filter(request(['search']))->get() as $filteredUser)
        User name: {{ $filteredUser->name }} <br/>
    @endforeach

    @if(session()->has('message'))
        <script>alert("{{ session('message') }}")</script>
    @endif
</div>
