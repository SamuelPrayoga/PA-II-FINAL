@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Disposal Aset Persediaan Kampus Institut Teknologi Del</h6>
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
                        @foreach ($disppersediaan as $persediaan)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$persediaan->itembarang}}</td>
                            <td>{{$persediaan->kodeaset}}</td>
                            <td>{{$persediaan->jumlahunit}}</td>
                            <td width="7%">{{$persediaan->nopr}}</td>
                            <td width="7%">{{$persediaan->nopo}}</td>
                            <td>{{$persediaan->nilaiinvoice}}</td>
                            <td>{{$persediaan->sumberdana}}</td>
                            <td>{{$persediaan->nilaibuku}}</td>
                            <td>{{$persediaan->lokasi}}</td>
                            <td>{{$persediaan->alasan}}</td>
                            <td>{{$persediaan->unit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
