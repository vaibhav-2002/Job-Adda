@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  {{-- <li class="flex items-center justify-center bg-[#07e0f0] text-[#fc0303] rounded-lg py-1 px-3 mr-2 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li> --}}
  <li style="background-color: black; color: red;" class="flex items-center justify-center rounded-xl py-1 px-3 mr-2 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
</li>
  @endforeach
</ul>
