<div class="d-flex">
    <a href="{{ route('barang.show', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-list"></i></a>
    <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
    <div>
        <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
