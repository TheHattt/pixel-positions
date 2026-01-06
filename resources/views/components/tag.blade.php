
@props(['size' => 'base'])

@php
$classes = "rounded-xl bg-white/10 hover:bg-white/25  transition-colors duration-300";
    if ($size=== 'base'){
    $classes .= " text-sm px-5 py-1";

    }
   if($size === "small"){
   $classes .= " text-2xm px-3 py-1";
}
@endphp



<a href="#" class="{{$classes}}">
    {{$slot}}
</a>
