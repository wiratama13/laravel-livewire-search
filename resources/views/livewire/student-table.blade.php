<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="cari produk">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Nis</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->nis }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $students->links() }}
</div>
