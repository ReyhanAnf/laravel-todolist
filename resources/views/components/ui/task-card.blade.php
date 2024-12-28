<div>
    <div 
        class="
        @if ($task->status == 'done')
       {{ ' bg-gray-300' }}
        @else
        {{ 'bg-white' }}
        @endif
        flex flex-row items-center border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="p-4 md:p-5 w-full flex flex-col gap-2" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
            <h3 class="font-bold text-gray-800 dark:text-white">
                @if ($task->status == 'done')
                    <s>
                        {{ $task->task }}
                    </s>
                @else
                    {{ $task->task }}
                @endif
            </h3>
           <div class="flex flex-row gap-4">
                <div class=" text-gray-500 dark:text-neutral-400 flex gap-3 items-center">
                    <x-heroicon-o-calendar-date-range class="size-5 text-warning" />
                    <p>{{ $task->due_date }}</p>
                </div>
                <div class=" text-gray-500 dark:text-neutral-400 flex gap-3 items-center">
                    @if ($task->status == 'done')
                    <x-hugeicons-checkmark-circle-01  class="size-5 text-success" />
                    @else
                    <x-hugeicons-refresh  class="size-5 text-warning" />
                    @endif
                    <p>{{ $task->status }}</p>
                </div>
           </div>

            <div>
                <div class="inline-flex items-center bg-slate-200 dark:bg-gray-800 px-2 py-1 rounded-md">
                    <span class="size-2 inline-block bg-primary rounded-full me-2 dark:bg-neutral-500"></span>
                    <span class="text-gray-600 text-xs dark:text-neutral-400">{{ $task->tags }}</span>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <form action="/task/{{ $task->id }}" method="post">
                @method('delete')
                @csrf

                <button type="submit" onclick="return confirm('Yakin akan mengahapus task ini ?')" class="px-4 py-2 text-xs sm:text-sm m-2 flex flex-row gap-2 items-center rounded-md bg-danger/15 shadow-sm">
                    <x-hugeicons-delete-02 class="size-4 sm:size-5 shadow-sm rounded-lg" />
                </button>
            </form>
            <a href="/task/{{ $task->id }}/edit" class="px-4 py-2 text-xs sm:text-sm m-2 flex flex-row gap-2 items-center rounded-md bg-primary/15 shadow-sm">
                <x-hugeicons-edit-02 class="size-4 sm:size-5 shadow-sm rounded-lg" />
            </a>
        </div>
    </div>

    <div id="hs-scale-animation-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                        {{ $task->task }}
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto flex flex-col gap-4">
                    <div id="stats" class="flex flex-col flex-wrap gap-5">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                              <tr>
                                <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Status</td>
                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                    <div class='flex flex-row gap-2'>
                                        <x-hugeicons-refresh  class="size-5 text-warning" />
                                        <p>{{ $task->status }}</p>
                                    </div>
                                </td>
                              </tr>
                  
                              <tr>
                                <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Due</td>
                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                    <div class='flex flex-row gap-2'>
                                        <x-heroicon-o-calendar-date-range class="size-5 text-warning" />
                                        <p>{{ $task->due_date }}</p>
                                    </div>
                                </td>
                              </tr>
                  
                              <tr>
                                <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Priority</td>
                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                    <div class='flex flex-row gap-2'>
                                        <x-heroicon-m-exclamation-circle  class="size-5 text-success" />
                                        <p>{{ $task->priority }}</p>
                                    </div>
                                </td>
                              </tr>

                              <tr>
                                <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Tags</td>
                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                    <div class='flex flex-row gap-2'>
                                        <div class="inline-flex items-center bg-slate-200 dark:bg-gray-800 px-2 py-1 rounded-md">
                                            <span class="size-2 inline-block bg-primary rounded-full me-2 dark:bg-neutral-500"></span>
                                            <span class="text-gray-600 text-xs dark:text-neutral-400">{{ $task->tags }}</span>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    
                    </div>
                    <div id="desc" class="py-4">
                        {{ $task->description }}
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        data-hs-overlay="#hs-scale-animation-modal">
                        Close
                    </button>
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
