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
                

            @if (Session::has('succes'))
                <div role="alert">
                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">Succès</div>
                        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <p>{{ Session::get('succes') }}</p>
                        </div>
                    </div>
            @elseif (Session::has('erreur'))
                <div role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">Erreur</div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>{{ Session::get('erreur') }}</p>
                    </div>
                </div>
            @endif

                @foreach ($produits as $produit)
                    <div class="flex flex-row items-center">
                        <p class="font-semibold text-lg">{{ $produit->produit }} -
                            <a class="font-normal text-base text-sky-700 underline" href="{{
                                route('produit', ['id' => $produit->id_produit]) }}">
                                En savoir plus
                            </a>
                        </p>
                        <form method="get" action="{{ route('modificationProduit') }}">
                            @csrf
                            <button type="submit" name="id_produit" value="{{ $produit->id_produit }}" class="w-5 mx-2">
                            <img src="{{ asset('img/edit-icon.png') }}" alt="Modifier un produit" />
                            </button>
                        </form>
                        <form method="post" action="{{ route('suppressionProduit') }}">
                            @csrf
                            <button type="submit" name="id_produit" value="{{ $produit->id_produit }}" class="w-5">
                            <img type="image" src="{{ asset('img/delete-icon.png') }}" alt="Supprimer un produit" />
                            </button>
                        </form>
                    </div>

                    
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
