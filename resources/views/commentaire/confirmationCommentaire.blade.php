<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p class="font-bold">Merci pour votre {{$commentaire['choix']}}</p>
                    <p>S’il y a lieu, un agent vous appellera sous peu au numéro suivant : <b>{{$commentaire['telephone']}} </b></p>
                    <p>De plus, un courriel de confirmation vous sera envoyé à l’adresse suivante : <b> {{ Auth::user()->email }}</b></p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
