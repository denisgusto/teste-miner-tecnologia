<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <table class="min-w-full text-sm text-gray-400">
                <thead class="bg-gray-800 text-xs font-medium uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Código</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">E-mail</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">

                    @foreach ($users as $user)
                        <tr class="bg-black bg-opacity-20">
                            <td class="pl-4">{{ $user->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
