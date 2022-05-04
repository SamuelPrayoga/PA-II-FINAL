@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen Aktif</h6>
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
                            <th>Jabatan Akademik</th>
                            <th>Golongan Kepangkatan</th>
                            <th>Status Ikatan Kerja</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>No</td>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Prodi</th>
                            <th>Jabatan Akademik</th>
                            <th>Golongan Kepangkatan</th>
                            <th>Status Ikatan Kerja</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($dosenaktif as $dos )
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $dos->namaDosen}}</td>
                            <td width="10%">{{ $dos->nidn}}</td>
                            <td width="17%">{{ $dos->prodi}}</td>
                            <td width="10%">{{ $dos->jabatanAkademik}}</td>
                            <td width="7%">{{ $dos->golonganKepangkatan}}</td>
                            <td width="15%">{{ $dos->statusIkatan}}</td>
                            <td width="10%">{{ $dos->aktifStart}}</td>
                            <td width="10%">{{ $dos->aktifEnd}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
