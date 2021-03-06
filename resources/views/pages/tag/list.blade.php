@extends('layout1')

@section('title', 'tags')

@section('content')
    <h1>Tags</h1>

    @forelse($tags as $tag)
        @if ($loop->first)
          <table  class="table table-striped">
        @endif

              <tr><td>{{ $tag->title }}
                  </td><td><form action="/tag/{{$tag->id}}/delete" method="get">
                          <input type="submit" value="удалить"></form></td><td><form action="/tag/{{$tag->id}}/update" method="get">
                          <input type="submit" value="изменить"></form></td></tr>

        @if ($loop->last)
          </table>
        @endif
    @empty
        <p>no tags</p>
    @endforelse

    @push('scripts')
        <script src="/example.js"></script>
    @endpush

@endsection