<html>
  <head>
		<title> CSS </title>
		<!-- style.css and font-awesome.css here -->
        <link rel="stylesheet" href="View/css/styleKirimBarang.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head> 
	
	<body>
        <div class="w3-padding-large">
            <form class="row g-3" action="kirimBarang" method="post">
                <div class="col-md-6">
                    <label for="inputNamaPenerima4" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="inputNamaPenerima4" name="iNama">
                </div>
                <div class="col-md-6">
                    <label for="inputNamaPenerima4" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategoriBarang" name="iKategori">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="iAlamat">
                </div>
                <div class="col-md-6">
                    <label for="inputKeterangan" class="form-label">Keterangan Barang</label>
                    <input type="text" class="form-control" id="inputKeterangan" placeholder="Buku, Meja, ..." name="iKeterangan">
                </div>
                <div class="col-md-4">
                    <label for="inputJumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="inputJumlah" placeholder="1, 2, 3, 4, ..." name="iJumlah">
                </div>
                <div class="col-md-2">
                    <label for="inputSatuan" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="inputSatuan" placeholder="Buah" name="iSatuan">
                </div>
                <div class="col-md-4">
                    <label for="inputDriver" class="form-label">Driver id</label>
                    <input type="text" class="form-control" id="inputDriver" name="iDriver">
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <br><br>
                <input type="Datetime" class="form-control" id="inputSatuan" placeholder="tanggal Kirim">
                <br>
                <button type="submit" class="btn btn-primary">Kirim Nanti</button>
                </div>
            </form>

            <!-- <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Keterangan Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Satuan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                  </tr>
                  
                </tbody>
              </table> -->
        </div>
        <div id="pad">
            
        </div>
  </body>
</html>
