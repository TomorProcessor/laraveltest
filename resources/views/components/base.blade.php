<div>
    <h2
        {{ $attributes->merge(['class' => 'testClass']) }}
    >Ths is the base</h2>

{{--    ha nem component lenne @yield('yieldfromchild')--}}

    <!-- mivel komponens, így is lehet, sima blade-nél csak a fenti yield megy, de valamiért nem jó -->
    {{ $content }}

    {{ $testPost }}
</div>
