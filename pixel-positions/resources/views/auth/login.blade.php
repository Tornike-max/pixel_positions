<x-layout>
    <div class="w-full flex justify-center items-center flex-col gap-6">
        <div class="w-full flex justify-center items-center">
            <h1 class="text-2xl font-bold">Login User</h1>
        </div>
        <form method="POST" action="/login" class="w-full flex justify-center items-center flex-col gap-4">
            @csrf

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Email</label>
                <x-input type='text' placeholder='Doe@example.com' name='email' />
                @error('email')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Password</label>
                <x-input type='password' placeholder='Password123' name='password' />
                @error('password')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <x-divider />

            <div class="w-full flex justify-end items-center mt-2">
                <button type="submit"
                    class="w-full px-5 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white duration-200 transition-all">Log
                    in</button>
            </div>
        </form>
    </div>
</x-layout>