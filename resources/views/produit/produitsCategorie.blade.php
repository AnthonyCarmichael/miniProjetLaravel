<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des produits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 space-y-4">
                @foreach ($produits as $produit)
                    <div class="p-6 text-gray-900 space-y-4">
                        <h3 class="font-semibold text-lg">Produit - {{ $produit->produit }}</h3>
                        <p class="font-normal"><span                        class="font-semibold">Catégorie :</span>
                            {{ $produit->categorie->categorie }}</p>
                        <p class="font-normal"><span class="font-semibold">Description :</span>
                        {{ $produit->description }}</p>
                        <p class="font-normal"><span class="font-semibold">Prix :</span>
                        {{ $produit->prix }} $</p>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>