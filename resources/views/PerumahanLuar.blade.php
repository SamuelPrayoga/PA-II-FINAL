@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Perumahan Dalam Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th>Jumlah Kamar</th>
                            <th>Kapasitas / Kamar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th>Jumlah Kamar</th>
                            <th>Kapasitas / Kamar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($perumahanluar as $luar)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $luar->namaperumahan }}</td>
                            <td width="5%"><center>{{ $luar->jumlahkamar }}</center></td>
                            <td width="5%"><center>{{ $luar->kapasitaskamar }}</center></td>
                            <td width="5%"><center>{{ $luar->jumlah }}</center></td>
                            <td>{{ $luar->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
