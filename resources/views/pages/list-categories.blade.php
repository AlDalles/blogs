@extends('layout1')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>

    @forelse($categories as $category)
        @if ($loop->first)
          <table>
        @endif

                  <tr><td><a href="delete-categories.php?id={{ $category->id }}">удалить</td><td>{{ $category->title }}</td><td><a href="update-category.php?id={{ $category->id }}">изменить</td></tr>

        @if ($loop->last)
          </table>
        @endif
    @empty
        <p>no categories</p>
    @endforelse

    @push('scripts')
        <script src="/example.js"></script>
    @endpush
@endsection