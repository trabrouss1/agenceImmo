<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact à été fait pour le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>

-Nom    : {{ $data['lastname'] }}
-Prénom : {{ $data['firstname'] }}
-Téléphone : {{ $data['phone'] }}
-Email  : {{ $data['email'] }}

**********************MESSAGE**********************
{{ $data['message'] }}<br/>


</x-mail::message>
