<div>
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


</div>
