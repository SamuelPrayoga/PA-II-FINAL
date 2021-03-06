@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff dan Asisten Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>ID Pegawai</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Pendidikan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aktif Start</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>ID Pegawai</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Pendidikan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aktif Start</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($pegawai as $pe)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $pe->nama }}</td>
                            <td>{{ $pe->pegawaiID }}</td>
                            <td>{{ $pe->bagian }}</td>
                            <td>{{ $pe->jabatan }}</td>
                            <td>{{ $pe->pendidikan }}</td>
                            <td>{{ $pe->alamat }}</td>
                            <td>{{ $pe->notelp }}</td>
                            <td>{{ $pe->aktifstart }}</td>
                            <td width="23%"><button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datapegawai/editpegawai/{{ $pe->pegawaiID }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahpegawai'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($pegawai as $pe)
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/datapegawai/deletepegawai/{{ $pe->pegawaiID }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('Admin.footeradmin')
