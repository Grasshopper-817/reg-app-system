$(document).ready(function () {
    // your code here

    $(window).on("load", function () {
        $("#requests-content").load("/admin-request");
    });
    $(window).on("load", function () {
        $("#announcement-content").load("/admin-announcement");
    });
    $(window).on("load", function () {
        $("#message-content").load("/admin-message");
    });

    $(window).on("load", function () {
        $("#forms-content").load("/admin-forms");
    });
    // $(window).on("load", function () {
    //     $.get("/admin-forms", function (data) {
    //         var html = "";
    //         data.forEach(function (form) {
    //             html += '<div class="accordion">';
    //             html += '<h2 class="accordion-header">';
    //             html +=
    //                 '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#' +
    //                 form.id +
    //                 '" aria-expanded="false" aria-controls="' +
    //                 form.id +
    //                 '">' +
    //                 form.name +
    //                 "</button>";
    //             html += "</h2>";
    //             html +=
    //                 '<div class="accordion-collapse collapse" data-bs-parent="#forms-list" id="' +
    //                 form.id +
    //                 '">';
    //             html += '<div class="accordion-body">';
    //             html += "<p>" + form.content + "</p>"; // Replace with the actual data fields from your form
    //             html += "</div>";
    //             html += "</div>";
    //             html += "</div>";
    //         });
    //         $("#forms-content").html(html);
    //     });
    // });

    $(window).on("load", function () {
        $("#faqs-content").load("/admin-faqs");
    });
    $(window).on("load", function () {
        $("#settings-content").load("/admin-settings");
    });
});
