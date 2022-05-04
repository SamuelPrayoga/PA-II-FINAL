@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Keasramaan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Keasramaan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jabatan</th>
                            <th>Asrama</th>
                            <th>Asal</th>
                            <th>No.Telepon</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Keasramaan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jabatan</th>
                            <th>Asrama</th>
                            <th>Asal</th>
                            <th>No.Telepon</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($keasramaan as $ke)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$ke->nama}}</td>
                            <td>{{$ke->keasramaanID}}</td>
                            <td>{{$ke->pendidikan}}</td>
                            <td>{{$ke->jabatan}}</td>
                            <td>{{$ke->asrama}}</td>
                            <td>{{$ke->asal}}</td>
                            <td>{{$ke->notelp}}</td>
                            <td>{{$ke->aktifstart}}</td>
                            <td>{{$ke->aktifend}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
