@props(['name'])

<select class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" name="{{$name}}">
    {{$slot}}
</select>