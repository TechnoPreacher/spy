<h3>create comment form</h3> {{--style for h3 tag get from layout--}}



<div class="container">


    <form method="POST" action="{{route('comment.Store')}}">
        @csrf

        <div><label for="user_id">ID:</label>
            <input id="user_is" type="text" value="{{old('user_id')}}" name="user_id" ></div>
        <div><label for="text">text:</label>
            <input id="patextss" type="text" value="{{old('text')}}" name="text" ></div>
        <input type="submit" value="Register">
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
