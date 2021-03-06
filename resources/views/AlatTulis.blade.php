@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penambahan Aset Alat Tulis/PC/Notebook Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item Barang</th>
                            <th>Tipe Barang</th>
                            <th>Kode Aset</th>
                            <th>Jumlah Unit</th>
                            <th>No PR</th>
                            <th>No PO</th>
                            <th>Nilai Invoice</th>
                            <th>Umur Ekonomis</th>
                            <th>Depresiasi/Bulan</th>
                            <th>Sumber Dana</th>
                            <th>Akumulasi Depresiasi</th>
                            <th>Nilai Buku</th>
                            <th>Lokasi</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Item Barang</th>
                            <th>Tipe Barang</th>
                            <th>Kode Aset</th>
                            <th>Jumlah Unit</th>
                            <th>No PR</th>
                            <th>No PO</th>
                            <th>Nilai Invoice</th>
                            <th>Umur Ekonomis</th>
                            <th>Depresiasi/Bulan</th>
                            <th>Sumber Dana</th>
                            <th>Akumulasi Depresiasi</th>
                            <th>Nilai Buku</th>
                            <th>Lokasi</th>
                            <th>Unit</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($alattulis as $at)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$at->itembarang}}</td>
                            <td>{{$at->tipebarang}}</td>
                            <td>{{$at->kodeaset}}</td>
                            <td width="7%">{{$at->jumlahunit}}</td>
                            <td width="7%">{{$at->nopr}}</td>
                            <td>{{$at->nopo}}</td>
                            <td>{{$at->nilaiinvoice}}</td>
                            <td>{{$at->umurekonomis}}</td>
                            <td>{{$at->depresiasi}}</td>
                            <td>{{$at->sumberdana}}</td>
                            <td>{{$at->akumulasidepresiasi}}</td>
                            <td>{{$at->nilaibuku}}</td>
                            <td>{{$at->lokasi}}</td>
                            <td>{{$at->unit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
