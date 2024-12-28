<x-layout>

    <div class="flex flex-col gap-5 w-full h-screen items-center -mt-20 justify-center">
        @if (session()->has('success'))
            
        <div class="w-1/2">
            <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
                <div class="flex">
                    <div class="shrink-0">
                        <!-- Icon -->
                        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </span>
                        <!-- End Icon -->
                    </div>
                    <div class="ms-3">
                        <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white">
                            {{ session('status') }}
                        </h3>
                        <p class="text-sm text-gray-700 dark:text-neutral-400">
                            Silahkan untuk melanjutkan login!
                        </p>
                    </div>
                </div>
            </div>
        </div>
            
        @endif
          
        <div id="card-register"
            class="bg-white w-4/5 mt-20 md:lg:w-1/2 border rounded-xl shadow-sm sm:flex dark:bg-neutral-950 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div
                class="shrink-0 relative w-full md:w-1/2 rounded-t-xl overflow-hidden pt-[40%] sm:rounded-s-xl sm:max-w-52 md:rounded-se-none md:max-w-xs">
                <img class="size-full absolute top-0 start-0 object-cover"
                    src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                    alt="Card Image">
            </div>
            <div class="flex flex-wrap w-full gap-2">
                <div class="p-4 w-full flex flex-col h-full gap-3 sm:p-7">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Login
                    </h3>
    
                    <form action="/login" method="post" class="w-full">
                        @csrf
                        <div class="w-full space-y-3">
    
                            <div class="relative">
                                <input wire:model='email' type="email" name="email" id="hs-floating-input-email-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="you@email.com">
                                <label for="hs-floating-input-email-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                  peer-focus:scale-90
                                  peer-focus:translate-x-0.5
                                  peer-focus:-translate-y-1.5
                                  peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                  peer-[:not(:placeholder-shown)]:scale-90
                                  peer-[:not(:placeholder-shown)]:translate-x-0.5
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                  peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 pl-10">Email</label>
                                <div
                                  class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                  <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round">
                                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                      <circle cx="12" cy="7" r="4"></circle>
                                  </svg>
                                </div>
                            </div>
                            <div class="text-xs text-warning">@error('email') {{ $message }} @enderror</div>
    
    
                            <div class="relative">
                                <input wire:model='password' type="password" name="password" id="hs-floating-input-password-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="Enter password">
                                <label for="hs-floating-input-password-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                  peer-focus:scale-90
                                  peer-focus:translate-x-0.5
                                  peer-focus:-translate-y-1.5
                                  peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                  peer-[:not(:placeholder-shown)]:scale-90
                                  peer-[:not(:placeholder-shown)]:translate-x-0.5
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                  peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 pl-10">Password</label>
                                <div
                                  class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                  <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
                                        <circle cx="16.5" cy="7.5" r=".5"></circle>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-xs text-warning">@error('password') {{ $message }} @enderror</div>
    
    
                            <div class="relative">
                                <a href="/register" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-teal-500 text-teal-500 hover:border-teal-400 hover:text-teal-400 focus:outline-none focus:border-teal-400 focus:text-teal-400 disabled:opacity-50 disabled:pointer-events-none">
                                    Register
                                </a>
                                <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
    
                    <div class="mt-5 sm:mt-auto">
                        <p class="text-xs text-gray-500 dark:text-neutral-500">
                            Belum punya akun? Pilih <span class="text-emerald-400">Register</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</x-layout>