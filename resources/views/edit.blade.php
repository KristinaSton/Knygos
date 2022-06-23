<h2>Pakeisti knygos informacija</h2>
<a href="{{ url('home') }}"> Atgal</a>
  
<form action="{{ url('store', [$book->id])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="{{$book['name'] }}">
    <input type="text" name="summary" placeholder="{{ $book['summary'] }}">
    <input type="text" name="ISBN" value="{{ $book['ISBN'] }}">
    <input type="text" name="image" value="{{ $book['image'] }}">
    <input type="number" name="pageCount" value="{{ $book['pageCount'] }}">
    <input type="text" name="category" value="{{ $book['category'] }}">
    <input type="text" name="isReserved" value="{{ $book['isReserved'] }}">
    <button type="submit" >Pakeisti</button>
</form>

