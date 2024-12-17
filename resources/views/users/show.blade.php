<x-app-layout title="Users">
    <x-slot name="heading">{{ $user->name }}</x-slot:heading>

    <div> {{ $user->email }} </div>
    <div> Registerd at {{ $user->created_at->diffForHumans() }} </div>
</x-app-layout>