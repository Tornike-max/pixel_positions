<x-layout>
    <div class="w-full flex justify-center items-center flex-col">
        <div class="w-full flex justify-start items-center">
            <a href="/"
                class="py-2 px-3 rounded-lg border-[2px] border-white/80 hover:border-white/90 text-white/80 hover:text-white/90 duration-200 transition-all">Go
                Back</a>
        </div>

        <div class="w-full flex justify-center items-center flex-col gap-2 my-8">
            <h1 class="text-5xl font-bold text-white/90">We're Hiring</h1>
            <p class="text-xl font-semibold text-white/90">{{$job->title}}</p>
            <div class="w-full flex justify-center items-center flex-col gap-2 my-8">
                <h3 class="w-full font-bold text-2xl text-white/90 text-start">Your work</h3>
                <div class="w-full text-white/80 text-lg font-semibold flex items-center justify-start gap-2">
                    <p>Job Title:</p>
                    <p>{{$job->title}}</p>
                </div>
                <div class="w-full text-white/80 text-lg font-semibold flex items-center justify-start gap-2">
                    <p>Salary:</p>
                    <p>{{$job->salary}} Per Year</p>
                </div>
                <div class="w-full text-white/80 text-lg font-semibold flex items-center justify-start gap-2">
                    <p>Location:</p>
                    <p>{{$job->location}}</p>
                </div>
                <div class="w-full text-white/80 text-lg font-semibold flex items-center justify-start gap-2">
                    <p>Schedule:</p>
                    <p>{{$job->schedule}}</p>
                </div>
                <div class="w-full text-white/80 text-lg font-semibold flex items-center justify-start gap-2 mt-4">
                    @foreach ($job->tags as $tag)
                    <x-tag :tag="$tag['name']" />
                    @endforeach
                </div>
            </div>
            <div class="w-full flex justify-center items-center flex-col gap-4 my-4">
                <p class="text-white/80 text-lg font-semibold">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum, labore dolorum? Officia
                    reprehenderit
                    mollitia aspernatur iste qui eaque, sapiente odit ut impedit enim alias fugit a eum, soluta et
                    excepturi.</p>
                <h3 class="w-full font-bold text-2xl text-white/90 text-start">Role Overview</h3>
                <p class="text-white/80 text-lg font-semibold">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Earum, labore dolorum? Officia
                    reprehenderit
                    mollitia aspernatur iste qui eaque, sapiente odit ut impedit enim alias fugit a eum, soluta et
                    excepturi.Earum, labore dolorum? Officia
                    reprehenderit
                    mollitia aspernatur iste qui eaque, sapiente odit ut impedit enim alias fugit a eum, soluta et
                    excepturi.</p>
            </div>
        </div>
    </div>
</x-layout>