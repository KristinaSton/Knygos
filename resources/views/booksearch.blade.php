@extends ('home')
@section('content')

<table>
@foreach($booklist as $book)
    <tr>
        <td><img alt="" src="{{$book['image']}}"></td>
        <td>{{$book['name']}}</td>
        <td>{{$book['summary']}}</td>
        <td>{{$book['ISBN']}}</td>
        <td>{{$book['category']}}</td>
        <td>
            <form type="post" action="{{ url('reserve', [$book->id]) }}">
                <button type='botton'>rezervuoti</button>
            </form>
            <form type="post" action="{{ url('like', [$book->id]) }}">
                <button type='botton'> <'3 </button>
            </form>
        </td>    
        <td>    
            <form action="{{ url('destroy',[$book->id]) }}" method="POST">
                    <a href="{{ url('edit',[$book->id]) }}">Pakeisti</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" >Istrinti</button>
                </form>
        </td>    
    </tr>
    @endforeach
</table>
@endsection