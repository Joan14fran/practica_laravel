<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Esditar Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">


                <div class="mt-10 sm:mt-0">
                    <div wire:snapshot="{&quot;data&quot;:{&quot;showingQrCode&quot;:false,&quot;showingConfirmation&quot;:false,&quot;showingRecoveryCodes&quot;:false,&quot;code&quot;:null,&quot;confirmingPassword&quot;:false,&quot;confirmableId&quot;:null,&quot;confirmablePassword&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;Fg5dcr2czoGEQAWLtoAt&quot;,&quot;name&quot;:&quot;profile.two-factor-authentication-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;6155332b026a3e5c834fe9a2f3fa2dec95849a7726ada04ff6097dd58f2c023e&quot;}"
                        wire:effects="[]" wire:id="Fg5dcr2czoGEQAWLtoAt" class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Editar Estudiante</h3>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    Add additional security to your account using two factor authentication.
                                </p>
                            </div>

                            <div class="px-4 sm:px-0">

                            </div>
                        </div>

                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="POST" action="{{ route('students.update', $student->id) }}" class="max-w-md mx-auto">
                                @csrf
                                @method('PUT')

                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                                </div>

                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="number" name="age" id="age" value="{{ old('age', $student->age) }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                                    <label for="age" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                                </div>

                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">Editar</button>
                                <a href="{{ route('students.index') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Cancel</a>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
