@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Kantin</h6>
    </div>
    <div class="card-body">
        <form action="{{route('datakantin.updatekantin',$editkantin->kantinID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Perumahan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaperumahan" name="namaperumahan" class="form-control" value="{{$editkantin->namaperumahan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Meja</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jumlahmeja" name="jumlahmeja" class="form-control" value="{{$editkantin->jumlahmeja}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas/Kamar</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kapasitas" name="kapasitas" class="form-control" value="{{$editkantin->kapasitas}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jumlah" name="jumlah" class="form-control" value="{{$editkantin->jumlah}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
