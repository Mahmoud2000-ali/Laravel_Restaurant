<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.create') }}"
                    class="px-4 py-4 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Menu cccccccc</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr class="bg-white porder-b dark:bg-gray-800 dark:border-gray-700">
                                <td
                                    class="py-4 px-6 text-sn font-medium text-gray-900 whitespace-noweap dark:text-white">
                                    {{ $menu->name }}
                                </td>

                                <td
                                    class="py-4 px-6 text-sn font-medium text-gray-900 whitespace-noweap dark:text-white">
                                    <img src="{{ asset('storage/' . $menu->image) }}" class="w-16 h-16 rounded"
                                        alt="">
                                </td>

                                <td
                                    class="py-4 px-6 text-sn font-medium text-gray-900 whitespace-noweap dark:text-white">
                                    {{ $menu->description }}
                                </td>

                                <td
                                    class="py-4 px-6 text-sn font-medium text-gray-900 whitespace-noweap dark:text-white">
                                    {{ $menu->price }}
                                </td>

                                <td
                                    class="py-4 px-6 text-sn font-medium text-gray-900 whitespace-noweap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.menus.edit', $menu->id) }}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Edit</a>
                                        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST"
                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
