<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Permissões') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <table class="min-w-full text-sm text-gray-400">
                <thead class="bg-gray-800 text-xs font-medium uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Código</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Permissões</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">

                    @foreach ($users as $user)
                        <tr class="bg-black bg-opacity-20">
                            <td class="pl-4">{{ $user->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                            <td class="flex-col whitespace-nowrap px-6 py-4">

                                @foreach ($permissions as $permission)
                                    <div class="flex">
                                        <form action="{{ route('permissions.update', ['userId' => $user->id, 'permissionId' => $permission->id]) }}" method="POST">
                                            @method('PUT')
                                            @csrf

                                            <strong
                                                class="{{ $user->permissions->contains('name', $permission->name) ? 'text-green-600' : 'text-red-600' }}">
                                                <button>
                                                    {{ $permission->name }}
                                                </button>
                                            </strong>

                                        </form>
                                    </div>
                                @endforeach

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>








    {{-- </div> --}}
    {{-- </div> --}}
    </div>
    </div>
</x-app-layout>
