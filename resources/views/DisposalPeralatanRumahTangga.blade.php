@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Disposal Aset Peralatan Rumah Tangga Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item Barang</th>
                            <th>Kode Aset</th>
                            <th>Jumlah Unit</th>
                            <th>No PR</th>
                            <th>No PO</th>
                            <th>Nilai Invoice</th>
                            <th>Sumber Dana</th>
                            <th>Nilai Buku</th>
                            <th>Lokasi</th>
                            <th>Alasan Write-Off</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Item Barang</th>
                            <th>Kode Aset</th>
                            <th>Jumlah Unit</th>
                            <th>No PR</th>
                            <th>No PO</th>
                            <th>Nilai Invoice</th>
                            <th>Sumber Dana</th>
                            <th>Nilai Buku</th>
                            <th>Lokasi</th>
                            <th>Alasan Write-Off</th>
                            <th>Unit</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($dispperalatan as $dper)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$dper->itembarang}}</td>
                            <td>{{$dper->kodeaset}}</td>
                            <td>{{$dper->jumlahunit}}</td>
                            <td width="7%">{{$dper->nopr}}</td>
                            <td width="7%">{{$dper->nopo}}</td>
                            <td>{{$dper->nilaiinvoice}}</td>
                            <td>{{$dper->sumberdana}}</td>
                            <td>{{$dper->nilaibuku}}</td>
                            <td>{{$dper->lokasi}}</td>
                            <td>{{$dper->alasan}}</td>
                            <td>{{$dper->unit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
