<script>
$(document).ready(function() {
    var pcid = $('#ConsultationTable').data('id');

    getExistingDataConsultation(pcid, 0, 50);

    // FETCH CONSULTATION
    function getExistingDataConsultation(pcid, start, limit) {
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudConsultation.php',
            method: 'POST',
            dataType: 'text',
            data: {
                key: 'getExistingDataConsultation',
                pcid: pcid,
                start: start,
                limit: limit
            },
            success: function(response) {
                if (response != "reachedMax") {
                    $('.ConsultationTableBody').append(response);
                    start += limit;
                    getExistingDataConsultation(pcid, start, limit);
                } else {
                    $("#ConsultationTable").DataTable({
                        "columnDefs": [{
                            "targets": [4],
                            "orderable": false,
                        }, ],
                    });
                }
            }
        });
    }

    // edit consultation btn action
    $(document).on('click', '#getEditConsultation', function(e) {
        e.preventDefault();
        var editConsultationBtn = $(this).data('id');
        $('#editConsultation-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudConsultation.php',
            type: 'POST',
            data: 'editConsultationBtn=' + editConsultationBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#editConsultation-data').html('');
            $('#editConsultation-data').html(data);
        }).fail(function() {
            $('#editConsultation-data').html('<p>Error</p>');
        });
    });

    // delete btn action
    $(document).on('click', '#getDeleteConsultation', function(e) {
        e.preventDefault();
        var deleteConsultationBtn = $(this).data('id');
        $('#deleteConsultation-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudConsultation.php',
            type: 'POST',
            data: 'deleteConsultationBtn=' + deleteConsultationBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#deleteConsultation-data').html('');
            $('#deleteConsultation-data').html(data);
        }).fail(function() {
            $('#deleteConsultation-data').html('<p>Error</p>');
        });
    });

});
</script>
