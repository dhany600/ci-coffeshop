const flashdata = $('.flash-data').data('flashdata');
console.log(flashdata);

if (flashdata == 'Gagal') {
  toastr.error(flashdata + '! Harap Periksa Kembali');
}

if (flashdata == 'Ditambah') {
  toastr.success('Data Berhasil ' + flashdata);
}

if (flashdata == 'Diubah') {
  toastr.success('Data Berhasil ' + flashdata);
}

if (flashdata == 'Dihapus') {
  toastr.success('Data Berhasil ' + flashdata);
}

if (flashdata == 'Gagal Update Gambar') {
  toastr.warning(flashdata + ' (Tidak ada gambar yang dipilih)');
}

if (flashdata == 'Ganda') {
  toastr.warning('Gagal Tambah Data! Username Sudah Digunakan');
}

if (flashdata == 'Login') {
  toastr.warning('Gagal Tambah Data! Username Sudah Digunakan');
}



