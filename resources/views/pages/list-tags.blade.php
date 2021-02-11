@extends('layout1')

@section('title', 'tags')

@section('content')
    <h1>Tags</h1>

    @forelse($tags as $tag)
        @if ($loop->first)
            <table>
                @endif

                <tr><td><a href="delete-tags.php?id={{ $tag->id }}">удалить</td><td>{{ $tag->title }}</td><td><a href="update-tag.php?id={{ $tag->id }}">изменить</td></tr>

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