@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Perumahan Dalam</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perumahan</th>
                        <th>Nama Penghuni</th>
                        <th>Jabatan</th>
                        <th>Jumlah Kamar</th>
                        <th>Kapasitas Kamar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Perumahan</th>
                        <th>Nama Penghuni</th>
                        <th>Jabatan</th>
                        <th>Jumlah Kamar</th>
                        <th>Kapasitas Kamar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($perumahandalam as $pe)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $pe->namaperumahan }}</td>
                            <td>{{ $pe->namapenghuni }}</td>
                            <td>{{ $pe->jabatan }}</td>
                            <td>{{ $pe->jumlahkamar }}</td>
                            <td>{{ $pe->kapasitaskamar }}</td>
                            <td width="25%">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#myModal1{{ $pe->id }}"><i class="fas fa-eye"></i>
                                Lihat</button>

                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/dataperumahandalam/editperumahandalam/{{ $pe->id }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal{{ $pe->id }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahperumahandalam'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($perumahandalam as $pe)
<div class="modal fade" id="myModal{{ $pe->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Perumahan Dalam</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/dataperumahandalam/deleteperumahandalam/{{ $pe->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($perumahandalam as $pe)
    <div class="modal fade" id="myModal1{{ $pe->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Perumahan Dalam</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Perumahan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->namaperumahan}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Penghuni</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->namapenghuni}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->jabatan}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->jumlahkamar}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kapasitas Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->kapasitaskamar}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>I/S</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->istri}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>ANAK</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->anak}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>DLL</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->dll}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Total</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->total}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$pe->keterangan}}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
