<div class="bg-white">
    <div id="search-form" wire:loading.class="opacity-50">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <form wire:submit="search">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h1 class="text-2xl font-bold leading-10 text-gray-900">Search with gSQL</h1>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Google Search Query Language finds better results with the help of Google Advanced Search</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-full">
                                    <label for="search-term" class="block text-sm font-medium leading-6 text-gray-900">Search Term</label>
                                    <div class="mt-2">
                                        <input
                                            wire:model="searchForm.q"
                                            type="text"
                                            placeholder="PHP Developer Jobs in Tashkent"
                                            name="search-term"
                                            id="search-term"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            required
                                        >
                                        <div>
                                            @error('searchForm.q') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-full">
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input
                                                wire:model="searchForm.is_exact_search"
                                                id="exact_search"
                                                name="exact_search"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                            >
                                            <div>
                                                @error('searchForm.is_exact_search') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="exact_search" class="font-medium text-gray-900">Strict search</label>
                                            <p class="text-gray-500">When enabled, it performs exact search for given search-term</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="start-date" class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                                    <div class="mt-2">
                                        <input
                                            wire:model="searchForm.after"
                                            type="text"
                                            placeholder="YYYY-mm-dd"
                                            name="start-date"
                                            id="start-date"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        >
                                        <div>
                                            @error('searchForm.after') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="end-date" class="block text-sm font-medium leading-6 text-gray-900">End Date</label>
                                    <div class="mt-2">
                                        <input
                                            wire:model="searchForm.before"
                                            type="text"
                                            placeholder="YYYY-mm-dd"
                                            name="end-date"
                                            id="end-date"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        >
                                        <div>
                                            @error('searchForm.before') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                                            <input
                                                wire:model="searchForm.site"
                                                type="text"
                                                placeholder="hh.uz"
                                                name="website"
                                                id="website"
                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            >
                                            <div>
                                                @error('searchForm.site') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="keywords" class="block text-sm font-medium leading-6 text-gray-900">Exclude keywords/website</label>
                                    <div class="mt-2">
                                        <input
                                            wire:model="searchForm.exclude"
                                            type="text"
                                            placeholder="React,Vue or larajobs.com"
                                            name="keywords"
                                            id="keywords"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        >
                                        <div>
                                            @error('searchForm.exclude') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Reset</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="search-result">
        {!! $searchResult !!}
    </div>
</div>
