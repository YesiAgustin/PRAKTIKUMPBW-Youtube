<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot:heading>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ (new \Carbon\Carbon($user->published_at))->format ('d M Y')}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>