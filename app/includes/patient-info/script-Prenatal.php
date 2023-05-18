<script>
$(document).ready(function() {
    var ppid = $('#PrenatalTable').data('id');

    getExistingDataPrenatal(ppid, 0, 50);

    // FETCH Prenatal
    function getExistingDataPrenatal(pcid, start, limit) {
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
            method: 'POST',
            dataType: 'text',
            data: {
                key: 'getExistingDataPrenatal',
                ppid: ppid,
                start: start,
                limit: limit
            },
            success: function(response) {
                if (response != "reachedMax") {
                    $('.PrenatalTableBody').append(response);
                    start += limit;
                    getExistingDataPrenatal(ppid, start, limit);
                } else {
                    $("#PrenatalTable").DataTable({
                        "columnDefs": [{
                            "targets": [4],
                            "orderable": false,
                        }, ],
                    });
                }
            }
        });
    }

    // edit Prenatal btn action
    $(document).on('click', '#getEditPrenatal', function(e) {
        e.preventDefault();
        var editPrenatalBtn = $(this).data('id');
        $('#editPrenatal-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
            type: 'POST',
            data: 'editPrenatalBtn=' + editPrenatalBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#editPrenatal-data').html('');
            $('#editPrenatal-data').html(data);
        }).fail(function() {
            $('#editPrenatal-data').html('<p>Error</p>');
        });
    });

    // delete btn action
    $(document).on('click', '#getDeletePrenatal', function(e) {
        e.preventDefault();
        var deletePrenatalBtn = $(this).data('id');
        $('#deletePrenatal-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudPrenatal.php',
            type: 'POST',
            data: 'deletePrenatalBtn=' + deletePrenatalBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#deletePrenatal-data').html('');
            $('#deletePrenatal-data').html(data);
        }).fail(function() {
            $('#deletePrenatal-data').html('<p>Error</p>');
        });
    });

});
</script>
