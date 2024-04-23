<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un produit') }}
        </h2>
    </x-slot>

    @php
    /*
        print_r($produit)
    */
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <form method="post" action="{{ route('enregistrementProduit',['id' => $produit->id_produit]) }}" class="border-solid border-2 border-gray-500 rounded-xl w-4/5 m-auto" id="formProduit">
                        @csrf

                        <label for="produit" class="text-right">Produit:</label>
                        <input type="text" name="produit" id="produit" value="{{ $produit->produit }}">


                        <label for="description" class="text-right">Description:</label>
                        <input type="text" name="description" id="description" value="{{ $produit->description }}">

                        <label for="prix" class="text-right">Prix:</label>
                        <input type="text" name="prix" id="prix" value="{{ $produit->prix }}">

                        <div class="full-width flex border justify-self-end">
                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Modifier
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
