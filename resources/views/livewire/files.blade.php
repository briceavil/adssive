<div class="overflow-x-auto shadow-md sm:rounded-lg">
    @livewire('wire-elements-modal')
    <div class="p-4 flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900n">
        <!--search input!!-->
        <div class="p-4">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" wire:model="search" wire:keydown.capture="searchFile()" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
            </div>
        </div>
        <!--button!!-->
        <div class="p-4 items-center">
            <button wire:click="$dispatch('openModal', { component: 'create-file', arguments: { file: {{ auth()->user(); }}, advancedMode: true }})" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    {{__('Load new file')}}
                </span>
            </button>
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{__('File name')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('File format')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('File is active?')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{ $file->tittle }}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <div class="font-normal text-gray-500">{{ $file->format }}</div>
                </td>
                <td class="px-6 py-4">
                    {{$file->is_active ?? 'unknown'}}
                </td>

                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <button>Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th scope="row">
                <td class="w-4 p-4">{{ $files->links() }}
                </td>
                </th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>