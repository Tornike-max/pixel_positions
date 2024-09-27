<x-layout>
    <div class="w-full flex justify-center items-center flex-col gap-6">
        <h1 class="text-2xl text-white/80 font-semibold">Create Job</h1>

        <form method="POST" action="/jobs/store" class="w-full flex justify-center items-center flex-col gap-4">
            @csrf
            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Title *</label>
                <x-input type='text' placeholder='Web developer' name='title' />
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Salary *</label>
                <x-input type='text' placeholder='$50,000' name='salary' />
            </div>

            <div class="w-full flex justify-center items-start flex-col gap-1">
                <label class="text-lg font-semibold text-white/80">Location *</label>
                <x-input type='text' placeholder='Remote' name='location' />
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
                <x-input type='text' placeholder='http://example.com/' name='url' />
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
                <x-input type='text' placeholder='Frontend,Backend...' name='tags' />
            </div>

            <x-divider />

            <div class="w-full flex justify-end items-center ">
                <button type="submit"
                    class="w-full px-5 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white duration-200 transition-all">Create</button>
            </div>
        </form>
    </div>
</x-layout>