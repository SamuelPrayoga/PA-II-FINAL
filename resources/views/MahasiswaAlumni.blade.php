@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Alumni Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program Studi</th>
                            <th>NIM</th>
                            <th>Nama Alumni</th>
                            <th>Angkatan</th>
                            <th>Tahun Lulus</th>
                            <th>Lokasi Kerja</th>
                            <th>Posisi</th>
                            <th>No.Telepon</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Program Studi</th>
                            <th>NIM</th>
                            <th>Nama Alumni</th>
                            <th>Angkatan</th>
                            <th>Tahun Lulus</th>
                            <th>Lokasi Kerja</th>
                            <th>Posisi</th>
                            <th>No.Telepon</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($mahasiswaalumni as $alumni)
                        @php $i=1 @endphp
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $alumni->prodi }}</td>
                            <td>{{ $alumni->nim }}</td>
                            <td>{{ $alumni->nama }}</td>
                            <td width="7%">{{ $alumni->angkatan }}</td>
                            <td width="7%">{{ $alumni->lulus }}</td>
                            <td>{{ $alumni->lokasikerja }}</td>
                            <td>{{ $alumni->posisi }}</td>
                            <td>{{ $alumni->notelp }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
