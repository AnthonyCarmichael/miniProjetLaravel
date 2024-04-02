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
                    <form action="post" class="border-solid border-2 border-gray-500 rounded-xl w-4/5 m-auto" id="formCommentaire">
            
                    
                        <label for="nom">Demandeur:</label>
                        <input type="text" name="nom" id="nom">
                    

                        <label for="tel">Numéro de téléphone:</label>
                        <input type="text" name="tel" id="tel">
                    
                        <label for="sujet">Sujet:</label>
                        <input type="text" name="sujet" id="sujet">
                        

                        <label for="produit">Produit concerné:</label>
                        <input type="text" name="produit">

                        <p class="full-width">Type de message:</p>
                        <div class="flex">
                            
                            <input type="radio">
                            <label for="" class="mx-5">Question:</label>

                            <input type="radio" class="ml-5">
                            <label for="" class="mx-5">Commentaire:</label>
                            
                        </div>
            
                            
                        <div class="full-width">
                            <label for="">Question/Commentaire:</label>
                            <input class="min-h-28" type="text" name="" id="commentaire">
                        </div>
                
                        <div class="full-width flex">
                            <button type="submit" class="shadow-cyan-500/50 shadow shadow-blue-500/40 hover:shadow-indigo-500/40 m-auto p-1">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>