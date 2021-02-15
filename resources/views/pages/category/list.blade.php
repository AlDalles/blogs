@extends('layout1')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>

    @forelse($categories as $category)
        @if ($loop->first)
          <table  class="table table-striped">
        @endif

              <tr><td>{{ $category->title }}
                  </td><td><form action="/category/{{$category->id}}/delete" method="get">
                          <input type="submit" value="удалить"></form></td><td><form action="/category/{{$category->id}}/update" method="get">
                          <input type="submit" value="изменить"></form></td></tr>

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