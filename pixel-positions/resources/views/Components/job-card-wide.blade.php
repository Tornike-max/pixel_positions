@props(['job'])


<div
    class="p-4 bg-white/5 hover:bg-white/10 duration-200 transition-all cursor-pointer rounded-xl flex gap-6 border-[1px] border-white/10 hover:shadow-lg hover:border-blue-800 ease-in-out">
    <div>
        <x-employer-logo :width='90' :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <p class="self-start text-sm text-gray-400 transition-colors duration-300">{{$job->location}}</p>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
            <a href="/jobs/{{$job->id}}" target="_blank">
                {{$job->title}}
            </a>
        </h3>

        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
        <x-tag size='sm' :tag="$tag->name" />
        @endforeach
    </div>
</div>