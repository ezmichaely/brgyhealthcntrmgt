<script>
$(document).ready(function() {
    var piid = $('#ImmunizationTable').data('id');
    getExistingDataImmunization(piid, 0, 50);

    //FETCH IMMUNIZATION
    function getExistingDataImmunization(piid, start, limit) {
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudImmunization.php',
            method: 'POST',
            dataType: 'text',
            data: {
                key: 'getExistingDataImmunization',
                piid: piid,
                start: start,
                limit: limit
            },
            success: function(response) {
                if (response != "reachedMax") {
                    $('.ImmunizationTableBody').append(response);
                    start += limit;
                    getExistingDataImmunization(piid, start, limit);
                } else {
                    $("#ImmunizationTable").DataTable({
                        "columnDefs": [{
                            "targets": [5],
                            "orderable": false,
                        }, ],
                    });
                }
            }
        });
    }

    // edit consultation btn action
    $(document).on('click', '#getEditImmunization', function(e) {
        e.preventDefault();
        var editImmunizationBtn = $(this).data('id');
        $('#editImmunization-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudImmunization.php',
            type: 'POST',
            data: 'editImmunizationBtn=' + editImmunizationBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#editImmunization-data').html('');
            $('#editImmunization-data').html(data);
        }).fail(function() {
            $('#editImmunization-data').html('<p>Error</p>');
        });
    });

    // delete btn action
    $(document).on('click', '#getDeleteImmunization', function(e) {
        e.preventDefault();
        var deleteImmunizationBtn = $(this).data('id');
        $('#deleteImmunization-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudImmunization.php',
            type: 'POST',
            data: 'deleteImmunizationBtn=' + deleteImmunizationBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#deleteImmunization-data').html('');
            $('#deleteImmunization-data').html(data);
        }).fail(function() {
            $('#deleteImmunization-data').html('<p>Error</p>');
        });
    });

});
</script>
