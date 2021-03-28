const flashdata = $('.flash-data').data('flashdata');
console.log(flashdata);

if (flashdata == 'Gagal') {
  toastr.error(flashdata + '! Harap Periksa Kembali');
}

if (flashdata == 'Ditambah') {
  toastr.success('Data Berhasil ' + flashdata);
}

if (flashdata == 'Dihapus') {
  toastr.success('Data Berhasil ' + flashdata);
}



