@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Staff Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Staff</th>
                            <th>Nama Staff</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID Staff</th>
                            <th>Nama Staff</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach( $staf as $st)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $st->stafID}}</td>
                            <td>{{ $st->namastaf}}</td>
                            <td>{{ $st->bagian}}</td>
                            <td>{{ $st->jabatan}}</td>
                            <td width="15%">{{ $st->pendidikan}}</td>
                            <td>{{ $st->aktifstart}}</td>
                            <td>{{ $st->aktifend}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
