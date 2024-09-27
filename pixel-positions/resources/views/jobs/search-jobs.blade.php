<x-layout>
    <div class="w-full flex justify-start items-center my-4">
        <a href="/"
            class="py-2 px-3 rounded-lg border-[2px] border-white/80 hover:border-white/90 text-white/80 hover:text-white/90 duration-200 transition-all">Go
            Back</a>
    </div>
    <x-job-heading>Result</x-job-heading>
    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
        <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>