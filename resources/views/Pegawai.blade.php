@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Pegawai</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Aktif End</th>
                            <th>Aktif Start</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Pegawai</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Aktif End</th>
                            <th>Aktif Start</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($pegawai as $peg)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $peg->nama }}</td>
                            <td>{{ $peg->pegawaiID }}</td>
                            <td>{{ $peg->bagian }}</td>
                            <td>{{ $peg->jabatan }}</td>
                            <td>{{ $peg->pendidikan }}</td>
                            <td>{{ $peg->alamat }}</td>
                            <td>{{ $peg->notelp }}</td>
                            <td>{{ $peg->aktifstart }}</td>
                            <td>{{ $peg->aktifend }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
