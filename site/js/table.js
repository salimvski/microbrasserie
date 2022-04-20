/* Formatting function for row details - modify as you need */
var first;
var second;
var third;


function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Appellation:</td>'+
            '<td></td>'+
        '</tr>'+
        '<tr>'+
            '<td>Creation:</td>'+
            '<td>'+first+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Web</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Courriel</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Latitude/Longitude</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+

    '</table>';
}








$(document).ready( function () {
    $('#table_id').DataTable();
         $.ajax({
    type: "GET",
    dataType: "text",
    url: '/microbrasserie/back',
    success: function (data) {
        $('#my-data').html(data);

    }
});

         /*
          $('#salim').click(function() {
    var tr = $(this).closest('tr');
    var row = table.row(tr);
    var $row = $(this).closest("tr"),        // Finds the closest row <tr> 
    //$tds = $row.find("td:nth-child(3)"); // Finds the 2nd <td> element

$.each($tds, function() {                // Visits every single <td> element
    first = console.log($(this).text());         // Prints out the text within the <td>
});

    if (row.child.isShown()) {
      row.child.hide();
      tr.removeClass('shown');
    } else {
      row.child(format(row.data())).show();
      tr.addClass('shown');
    }


  });*/





} );