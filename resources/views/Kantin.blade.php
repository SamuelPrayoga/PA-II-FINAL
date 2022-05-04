@include('navuser')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kantin Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th><center>Jumlah Meja</center></th>
                            <th><center>Kapasitas / Kamar</center></th>
                            <th><center>Jumlah</center></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th><center>Jumlah Meja</center></th>
                            <th><center>Kapasitas / Kamar</center></th>
                            <th><center>Jumlah</center></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($kantin as $kan)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$kan->namaperumahan}}</td>
                            <td><center>{{$kan->jumlahmeja}}</center></td>
                            <td><center>{{$kan->kapasitas}}</center></td>
                            <td><center>{{$kan->jumlah}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
