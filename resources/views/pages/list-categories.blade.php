@extends('layout1')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>

    @forelse($categories as $category)
        @if ($loop->first)
          <table>
        @endif

              <tr><td>{{ $category->title }}
                  </td><td><form action="update-category.php" method="post"><input type="hidden" name="id" value="{{$category->id}}">
                          <input type="submit" value="изменить"></form></td><td><form action="delete-categories.php" method="post"><input type="hidden" name="id" value="{{$category->id}}">
                          <input type="submit" value="удалить"></form></td></tr>

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