<x-layout>
    <main class="px-7 py-4 flex flex-col gap-6">
        <h2 class="text-xl font-semibold">Edit Task</h2>
        <hr class="bg-slate-800 dark:bg-slate-200">

        <div class=" w-full">
            @component('components.ui.task-form-edit')
                @slot('task', $task[0])
            @endcomponent
        </div>

    </main>
</x-layout>