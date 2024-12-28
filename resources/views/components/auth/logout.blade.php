<form action="/logout" method="post" class="w-full">
    @csrf
    <button type="submit" class="flex items-center gap-x-3.5 py-2 px-3 w-full rounded-lg text-sm text-danger hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
        Logout
    </button>
</form>
