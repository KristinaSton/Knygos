<h2>Prideti nauja knyga</h2>
<a href="{{ url('home') }}"> Atgal</a>
  
<form action="{{ url('store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Pavadinimas">
    <input type="text" name="summary" placeholder="Santrauka">
    <input type="text" name="ISBN" placeholder="ISBN">
    <input type="text" name="image" placeholder="Paveiksliukas">
    <input type="number" name="pageCount" placeholder="Puslapiu skaicius">
    <input type="text" name="category" placeholder="Kategorija">
    <input type="text" name="isReserved" placeholder="Rezervuota">
    <button type="submit" >Prideti</button>
</form>