<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @Vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-[#FAF7F2] bg-[#FDEBD0] font-sans text-gray-800">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="/home"
                    class="bg-[#C6A969] text-black py-2 px-6 rounded-md border border-black hover:bg-[#B89054] hover:shadow-lg shadow-[4px_4px_0px_rgba(105,63,35,0.7)] transition-all duration-300">
                    Back to Home
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name', auth()->user()->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', auth()->user()->email)" enabled />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="phone_number" :value="__('Phone Number')" />
                            <x-text-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"
                                :value="old('phone_number', auth()->user()->phone_number)" required />
                            <p>Note : isi jika kamu ingin membuka private class</p>
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Profile Image')" />
                            <input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*">

                            @if (auth()->user()->image && auth()->user()->image != 'default.jpg')
                                <div class="mt-2">
                                    <img src="{{ asset('storage/images/' . auth()->user()->image) }}" alt="Profile Image"
                                        class="w-20 h-20 rounded-full">
                                </div>
                            @endif

                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>