<x-layout>
    <div class="w-full flex justify-center items-center flex-col gap-6">
        <div class="w-full flex justify-center items-center">
            <h1 class="text-2xl font-bold">Register User</h1>
        </div>
        <form method="POST" action="/register" class="w-full flex justify-center items-center flex-col gap-4"
            enctype="multipart/form-data">
            @csrf

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Name</label>
                <x-input type='text' placeholder='John' name='name' />
                @error('name')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Email</label>
                <x-input type='text' placeholder='Doe' name='email' />
                @error('email')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Password</label>
                <x-input type='password' placeholder='' name='password' />
                @error('password')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Confirm Password</label>
                <x-input type='password' placeholder='' name='password_confirmation' />
            </div>

            <x-divider />

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Employer name</label>
                <x-input type='text' placeholder='Redberry' name='employer' />
                @error('employer')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-center items-center flex-col gap-1">
                <label class="text-base sm:text-lg font-semibold w-full text-start">Logo</label>
                <x-input type='file' placeholder='' name='logo' />
                @error('logo')
                <span class="text-red-500 text-sm w-full text-start">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full flex justify-end items-center mt-2">
                <button type="submit"
                    class="w-full px-5 py-3 rounded-xl bg-blue-500 hover:bg-blue-600 text-white duration-200 transition-all">Register</button>
            </div>
        </form>
    </div>
</x-layout>