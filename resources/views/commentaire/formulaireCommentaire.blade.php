<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulaire des commentaires') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <form method="post" action="{{ route('insertionCommentaire') }}" class="border-solid border-2 border-gray-500 rounded-xl w-4/5 m-auto" id="formA">
                        @csrf 
                    
                        <label for="nom">Demandeur:</label>
                        <input type="text" name="nom" id="nom" readonly value="{{ Auth::user()->name }}">
                    

                        <label for="tel">Numéro de téléphone:</label>
                        <input type="text" name="telephone" id="tel">
                    
                        <label for="sujet">Sujet:</label>
                        <input type="text" name="sujet" id="sujet">
                        
                        <label for="produit">Produit concerné:</label>
                        <select name="produit" id="produit">
                            @foreach ($produits as $produit)
                                <option value="{{ $produit->id_produit }}">{{ $produit->produit }}</option>    
                            @endforeach
                        </select>

                        <p class="full-width">Type de message</p>
                        <div class="">
                            <input type="radio" value="question" name="choix">
                            <label for="choix" class="">Question:</label>
                        </div>
                        <div>
                            <input type="radio" value="commentaire" name="choix">
                            <label for="choix" class="">Commentaire</label> 
                        </div>

                        <label class="full-width" for="">Question/Commentaire:</label>
                        <textarea class="min-h-28 full-width" type="text" name="message" id="commentaire"></textarea>
                        
                
                        <div class="full-width flex">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-auto">Envoyer</button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="form_errors_div text-red-500 w-4/5 m-auto">
                            <p class="font-semibold">Veuillez corriger l'erreur ou les erreurs suivante(s) :</p>
                            <ul class="ml-5">
                                @foreach ($errors->all() as $error)
                                    <li class="list-disc">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>