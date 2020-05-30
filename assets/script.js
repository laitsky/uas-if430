const tableTips = "<p class='italic pb-3 text-xs font-serif tracking-wide text-gray-700'>Klik di judul kolom untuk melakukan sorting berdasarkan judul kolom.</p>";

$(document).ready( function () {
    $('.table-dt').DataTable();
    $(tableTips).insertBefore(".table-responsive");
    $('tr>th').addClass('text-gray-700');
} );