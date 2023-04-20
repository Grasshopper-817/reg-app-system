$(document).ready(function () {
    $("#inputStudentStatus").change(function () {
        if ($(this).val() === "graduate") {
            $("#reg-input-acadYear").hide();
            // $('#reg-input-acadYear').removeAttr('required');
            $("#reg-input-gradYear").show();
            // $('#reg-input-gradYear').attr('required', 'required');
        } else {
            $("#reg-input-gradYear").hide();
            // $('#reg-input-gradYear').removeAttr('required');
            $("#reg-input-acadYear").show();
            // $('#reg-input-acadYear').attr('required', 'required');
        }
    });
});

// fix
$(document).ready(function () {
    $("#editStatus").change(function () {
        if ($(this).val() === "graduate") {
            $("#edit-AcadYear").hide();
            $("#edit-GradYear").show();
        } else {
            $("#edit-GradYear").hide();
            $("#edit-AcadYear").show();
        }
    });
    var status = $("#editStatus").val();
    if (status === "graduate") {
        $("#edit-AcadYear").hide();
        $("#edit-GradYear").show();
    } else {
        $("#edit-GradYear").hide();
        $("#edit-AcadYear").show();
    }
});

$(document).ready(function () {
    $("input[name=payment_method]").change(function () {
        if ($(this).val() === "GCash") {
            $("#gcash-sect").show();
        } else {
            $("#gcash-sect").hide();
        }
    });
});
