const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
// Swal.fire({
//        title: 'Kriteria',
//        text: ''+ flashdata,
//        type: 'success'

// });
Swal.fire({
       icon: 'success',
       text: ''+ flashdata,
       showConfirmButton: false,
       timer: 1700
     });
}

// button hapus
$('.btn-outline-danger').on('click', function (e) {
       e.preventDefault();
       const href = $(this).attr('href')
       Swal.fire({
              title: 'Apakah anda yakin?',
              text: "Hapus data?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, hapus',
              cancelButtonText: 'Kembali'
            }).then((result) => {
              if (result.value) {
                document.location.href = href;
              }
            })
});
