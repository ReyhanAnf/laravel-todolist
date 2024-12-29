<x-layout>
    <main class="px-7 py-4 flex flex-col gap-6 md:gap-4">
        <h2 class="text-xl font-semibold">TO-DO</h2>
        <hr class="bg-slate-800 dark:bg-slate-200">

        @if (session()->has('success'))
            <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                <span id="hs-soft-color-success-label" class="font-bold">Success</span> {{ session('success') }}
            </div>
        @endif
        <div class="flex flex-row justify-between md:flex-nowrap flex-wrap gap-10 md:gap-4 items-center">
            <a href={{ route('add-task') }}
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-primary text-gray-800 hover:bg-secondary focus:outline-none focus:bg-secondary disabled:opacity-50 disabled:pointer-events-none  shadow-sm">
                <x-heroicon-o-plus class="size-5" />
                Add Task
            </a>

            <div class="flex flex-row flex-wrap md:flex-nowrap gap-5 md:gap-3 ">
                <form action="/task" method="get"
                    class="flex flex-row py-5 px-2 w-screen md:w-full overflow-scroll md:overflow-auto gap-3">
                    <div class="relative flex flex-row items-center">
                        <input type="date" min="2015-01-01" date-format="YYYY/DD/MM" name="due_date" id="due_date"  value="{{ $request->get('due_date') }}"
                            class=" w-full p-2 shadow-sm rounded-md ring-1 ring-gray-200 dark:text-neutral-950">

                            <script>
                                // Initialize Flatpickr
                                flatpickr("#due_date", {
                                    enableTime: false,
                                    dateFormat: "Y-m-d",
                                    altInput: true,
    
                                });
                            </script>
                    </div>
                    {{-- <input type="number" placeholder="Priority" name="priority"  value="{{ $request->get('priority') }}"
                        class="py-3 px-4 w-24 block bg-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" /> --}}
                    <select name="status" value="{{ $request->get('status') }}"
                        class="py-3 px-4 pe-5 w-28 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option @if ($request->get('status')) @else selected=''  @endif disable hidden value=''> Status</option>
                        <option @if ($request->get('status') == 'pending') selected @endif value="pending">Pending</option>
                        <option @if ($request->get('status') == 'progress') selected @endif value="progress">Progress</option>
                        <option @if ($request->get('status') == 'done') selected @endif value="done">Done</option>
                        <option @if ($request->get('status') == 'skip') selected @endif value="skip">Skip</option>
                    </select>
                    <button type="submit"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                        <x-hugeicons-filter />
                        Filter
                    </button>
                    <a href={{ route('task') }}
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent border-primary text-gray-800 dark:text-gray-100 hover:bg-secondary focus:outline-none focus:bg-secondary disabled:opacity-50 disabled:pointer-events-none  shadow-sm">
                        Clear Filter
                    </a>
                </form>
                <form action="/task" method="get" class="flex flex-row py-5 w-screen md:w-1/2 overflow-scroll gap-3">
                    <input type="text" name="search" value="{{ $request->get('search') }}"
                        class="py-3 px-4 block w-full bg-gray-100 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="Search..">
                    <button id="add-task-btn" type="submit"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                        Search
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
            @foreach ($tasks as $task)
                @component('components.ui.task-card')
                    @slot('task', $task)
                @endcomponent
            @endforeach
        </div>
    </main>
</x-layout>
