// $(function () {
//     $("select[name=category_id]").on("change", function () {
//         let selected = $(this).find(":selected").attr("value");
//         $.ajax({
//             url: "/change/category/" + selected,
//             type: "GET",
//             dataType: "json",
//         }).done(function (data) {
//             let task = $(".task");
//             task.empty();
//             $.each(data, function (key, value) {
//                 task.append('<div class="taskTitle">' + value.title + "</div>");
//             });
//         });
//     });
// });

function teste(id) {
    $.ajax({
        url: "/change/done/" + id,
        type: "GET",
        dataType: "json",
    });
}

// $("#selectTeste").on("change", function () {
//     var $form = $(this).closest("form");
//     $form.find("input[type=submit]").click();
// });

// $("select[name=category_id]").on("change", function () {
//     let selected = $(this).find(":selected").attr("value");
//     $.ajax({
//         url: "/home",
//         type: "GET",
//         dataType: "json",
//         data: {
//             category_id: selected,
//         },
//     });
// });
