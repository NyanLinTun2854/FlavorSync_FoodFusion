@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Manage Recipes</h1>

    <table class="table-auto w-full border-collapse border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">Name</th>
                <th class="p-2 border">User</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recipes as $recipe)
                <tr>
                    <td class="p-2 border">{{ $recipe->name }}</td>
                    <td class="p-2 border">{{ $recipe->user->first_name }}</td>
                    <td class="p-2 border">
                        {{ $recipe->is_approved == '1' ? 'Approved' : 'Pending' }}
                    </td>
                    <td class="p-2 border flex gap-2">
                        @if($recipe->is_approved == '1')
                            <!-- Reject button -->
                            <form method="POST" action="{{ route('admin.recipes.reject', $recipe) }}">
                                @csrf
                                @method('PATCH')
                                <button class="px-3 py-1 bg-red-500 text-white rounded cursor-pointer hover:bg-red-600">
                                    Reject
                                </button>
                            </form>
                        @else
                            <!-- Approve button -->
                            <form method="POST" action="{{ route('admin.recipes.approve', $recipe) }}">
                                @csrf
                                @method('PATCH')
                                <button class="px-3 py-1 bg-green-500 text-white rounded cursor-pointer hover:bg-green-600">
                                    Approve
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-4 text-center">No recipes found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection