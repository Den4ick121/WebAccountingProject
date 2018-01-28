$(document).ready(function () {

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td></td>';
        cols += '<td></td>';
        cols += '<td><input type="text" class="form-control" name="quantity" placeholder="ADA"/></td>';
        cols += '<td><input type="text" class="form-control" name="unitprice" placeholder="Unit Price"/></td>';
        cols += '</tr>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
    });


});



