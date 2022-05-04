@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen Tugas Belajar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Prodi</th>
                            <th>Lokasi Tugas Belajar</th>
                            <th>Program</th>
                            <th>Program Studi</th>
                            <th>Mulai Tugas Belajar</th>
                            <th>Rencana Aktif Kembali</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Prodi</th>
                            <th>Lokasi Tugas Belajar</th>
                            <th>Program</th>
                            <th>Program Studi</th>
                            <th>Mulai Tugas Belajar</th>
                            <th>Rencana Aktif Kembali</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($dosentugas as $dostug )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dostug->namaDosen}}</td>
                            <td>{{ $dostug->nidn}}</td>
                            <td>{{ $dostug->prodi}}</td>
                            <td>{{ $dostug->lokasi}}</td>
                            <td>{{ $dostug->program}}</td>
                            <td>{{ $dostug->programStudi}}</td>
                            <td>{{ $dostug->mulaiTugas}}</td>
                            <td>{{ $dostug->rencanaAktif}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
