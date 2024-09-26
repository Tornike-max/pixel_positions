@props(['size'=> ''])

<span
    class="text-white/80 font-semibold rounded-xl bg-white/5 hover:bg-white/10 duration-200 transition-all ease-in-out cursor-pointer {{$size === 'sm' ? 'px-2 py-1' : 'px-4 py-2'}}">{{$slot}}</span>