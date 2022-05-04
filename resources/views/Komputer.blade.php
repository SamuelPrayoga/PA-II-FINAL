@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Komputer Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan/Gedung</th>
                            <th>Kategori</th>
                            <th><center>Jumlah</center></th>
                            <th>Penanggung Jawab</th>
                            <th>Jabatan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Ruangan/Gedung</th>
                            <th>Kategori</th>
                            <th><center>Jumlah</center></th>
                            <th>Penanggung Jawab</th>
                            <th>Jabatan</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($komputer as $komp)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$komp->gedung}}</td>
                            <td>{{$komp->kategori}}</td>
                            <td><center>{{$komp->jumlah}}</center></td>
                            <td>{{$komp->penanggungjawab}}</td>
                            <td>{{$komp->jabatan}}</td>
                            <td>{{$komp->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
