<h3>Formulir Pendaftaran Mahasiswa</h1>
<table>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama_lengkap" size="20" id="text" maxlength="50" /></td>
	</tr>

	<tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" name="tmp_lahir" size="20" id="text" maxlength="50"> </td>
	</tr>

	<tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" name="tgl_lahir" size="10"></td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
		<input type="radio" name="jk1" size="15" /> Laki -Laki
		<input type="radio" name="jk1" size="15" /> Perempuan
	</td>

	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
			<select>
				<option value="">--Pilih--</option>
				<option value="MN">Manajemen</option>
				<option value="KB">Komputer</option>
				<option value="BI">B. Inggris</option>
			</select>
		</td>
	</tr>

	<tr>
		<td>Umur</td>
		<td>:</td>
		<td><input type="number" name="umur" size="5" />
		</td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat"></textarea>
		</td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		<td>
			<button value="simpan">Simpan</button>
			<button value="ubah">Ubah</button>
			<button value="Hapus">Hapus</button>
		</td>
	</tr>

</table>