@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Aktif Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Prodi</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Jalur Masuk</th>
                            <th>No.Telepon</th>
                            <th>Email Aktif</th>
                            <th>Dosen Wali</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Prodi</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th>Jalur Masuk</th>
                            <th>No.Telepon</th>
                            <th>Email Aktif</th>
                            <th>Dosen Wali</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($mahasiswaaktif as $aktif)
                        @php $i=1 @endphp
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $aktif->prodi }}</td>
                            <td>{{ $aktif->nim }}</td>
                            <td>{{ $aktif->nama }}</td>
                            <td>{{ $aktif->fakultas }}</td>
                            <td>{{ $aktif->kelas }}</td>
                            <td width="5%">{{ $aktif->angkatan }}</td>
                            <td width="5%">{{ $aktif->jalurmasuk }}</td>
                            <td>{{ $aktif->notelp }}</td>
                            <td>{{ $aktif->emailaktif }}</td>
                            <td>{{ $aktif->dosenwali }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
