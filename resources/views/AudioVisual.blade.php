@include('navuser')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penambahan Aset Audio Visual Institut Teknologi Del</h6>
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
                        @foreach ($audiovisual as $audio)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$audio->itembarang}}</td>
                            <td>{{$audio->tipebarang}}</td>
                            <td>{{$audio->kodeaset}}</td>
                            <td width="7%">{{$audio->jumlahunit}}</td>
                            <td width="7%">{{$audio->nopr}}</td>
                            <td>{{$audio->nopo}}</td>
                            <td>{{$audio->nilaiinvoice}}</td>
                            <td>{{$audio->umurekonomis}}</td>
                            <td>{{$audio->depresiasi}}</td>
                            <td>{{$audio->sumberdana}}</td>
                            <td>{{$audio->akumulasidepresiasi}}</td>
                            <td>{{$audio->nilaibuku}}</td>
                            <td>{{$audio->lokasi}}</td>
                            <td>{{$audio->unit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
