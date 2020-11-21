/* Ced MICRO are not having luggage. */
$(document).ready(function () {
    $('#cab-type').on('change', function () {
        if ($(this).val() == "50") {
            $('#luggage').attr("disabled", "disabled");
            alert("Hello! Luggage service is not available in Ced MICRO. Thank YOU..");
        }
        else {
            $('#luggage').removeAttr("disabled", "disabled");
        }
    });

    $('#luggage').keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            alert("Hello! Please take Numeric values in LUGGAGE. Thank YOU..");            
            return false;
        }           
    });


    /* Both locations are same. */
    $('#drop-location').on('change', function () {
        if ($(this).val() == $('#pickup-location').val()) {
            alert("Hello! Pick UP location and Drop location are same.  Please change any one. Thank YOU..");
            return false;
        } /* else { } */
    });


    /* Calculating the Distance */
    $('#submit-button').click(function (e) {
        e.preventDefault();
        var cars = $("#cab-type").val();
        var luggage = $("#luggage").val();
        var pickuplocation = $("#pickup-location").val();
        var droplocation = $("#drop-location").val();
        $.ajax({
            type: "POST",
            url: "CedCAB.php",
            data: { cars: cars, luggage: luggage, pickuplocation: pickuplocation, droplocation: droplocation },
            success: function (result) {
                alert(result);
            }
        });
    });
});

