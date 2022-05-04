@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kapasitas Ruangan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan</th>
                            <th>Keterangan</th>
                            <th>Luas(m<sup>2</sup>)</th>
                            <th>Kapasitas Normal</th>
                            <th>Perkiraan Kursi, Meja Hasil Survei Langsung (Sosial Distancing)</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Ruangan</th>
                            <th>Keterangan</th>
                            <th>Luas(m<sup>2</sup>)</th>
                            <th>Kapasitas Normal</th>
                            <th>Perkiraan Kursi, Meja Hasil Survei Langsung (Sosial Distancing)</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($kapasitasruangankelas as $kapasitas)
                        @php $i=1 @endphp
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td width="15%">{{$kapasitas->ruangan}}</td>
                            <td>{{$kapasitas->keterangan}}</td>
                            <td><center>{{$kapasitas->luas}}</center></td>
                            <td><center>{{$kapasitas->kapasitasnormal}}</center></td>
                            <td><center>{{$kapasitas->perkiraan}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
