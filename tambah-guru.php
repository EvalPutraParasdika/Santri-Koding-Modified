<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Guru</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-guru.php" method="POST">
                
                <div class="form-group">
                  <label>NUPTK</label>
                  <input type="number" name="nuptk" placeholder="Masukkan NUPTK guru" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control">
                </div>

                <div class="form-group">
                  <label>Golongan</label>
                  <select class="form-select" name="golongan"aria-label="Default select example">
                  <option selected>Pilih Golongan</option>
                  <option value="III/a">III/a</option>
                  <option value="III/b">III/b</option>
                  <option value="III/c">III/c</option>
                  <option value="III/d">III/d</option>
                  <option value="IV/a">IV/a</option>
                  </select>
                </div>

                <div class="form-group">
                  <label >Jenis Kelamin</label><br>
                  <input type="radio" id="L" name="jenis_kelamin" value="L">
                  <label for="L">L</label><br>
                  <input type="radio" id="P" name="jenis_kelamin" value="P">
                  <label for="P">P</label>

                </div>
              
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>