<!-- resources/views/maestros/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Maestros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="mb-4">
                        <a href="{{ route('maestros.create') }}"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Crear Maestro</a>
                    </div>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">ID</th>
                                    <th scope="col" class="px-6 py-3 text-center">Nombre</th>
                                    <th scope="col" class="px-6 py-3 text-center">Edad</th>
                                    <th scope="col" class="px-6 py-3 text-center">Facultad</th>
                                    <th scope="col" class="px-6 py-3 text-center">Materia</th>
                                    <th scope="col" class="px-6 py-3 text-center">Foto</th>
                                    <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maestros as $maestro)
                                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                        <td class="px-6 py-4 text-center text-gray-900 dark:text-white">{{ $maestro->id }}</td>
                                        <td class="px-6 py-4 text-center text-gray-900 dark:text-white">{{ $maestro->nombre }}</td>
                                        <td class="px-6 py-4 text-center text-gray-900 dark:text-white">{{ $maestro->edad }}</td>
                                        <td class="px-6 py-4 text-center text-gray-900 dark:text-white">{{ $maestro->facultad }}</td>
                                        <td class="px-6 py-4 text-center text-gray-900 dark:text-white">{{ $maestro->materia }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                            @if ($maestro->foto)
                                                <img src="{{ asset('storage/' . $maestro->foto) }}" alt="Foto" class="w-10 h-10 rounded-full">
                                            @else
                                                No hay foto
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('maestros.edit', $maestro->id) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                                <button type="button"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                                    onclick="confirmDelete('{{ $maestro->id }}')">Eliminar</button>

                                                <form id="delete-form-{{ $maestro->id }}" action="{{ route('maestros.destroy', $maestro->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <script>
                        function confirmDelete(id) {
                            alertify.confirm("¿Estás seguro de que quieres eliminar este maestro?",
                            function(){
                                let form = document.createElement('form');
                                form.method = 'POST';
                                form.action = '/maestros/' + id;
                                form.innerHTML = '@csrf @method("DELETE")';
                                document.body.appendChild(form);
                                form.submit();
                                alertify.success('Eliminado');
                            },
                            function(){
                                alertify.error('Cancelado');
                            });
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
