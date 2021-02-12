@extends('layout1')

@section('title', 'tags')

@section('content')
    <h1>Tags</h1>

    @forelse($tags as $tag)
        @if ($loop->first)
            <table>
                @endif

                <tr><td><form action="delete-tags.php" method="post"><input type="hidden" name="id" value="{{$tag->id}}"><input type="submit" value="удалить"></form></td><td>{{ $tag->title }}
                    </td><td><form action="update-tag.php" method="post"><input type="hidden" name="id" value="{{$tag->id}}"><input type="submit" value="изменить"></form></td></tr>

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