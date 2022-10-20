<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin Akan Menghapus Data Ini')">
    @csrf
    @method("delete")
    <i class="las la-pen text-trash font-18"></i>
</form>