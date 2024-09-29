<x-layout>
    <div class="space-y-10">
        <section class="w-full flex flex-col justify-center items-center space-y-4 pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="/search" method="GET" class="mt-6 max-w-xl w-full">
                <x-input type='search' placeholder='Web developer...' name='query' />
                @error('query')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </form>
        </section>
        <section>
            <x-job-heading>Featured Jobs</x-job-heading>
            <div class="w-full grid grid-cols-3 gap-3">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job />
                @endforeach
            </div>
            <div class="my-4">
                {{$featuredJobs->onEachSide(5)->links()}}
            </div>
        </section>

        <section>
            <x-job-heading>Tags</x-job-heading>
            <div class="w-full flex flex-wrap mt-6 justify-start items-center gap-3">
                @foreach ($tags as $tag)
                <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-job-heading>Recent Jobs</x-job-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>
            <div class="my-4">
                {{$jobs->links()}}
            </div>
        </section>
    </div>
</x-layout>