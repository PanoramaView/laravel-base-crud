<form action="{{route('comics.destroy', $id)}}" method="post" class="delete_form">
    @csrf
    @method('DELETE')

    <input type="submit" value="Cancella">
</form>
