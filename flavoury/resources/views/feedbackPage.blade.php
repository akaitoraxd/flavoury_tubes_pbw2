<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Feedback') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <ul class="space-y-4">
                        @foreach ($listFeedback as $feedback)
                            <li class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg shadow">
                                <div class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ $feedback->user->name }}
                                </div>
                                <div class="mt-1 text-gray-900 dark:text-gray-100">
                                    {{ $feedback->feedback }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>