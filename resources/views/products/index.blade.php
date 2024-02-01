<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <table class="min-w-full text-sm text-gray-400">
                <thead class="bg-gray-800 text-xs font-medium uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Código</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Preço</th>
                        <th scope="col" class="px-6 py-3 text-left tracking-wider">Situação</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">

                    @foreach ($products as $product)
                        <tr class="bg-black bg-opacity-20">
                            <td class="pl-4">{{ $product->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $product->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td class="flexwhitespace-nowrap px-6 py-4">
                                <strong class="{{ $product->status ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $product->status ? 'Ativo' : 'Inativo' }}
                                </strong>
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
