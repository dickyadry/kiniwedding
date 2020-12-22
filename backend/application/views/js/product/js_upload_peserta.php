<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/interface/datatables.min.js"></script>

<script type="text/javascript">
    var events = '';
    var dataTablecontent_schedule_upload_form = '';

    function upload_schedule_form() {
        var formData = new FormData();
        $.each($('#file_content-schedule-upload_form')[0].files, function(i, file) {
            imageFile = file;
            formData.append('file', file);
            formData.append('date', $('#date_content-schedule-upload_form').val())
        });
        $.ajax({
            url: '<?php echo base_url('event/upload-proccess/'.$data->id); ?>',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if (data.tipe == 'success') {
                    $('#date_content-schedule-upload_form').prop('disabled', true);
                    $('#result').css('display', '');
                    $('#upload-action').css('display', '');
                    dataTablecontent_schedule_upload_form.clear();
                    dataTablecontent_schedule_upload_form.rows.add(data.data).draw();
                    dataTablecontent_schedule_upload_form.rows(0).invalidate().draw();
                    dataUpload = dataTablecontent_schedule_upload_form.rows().data();
                } else {
                    Swal.fire({
                        title: data.tipe,
                        text: data.message,
                        type: "error"
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 2000);

                }
            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Error',
                    text: "Error",
                    type: 'error'
                });
            }
        });
    };


    dataTablecontent_schedule_upload_form = $('#datatable-content-schedule-upload_form').DataTable({
        "dom": "t",
        "paging": false,
        "searching": false,
        "columns": [{
                "data": "name",
                "visible": true,
                "orderable": false,
            },
            {
                "data": "email",
                "visible": true,
                "orderable": true,
            },
            {
                "data": "phone",
                "visible": true,
                "orderable": true,
            }
        ]
    });

    function save_schedule() {
        var total = 0;
        var data = dataUpload;
        var length = data.length;
        if ($('#clear_schedule_content-schedule-upload_form').is(":checked")) {
            clear_schedule_content_schedule_upload_form();
        } else {
            waitingDialog.show('Processing, Please wait ...');
            ajaxProcesscontent_schedule_upload_form(0, length, data, dataTablecontent_schedule_upload_form);
        }
    }

    function ajaxProcesscontent_schedule_upload_form(index, length, data, table) {
        var item = data[index];
        var formData = new FormData();
        for (var key in item) {
            formData.append(key, item[key]);
        }
        var table = table;
        if (item.status != 'success') {
            $.ajax({
                url: '<?php echo base_url('event/save-peserta/'.$data->id.'/'.$data->is_one_only) ?>',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if (data.tipe == 'success') {
                        item.status = 'success';
                        table.row(index).data(item);
                        total = index + 1;
                    } else {
                        item.status = 'invalid: ' + data.message;
                        table.row(index).data(item);
                    }
                }
            }).always(function() {
                if (index < length - 1) {
                    setTimeout(function() {
                        ajaxProcesscontent_schedule_upload_form(index + 1, length, data, table);
                    }, 300);
                } else {
                    Swal.fire({
                        title: 'Success',
                        text: "Success Insert Peserta",
                        type: 'success',
                        confirmButtonText: 'Yes!'
                    }).then((result) => {
                        window.location.href = '<?php echo base_url('event/upload-peserta/'.$data->id); ?>';
                    });
                }
            });
        } else {
            if (index < length - 1) {
                setTimeout(function() {
                    ajaxProcesscontent_schedule_upload_form(index + 1, length, data, table);
                }, 300);
            } else {
                Swal.fire({
                    title: 'Success',
                    text: "Success Insert Peserta",
                    type: 'success',
                    confirmButtonText: 'Yes!'
                }).then((result) => {
                    window.location.href = '<?php echo base_url('schedule'); ?>';
                });
            }
        }
    }

    $('#update-schedule').click(function() {

        var action = $(this).attr('data-action');
        var data = new FormData($('#form_data')[0]);
        $.ajax({
            url: action,
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(str) {
                if (str.tipe == 'success') {
                    Swal.fire({
                        title: str.tipe,
                        text: str.message,
                        type: str.title,
                        confirmButtonText: 'Yes!'
                    }).then((result) => {
                        window.location.href = "<?php echo base_url('schedule'); ?>";
                    });

                } else {
                    swal(str.tipe, str.message, str.title);
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                }

            },
            error: function(xhr, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Error',
                    text: "Error",
                    type: 'error'
                });
            }
        });

    });

    function clear_schedule_content_schedule_upload_form() {
        var date = $('#date_content-schedule-upload_form').val();
        var formData = new FormData();
        formData.append('date', date);
        waitingDialog.show('Clearing schedule');
        $.ajax({
            url: '<?php echo base_url('schedule/delete'); ?>',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                Swal.fire({
                    title: data.title,
                    text: data.message,
                    type: data.tipe,
                    confirmButtonText: 'Yes!'
                }).then((result) => {
                    waitingDialog.hide();
                    setTimeout(function() {
                        var data = dataTablecontent_schedule_upload_form.rows().data();
                        var length = data.length;
                        waitingDialog.show('Processing Insert, Please wait ...');
                        ajaxProcesscontent_schedule_upload_form(0, length, data, dataTablecontent_schedule_upload_form);
                    }, 1000)
                });


            }
        });
    }

    var waitingDialog = waitingDialog || (function($) {
        'use strict';

        // Creating modal dialog's DOM
        var $dialog = $(
            '<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
            '<div class="modal-dialog modal-m">' +
            '<div class="modal-content">' +
            '<div class="modal-header" style="background-color:#3a4b55"><h3 style="margin:0;"></h3></div>' +
            '<div class="modal-body">' +
            '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
            '</div>' +
            '</div></div></div>');

        return {
            /**
             * Opens our dialog
             * @param message Custom message
             * @param options Custom options:
             *                options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
             *                options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
             */
            show: function(message, options) {
                // Assigning defaults
                if (typeof options === 'undefined') {
                    options = {};
                }
                if (typeof message === 'undefined') {
                    message = 'Loading';
                }
                var settings = $.extend({
                    dialogSize: 'm',
                    progressType: '',
                    onHide: null // This callback runs after the dialog was hidden
                }, options);

                // Configuring dialog
                $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
                $dialog.find('.progress-bar').attr('class', 'progress-bar');
                if (settings.progressType) {
                    $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
                }
                $dialog.find('h3').text(message);
                // Adding callbacks
                if (typeof settings.onHide === 'function') {
                    $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function(e) {
                        settings.onHide.call($dialog);
                    });
                }
                // Opening dialog
                $dialog.modal();
            },
            /**
             * Closes dialog
             */
            hide: function() {
                $dialog.modal('hide');
            }
        };

    })(jQuery);
</script>