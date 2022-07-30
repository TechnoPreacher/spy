<h3>show/update last comment form</h3> {{--style for h3 tag get from layout--}}



<div class="container">




    <form method="POST" action="{{route('comment.Update')}}">
        @csrf
        <div><label for="id">id:</label>
            <input id="id" type="text" name="id" value="{{$comment->id}}" readonly></div>
        <div><label for="text">text:</label>
            <input id="text" type="text" name="text" value="{{$comment->text}}"></div>

        <input type="submit" value="Update">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        {{--    @else--}}
        {{--        <p>all validation is pass!</p>--}}
    @endif

</div>
