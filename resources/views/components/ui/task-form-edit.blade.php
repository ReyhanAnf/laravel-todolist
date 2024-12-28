<form action="/task/{{ $task->id }}/edit" method="post" class="w-full px-10">
    @method('patch')
    @csrf
    <input type="text" name="user_id" id="user_id" hidden value="{{ auth()->user()->id}}">
    <div class="space-y-3 flex flex-col gap-4">
        <div class="relative">
            <label for="input-task" class="block text-lg font-semibold mb-2 dark:text-white">Task</label>
            <input id="input-task" name="task" type="text"
                class="rounded-md peer py-3 pe-0 ps-8 block w-full bg-transparent  border-2 border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600"
                placeholder="Enter Task" 
                value="{{ $task->task }}">

        </div>

        <div class="relative">
            <label for="input-desc" class="block text-lg font-semibold mb-2 dark:text-white">Description</label>
            <textarea id="input-desc" name="description"
                class="py-3 px-4 block w-full border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                rows="3" placeholder="Something.." data-hs-textarea-auto-height="">{{ $task->description }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap:2 md:gap-4">
            <div class="">
                <div class="block text-lg font-semibold mb-4 dark:text-white">Status</div>
                <ul class="flex flex-col sm:flex-row">
                    <li
                        class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                            <div class="flex items-center h-5">
                                <input id="input-status-pending" name="status" type="radio" value="pending"
                                    class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    @if ($task->status == 'pending')
                                        @checked(true)
                                    @endif >
                            </div>
                            <label for="input-status-pending"
                                class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                Pending
                            </label>
                        </div>
                    </li>

                    <li
                        class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                            <div class="flex items-center h-5">
                                <input id="input-status-progress" name="status" type="radio" value="progress"
                                    class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    @if ($task->status == 'progress')
                                        @checked(true)
                                    @endif >
                                    
                            </div>
                            <label for="input-status-progress"
                                class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                Progress
                            </label>
                        </div>
                    </li>

                    <li
                        class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                            <div class="flex items-center h-5">
                                <input id="input-status-done" name="status" type="radio" value="done"
                                    class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    @if ($task->status == 'done')
                                        @checked(true)
                                    @endif >
                            </div>
                            <label for="input-status-done"
                                class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                Done
                            </label>
                        </div>
                    </li>
                    <li
                        class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                            <div class="flex items-center h-5">
                                <input id="input-status-skip" name="status" type="radio" value="skip"
                                    class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    @if ($task->status == 'skip')
                                        @checked(true)
                                    @endif >
                            </div>
                            <label for="input-status-skip"
                                class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500">
                                Skip
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="relative">
                <label for="min-and-max-range-slider-usage"
                    class="block text-lg font-semibold mb-2 dark:text-white">Priority</label>
                <input type="range" name="priority" value="{{ $task->priority }}"
                    class="w-full bg-transparent cursor-pointer appearance-none disabled:opacity-50 disabled:pointer-events-none focus:outline-none
                    [&::-webkit-slider-thumb]:w-2.5
                    [&::-webkit-slider-thumb]:h-2.5
                    [&::-webkit-slider-thumb]:-mt-0.5
                    [&::-webkit-slider-thumb]:appearance-none
                    [&::-webkit-slider-thumb]:bg-white
                    [&::-webkit-slider-thumb]:shadow-[0_0_0_4px_rgba(37,99,235,1)]
                    [&::-webkit-slider-thumb]:rounded-full
                    [&::-webkit-slider-thumb]:transition-all
                    [&::-webkit-slider-thumb]:duration-150
                    [&::-webkit-slider-thumb]:ease-in-out
                    [&::-webkit-slider-thumb]:dark:bg-neutral-700
                    
                    [&::-moz-range-thumb]:w-2.5
                    [&::-moz-range-thumb]:h-2.5
                    [&::-moz-range-thumb]:appearance-none
                    [&::-moz-range-thumb]:bg-white
                    [&::-moz-range-thumb]:border-4
                    [&::-moz-range-thumb]:border-blue-600
                    [&::-moz-range-thumb]:rounded-full
                    [&::-moz-range-thumb]:transition-all
                    [&::-moz-range-thumb]:duration-150
                    [&::-moz-range-thumb]:ease-in-out
                    
                    [&::-webkit-slider-runnable-track]:w-full
                    [&::-webkit-slider-runnable-track]:h-2
                    [&::-webkit-slider-runnable-track]:bg-gray-100
                    [&::-webkit-slider-runnable-track]:rounded-full
                    [&::-webkit-slider-runnable-track]:dark:bg-neutral-700
                    
                    [&::-moz-range-track]:w-full
                    [&::-moz-range-track]:h-2
                    [&::-moz-range-track]:bg-gray-100
                    [&::-moz-range-track]:rounded-full"
                    id="min-and-max-range-slider-usage" aria-orientation="horizontal" min="0" max="5">
            </div>

            <div class="relative">
                <label for="due_date" class="block text-lg font-semibold mb-2 dark:text-white">Due Date</label>
                <input type="date" name="due_date" id="due_date"
                    class=" w-full p-2 shadow-sm rounded-md ring-1 ring-gray-200" value="{{ $task->due_date }}">

                <script>
                    // Initialize Flatpickr
                    flatpickr("#due", {
                        enableTime: true,
                        dateFormat: "Y-m-d",
                        altInput: true,
                        altFormat: "F j, Y",

                    });
                </script>
            </div>

            <!-- Select -->


            <div class="flex flex-row gap-3  items-center justify-between">
                <div class="w-2/3">
                    <label for="tags" class="block text-lg font-semibold mb-2 dark:text-white">Tags</label>
                    <input type="text" id="tags" name="tags"  placeholder="Pisahkan dengan koma" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600"
                    value="{{ $task->tags }}">
                </div>
                
                <!-- End Select -->
            </div>

        </div>
        <div class="relative">
            <a href="/task"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-teal-500 text-teal-500 hover:border-teal-400 hover:text-teal-400 focus:outline-none focus:border-teal-400 focus:text-teal-400 disabled:opacity-50 disabled:pointer-events-none">
                Cancel
            </a>
            <button id="add-task-btn" type="submit"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                Edit Task
            </button>
        </div>
    </div>
</form>
