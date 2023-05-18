<script>
$(document).ready(function() {
    var pdid = $('#DeliveryTable').data('id');
    getExistingDataDelivery(pdid, 0, 50);

    // FETCH Delivery
    function getExistingDataDelivery(pdid, start, limit) {
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudDelivery.php',
            method: 'POST',
            dataType: 'text',
            data: {
                key: 'getExistingDataDelivery',
                pdid: pdid,
                start: start,
                limit: limit
            },
            success: function(response) {
                if (response != "reachedMax") {
                    $(".DeliveryTableBody").append(response);
                    start += limit;
                    getExistingDataDelivery(pdid, start, limit);
                } else {
                    $("#DeliveryTable").DataTable({
                        "columnDefs": [{
                            "targets": [4],
                            "orderable": false,
                        }, ],
                    });
                }
            }
        });
    }

    // edit Delivery btn action
    $(document).on('click', '#getEditDelivery', function(e) {
        e.preventDefault();
        var editDeliveryBtn = $(this).data('id');
        $('#editDelivery-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudDelivery.php',
            type: 'POST',
            data: 'editDeliveryBtn=' + editDeliveryBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#editDelivery-data').html('');
            $('#editDelivery-data').html(data);
        }).fail(function() {
            $('#editDelivery-data').html('<p>Error</p>');
        });
    });

    // delete btn action
    $(document).on('click', '#getDeleteDelivery', function(e) {
        e.preventDefault();
        var deleteDeliveryBtn = $(this).data('id');
        $('#deleteDelivery-data').html('');
        $.ajax({
            url: '/bhcm.com/app/controllers/report/crudDelivery.php',
            type: 'POST',
            data: 'deleteDeliveryBtn=' + deleteDeliveryBtn,
            dataType: 'html'
        }).done(function(data) {
            $('#deleteDelivery-data').html('');
            $('#deleteDelivery-data').html(data);
        }).fail(function() {
            $('#deleteDelivery-data').html('<p>Error</p>');
        });
    });

});
</script>
