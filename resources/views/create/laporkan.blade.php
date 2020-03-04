<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Laporan Siswa</title>
  </head>
  <body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">Laporkan Keluhan Anda</div>

        <div class="card-body">
          @if (session('status'))
          <div class="text text-success" role="text">
            {{ session('status') }}
          </div>
          @endif

          <form method="POST" action="/success">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" placeholder="Isi Nama Anda"
                  name="namalengkap" value="{{old('namalengkap')}}">
                @error('namalengkap')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <select name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror">
                  <option value="XI RPL 1">XI RPL 1</option>
                  <option value="XI RPL 2">XI RPL 2</option>
                </select>
                @error('kelas')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nomor Handphone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp" placeholder="+62"
                  name="nomorhp" value="{{old('nomorhp')}}">
                @error('nomorhp')
                <div class=" text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="jeniskelamin" id="jeniskelamin"
                  class="form-control @error('jeniskelamin') is-invalid @enderror">
                  <option hidden>Jenis Kelamin</option>
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="null">Tidak Ada Kelamin</option>
                </select>
                @error('jeniskelamin')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Keluhan</label>
              <div class="col-sm-10">
                <select name="kategori" id="kategori" class="form-control @error('kategori') is-invalid @enderror">
                  <option hidden>Kategori Keluhan</option>
                  <option value="spp">Pembayaran SPP</option>
                  <option value="antriankantinsehat">Antrian Kantin Sehat</option>
                  <option value="pelayanantatausaha">Pelayanan TataUsaha</option>
                </select>
                @error('kategori')
                <div class="text text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggapan</label>
              <div class="col-sm-10">
                <textarea class="form-control @error('keluh') is-invalid @enderror" id="keluh" name="keluh" rows="3" placeholder="..."
                  value="{{old('keluh')}}"></textarea>
                @error('keluh')
                <div class="text text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary float-right">Kirim Sekarang!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>