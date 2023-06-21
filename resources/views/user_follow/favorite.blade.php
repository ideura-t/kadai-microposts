@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフォローボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-accent btn-sm normal-case" >Unfaborite</button>
        </form>
    @else
        {{-- フォローボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
            @csrf
           <button type="submit" class="btn btn-info btn-sm normal-case" >favorite</button>
        </form>
    @endif
@endif