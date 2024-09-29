@props(['job'])

<div
    class="p-4 bg-white/5 rounded-xl flex justify-center flex-col text-center border-[1px] border-white/10 hover:border-blue-800 hover:shadow-lg duration-200 transition-all ease-in-out group">
    <div class='w-full self-start text-sm'>
        <div>
            <h1 class="text-start group-hover:text-blue-500 duration-200 transition-all ease-in-out">Laracasts</h1>
        </div>
        <div class="py-8 font-bold group-hover:text-blue-500 duration-200 transition-all ease-in-out gap-2">
            <a href="/jobs/{{$job->id}}">
                <h3>{{$job->title}}</h3>
                <p>{{$job->schedule}} - From {{$job->salary}}</p>
            </a>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach ($job->tags as $tag)
                <x-tag size='sm' :tag="$tag->name" />
                @endforeach
            </div>
            <x-employer-logo :width='42' />
        </div>
    </div>
</div>