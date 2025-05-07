@props(['tag','size'=> 'base'])


@php

    $classes = "bg-white/10 hover:bg-white/25 rounded-xl text-2xs font-bold transition-colors duration-300";
    if($size === 'base'){
        $classes .= "px-5 py-1 text-sm";
    }
    
    if($size === 'small'){
        $classes .= " px-5 py-1 text-sm";

    }
@endphp


<a class="{{ $classes }}" href="/tag/{{ strtolower($tag->name)  }}">{{ $tag->name }}</a>