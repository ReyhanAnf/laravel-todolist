<x-layout>
    <div class="flex flex-1 w-full h-screen items-center md:items-end md:-mt-28 justify-center">
    
        <div id="card-register"
            class="bg-white w-1/2 border rounded-xl shadow-md sm:flex dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div
                class="shrink-0 relative w-full rounded-t-xl overflow-hidden pt-[40%] sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-xs">
                <img class="size-full absolute top-0 start-0 object-cover"
                    src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80"
                    alt="Card Image">
            </div>
            <div class="flex flex-wrap w-full gap-2">
                <div class="p-4 w-full flex flex-col h-full gap-3 sm:p-7">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Register
                    </h3>
                    <form action="/register" method="post" class="w-full">
                        @csrf
                        <div class="w-full space-y-3">
                            
                            <div class="relative" id="i-name">
                                <input  type="text" name="name" id="hs-floating-input-name-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="Enter name">
                                <label for="hs-floating-input-name-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                peer-focus:scale-90
                                peer-focus:translate-x-0.5
                                peer-focus:-translate-y-1.5
                                peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                peer-[:not(:placeholder-shown)]:scale-90
                                peer-[:not(:placeholder-shown)]:translate-x-0.5
                                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 pl-10">Name</label>
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
                            <div class="text-xs text-warning">@error('name') {{ $message }} @enderror</div>
    
                            <div class="relative" id="i-username">
                                <input wire:model="username" type="text" name="username" id="hs-floating-input-username-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="Enter username">
                                <label for="hs-floating-input-username-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                  peer-focus:scale-90
                                  peer-focus:translate-x-0.5
                                  peer-focus:-translate-y-1.5
                                  peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                  peer-[:not(:placeholder-shown)]:scale-90
                                  peer-[:not(:placeholder-shown)]:translate-x-0.5
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                  peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 pl-10">Username</label>
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
                            <div class="text-xs text-warning">@error('username') {{ $message }} @enderror</div>
                            
                            <div class="relative" id="i-email">
                                <input wire:model="email" type="email" name="email" id="hs-floating-input-email-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
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
    
                            <div class="relative" id="i-password">
                                <input type="password" name="password" id="hs-strong-password-with-indicator-and-hint-in-popover" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="Enter password">
                                <button type="button" data-hs-toggle-password='{
                                    "target": "#hs-strong-password-with-indicator-and-hint-in-popover"
                                  }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                  <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                    <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                                  </svg>
                                </button>
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
                                <div id="hs-strong-password-popover" class="hidden absolute z-10 w-full bg-white shadow-md rounded-lg p-4 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700">
                                    <div id="hs-strong-password-in-popover" data-hs-strong-password='{
                                        "target": "#hs-strong-password-with-indicator-and-hint-in-popover",
                                        "hints": "#hs-strong-password-popover",
                                        "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-blue-500 opacity-50 mx-1",
                                        "mode": "popover"
                                      }' class="flex mt-2 -mx-1">
                                    </div>
                            
                                    <h4 class="mt-3 text-sm font-semibold text-gray-800 dark:text-white">
                                      Your password must contain:
                                    </h4>
                            
                                    <ul class="space-y-1 text-sm text-gray-500 dark:text-neutral-500">
                                      <li data-hs-strong-password-hints-rule-text="min-length" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                        <span class="hidden" data-check="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                        </span>
                                        <span data-uncheck="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                          </svg>
                                        </span>
                                        Minimum number of characters is 6.
                                      </li>
                                      <li data-hs-strong-password-hints-rule-text="lowercase" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                        <span class="hidden" data-check="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                        </span>
                                        <span data-uncheck="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                          </svg>
                                        </span>
                                        Should contain lowercase.
                                      </li>
                                      <li data-hs-strong-password-hints-rule-text="uppercase" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                        <span class="hidden" data-check="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                        </span>
                                        <span data-uncheck="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                          </svg>
                                        </span>
                                        Should contain uppercase.
                                      </li>
                                      <li data-hs-strong-password-hints-rule-text="numbers" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                        <span class="hidden" data-check="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                        </span>
                                        <span data-uncheck="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                          </svg>
                                        </span>
                                        Should contain numbers.
                                      </li>
                                      <li data-hs-strong-password-hints-rule-text="special-characters" class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
                                        <span class="hidden" data-check="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                          </svg>
                                        </span>
                                        <span data-uncheck="">
                                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                          </svg>
                                        </span>
                                        Should contain special characters.
                                      </li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="text-xs text-warning">@error('password') {{ $message }} @enderror</div>
                            
                            <div class="relative" id="i-confirm-password">
                                <input type="password" name="confirm_password" id="hs-floating-input-confirm-password-value" class="peer p-4 pl-10 block w-full bg-gray-100 border-transparent  rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600
                                focus:pt-6
                                focus:pb-2
                                [&:not(:placeholder-shown)]:pt-6
                                [&:not(:placeholder-shown)]:pb-2
                                autofill:pt-6
                                autofill:pb-2" placeholder="Enter confirm-password">
                                <button type="button" data-hs-toggle-password='{
                                    "target": "#hs-floating-input-confirm-password-value"
                                  }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                  <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                                    <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                                  </svg>
                                </button>
                                <label for="hs-floating-input-confirm-password-value" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                  peer-focus:scale-90
                                  peer-focus:translate-x-0.5
                                  peer-focus:-translate-y-1.5
                                  peer-focus:text-gray-500 dark:peer-focus:text-neutral-500
                                  peer-[:not(:placeholder-shown)]:scale-90
                                  peer-[:not(:placeholder-shown)]:translate-x-0.5
                                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                  peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 pl-10">Confirm Password</label>
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
                            <div class="text-xs text-warning">@error('confirm_password') {{ $message }} @enderror</div>

                            
                            <div class="relative">
                                <a href="/login" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-teal-500 text-teal-500 hover:border-teal-400 hover:text-teal-400 focus:outline-none focus:border-teal-400 focus:text-teal-400 disabled:opacity-50 disabled:pointer-events-none">
                                    Login
                                </a>
                                <button id="register-btn" type="submit" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-static-backdrop-modal" data-hs-overlay="#hs-static-backdrop-modal"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
    
                    <div class="mt-5 sm:mt-auto">
                        <p class="text-xs text-gray-500 dark:text-neutral-500">
                            Sudah punya akun? Pilih <span class="text-emerald-400">Login</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>