<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panier') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="panierGrid" class="p-6 text-gray-900 space-y-4 grid grid-cols-2">
                    @foreach($produits as $produit)
                        <div>
                            <p>
                                {{ $produit['produit']->produit }}
                            </p>
                        </div>
                        <div>
                            <p>
                                {{ $produit['quantite']}}
                            </p>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>