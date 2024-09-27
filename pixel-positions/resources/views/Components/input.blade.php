@props(['name','placeholder','type'])

<input type="{{$type}}" value="{{old($name)}}" placeholder="{{$placeholder}}" name="{{$name}}"
    class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" />