<x-layout>
    <main class="px-7 py-4 flex flex-col gap-6">
        <h2 class="text-xl font-semibold">Add Task</h2>
        <hr class="bg-slate-800 dark:bg-slate-200">

        <div class=" w-full">
            @component('components.ui.task-form-add')
            @endcomponent
        </div>

    </main>
</x-layout>