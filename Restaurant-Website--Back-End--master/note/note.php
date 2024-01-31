<?php 
$koneksi = mysqli_connect('localhost','root','','fs_resto');
// untuk variabel field dari form input ke database
$id = $_POST['emp_id'];
$name = $_POST['emp_name'];
$address = $_POST['emp_address'];
$tlp = $_POST['no_tlp'];

// input data dari fomr input kedalam database
mysqli_query($koneksi,"INSERT INTO employee VALUES ('$id','$name','$address','$tlp')")
or 
die(mysqli_error($koneksi));

// redirect kehalaman index.php kembali setelah klik tombol submit
header("location:index.php");
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Otomatis Dengan PHP Mysqli</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php 
// koneksi database kodegenerator
$koneksi = mysqli_connect('localhost','root','','fs_resto');

// mengambil data barang dari tabel dengan kode terbesar
$query = mysqli_query($koneksi, "SELECT max(emp_id) as id FROM employee");
$data = mysqli_fetch_array($query);
$id = $data['id'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeBarang, 3, 3);

// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "emp";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Barang</h5>
      </div>
      <div class="modal-body">
		  <!-- method="post" untuk mengirim data kedalam database, dan action="simpan.php" adalah fungsi untuk menyimpan data -->
      <form method="post" action="simpan.php">
  <div class="form-row">
    <div class="form-group mx-auto">
		<!-- name="kode" adalah variabel untuk field kode, dan php echo kodebarang adalah string untuk menghasilkan kode otomatis -->
      <input type="text" class="form-control" placeholder="Kode Barang" name="kode" value="<?php echo $kodeBarang ?>" readonly required="required">
    </div>
    <div class="form-group mx-auto">
		<!-- nama="nama_brg" adalah variabel untuk field nama barang -->
      <input type="text" class="form-control" placeholder="Nama Barang" name="nama_brg" required="required">
    </div>
	<div class="form-group mx-auto">
		<!-- onkeypress="return angkasaja(event)" kode pemanggilan fungsi javascript untuk hanya bisa menginputkan angka saja, dan name="harga" adalah variabel untuk field harga -->
      <input type="text" class="form-control" onkeypress="return angkasaja(event)" placeholder="Harga Barang" name="harga" required="required">
    </div>
	<div class="form-group mx-auto">
		<!-- onkeypress="return angkasaja(event)" kode pemanggilan fungsi javascript untuk hanya bisa menginputkan angka saja, dan name="jumlah" adalah variabel untuk field jumlah -->
      <input type="text" class="form-control" onkeypress="return angkasaja(event)" placeholder="Jumlah Barang" name="jumlah" required="required">
    </div>
  </div>
  <!-- tombol untuk memasukan data kedalam database -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- tabel untuk menampilkan data barang -->
<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$barang = mysqli_query($koneksi,"SELECT * FROM tabel");
			while($b = mysqli_fetch_array($barang)){
				?>
				<tr>
					<td><?php echo $b['kode']; ?></td>
					<td><?php echo $b['nama_brg']; ?></td>
					<td><?php echo "Rp. ".number_format($b['harga'])." ,-"; ?></td>
					<td><?php echo $b['jumlah']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
	<footer class="text-center">&copy;<a href="https://www.panduancode.com"> www.panduancode.com</a></footer>
      </div>
	   </div>
  </div>
  <!-- javascript untuk fungsi input angka saja pada form -->
  <script>
		function angkasaja(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
</body>
</html>