<x-layout>
    <div class="w-full flex justify-center items-center flex-col gap-6">
        <h1 class="text-2xl text-white/80 font-semibold">Edit Job - {{$job->title}}</h1>

        <form method="POST" action="/jobs/{{$job->id}}" class="w-full flex justify-center items-center flex-col gap-4">
            @csrf
            @method('PUT')
            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Title *</label>
                <input class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" type='text'
                    placeholder='Web developer' name='title' value="{{$job->title}}" />
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Salary *</label>
                <input class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" type='text' placeholder='$50,000'
                    name='salary' value="{{$job->salary}}" />
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Location *</label>
                <input class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" type='text' placeholder='Remote'
                    name='location' value="{{$job->location}}" />
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Schedule *</label>
                <x-select name="schedule">
                    <option value="Part Time">Part-Time</option>
                    <option value="Full Time">Full-Time</option>
                </x-select>
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Url *</label>
                <input class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" type='text'
                    placeholder='http://example.com/' name='url' value="{{$job->url}}" />
            </div>

            <div class="w-full flex justify-start items-center gap-2">
                <label class="text-lg font-semibold text-white/80">Featured*</label>
                <div class="w-full flex justify-start items-center gap-4">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="featured" value="yes" class="form-radio text-blue-500">
                        <span class="text-white/80">Yes</span>
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="featured" value="no" class="form-radio text-blue-500">
                        <span class="text-white/80">No</span>
                    </label>
                </div>
            </div>

            <x-divider />

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Tags</label>
                <input class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full" type='text'
                    placeholder='Frontend,Backend...' name='tags'
                    value="{{ $job->tags->pluck('name')->implode(', ') }}" />
            </div>

            <x-divider />

            <div class="w-full flex justify-end items-center ">
                <button type="submit"
                    class="w-full px-5 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white duration-200 transition-all">Create</button>
            </div>
        </form>
    </div>
</x-layout>