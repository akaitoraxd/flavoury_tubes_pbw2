<!-- Feedback Button -->
<button id="feedbackButton" class="fixed right-4 bottom-4 p-3 rounded-full bg-[#C6A969] cursor-pointer z-50">
    <img src="https://img.icons8.com/?size=100&id=118377&format=png&color=000000" class="w-10" alt="Feedback">
</button>

<!-- Feedback Pop-up -->
<div id="feedbackPopup" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
    <div class="w-[90%] lg:w-1/3 mx-auto bg-white shadow-md space-y-5 rounded-lg py-8 px-6">
        <div class="flex justify-end">
            <button id="closePopup" class="text-gray-600 hover:text-gray-800">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Give Feedback</h2>
            <p class="text-gray-600 mb-4">What do you think of the editing tool?</p>
        </div>
        <form action="{{ route('feedback.store') }}" method="POST" class="">
            @csrf
            <label for="feedback" class="block text-gray-700 font-medium mb-2">Your Feedback</label>
            <textarea id="feedback"
                class="w-full h-24 border rounded-md p-3 text-gray-800 focus:outline-none focus:ring focus:border-blue-500 resize-none mb-4"
                placeholder="Type your feedback here" name="feedback"></textarea>
            <div class="flex gap-2">
                <button type="submit" class="w-1/2 bg-blue-500 text-white py-3 px-4 rounded-md hover:bg-blue-600 shadow-md">
                    Submit
                </button>
                <button id="closePopup" type="button"
                    class="w-1/2 bg-gray-300 text-black py-3 px-4 rounded-md hover:bg-gray-400 shadow-md">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const feedbackButton = document.getElementById('feedbackButton');
    const feedbackPopup = document.getElementById('feedbackPopup');
    const closePopup = document.getElementById('closePopup');

    feedbackButton.addEventListener('click', () => {
        feedbackPopup.classList.remove('hidden');
    });

    closePopup.addEventListener('click', () => {
        feedbackPopup.classList.add('hidden');
    });
</script>
