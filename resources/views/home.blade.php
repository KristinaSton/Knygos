<h1>Book List</h1>
<a href="{{ url('/logout') }}">Atsijungti</a>
<form type="get" action="{{url('/search')}}">
    <input type="search" placeholder="search" name="query"></input>
    <button type="submit">Search</button>
</form>
<form type="get" action="{{url('/home')}}">
<button type="submit" ><-</button>
</form>
<table>
    <th>
        <td></td>
        <td>pavadinimas</td>
        <td>santrauka</td>
        <td>ISBN</td>
        <td>kategorija</td>
        <td>uzimta</td>
        <td></td>
    </th>    
    @foreach($booklist as $book)
    <tr>
        <td><img alt="" src="{{$book['image']}}"></td>
        <td>{{$book['name']}}</td>
        <td>{{$book['summary']}}</td>
        <td>{{$book['ISBN']}}</td>
        <td>{{$book['category']}}</td>
        <td>{{$book['isReserved']}}</td>
        <td>
            <form type="post" action="{{ url('reserve', [$book->id]) }}" method='post'>
                @csrf
                @method('PUT')
                <button>rezervuoti</button>
            </form>
            <form type="post" action="{{ url('like', [$book->id]) }}">
                <button> <'3 </button>
            </form>
        </td>  
        <td>    
            <form type="post" action="{{ url('edit', [$book->id]) }}">
                <button> Pakeisti </button>
            </form>
            <form type="post" action="{{ url('destroy', [$book->id]) }}">
                    @csrf
                    @method('DELETE')
                <button> Istrinti </button>
            </form>
        </td>      
    </tr>
    @endforeach
</table>

<form type="post" action="{{ url('create')}}">
            <button> Prideti </button>
</form>