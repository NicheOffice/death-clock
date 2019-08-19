$(document).ready(function () {
    $("#session").hide();
    $("#send").click(function () {
        $("#startForm").hide();
        $("#session").show();
    });

    var current = 1, current_step, next_step, steps;
    var eq = 1;
    steps = $("fieldset").length;

    // Disable form posting when pressed enter
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });

    $(".next").click(function () {
        var type = $("input[name=q" + eq + "]").attr("type");
        switch (type) {
            case "radio":
                if ($("input[name=q" + eq + "]:checked").val() != undefined) {
                    current_step = $(this).parent();
                    next_step = $(this).parent().next();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                    eq++;
                } else {
                    $("#error").modal();
                    $("input[name=q" + eq + "]").focus();
                }
                break;
            default:
                switch (true) {
                    case (eq == 2):
                        if ($("input[name=q" + eq + "]").val() > 1900 && $("input[name=q" + eq + "]").val() <= (new Date()).getFullYear()-5) {
                            current_step = $(this).parent();
                            next_step = $(this).parent().next();
                            next_step.show();
                            current_step.hide();
                            setProgressBar(++current);
                            eq++;
                        } else {
                            $("#error").modal();
                            $("input[name=q" + eq + "]").focus();
                        }
                        break;
                    case (eq == 6):
                        if ($("input[name=q" + eq + "]").val() >= 40) {
                            current_step = $(this).parent();
                            next_step = $(this).parent().next();
                            next_step.show();
                            current_step.hide();
                            setProgressBar(++current);
                            eq++;
                        } else {
                            $("#error").modal();
                            $("input[name=q" + eq + "]").focus();
                        }
                        break;
                    case (eq == 7):
                        if ($("input[name=q" + eq + "]").val() >= 110 && $("input[name=q" + eq + "]").val() <= 243) {
                            current_step = $(this).parent();
                            next_step = $(this).parent().next();
                            next_step.show();
                            current_step.hide();
                            setProgressBar(++current);
                            eq++;
                        } else {
                            $("#error").modal();
                            $("input[name=q" + eq + "]").focus();
                        }
                        break;
                    default:
                        if ($("input[name=q" + eq + "]").val() != "") {
                            current_step = $(this).parent();
                            next_step = $(this).parent().next();
                            next_step.show();
                            current_step.hide();
                            setProgressBar(++current);
                            eq++;
                        } else {
                            $("#error").modal();
                            $("input[name=q" + eq + "]").focus();
                        }
                        break;
                }
                break;
        }
    });

    $(".previous").click(function () {
        current_step = $(this).parent();
        next_step = $(this).parent().prev();
        next_step.show();
        current_step.hide();
        setProgressBar(--current);
        eq--;
    });

    setProgressBar(current);

    // Change progress bar
    function setProgressBar(curStep) {
        var curStep = curStep - 1;
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
        //.html(percent + "%");
    }
});

function startCountdown(year, langYears, langDays) {
    // Set the date we're counting down to
    var countDownDate = new Date(year).getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {
        // Get todays date and time
        var now = new Date().getTime();
        // Find the distance between now an the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var years = Math.floor(days / 365);
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        if (days > 365) {
            years = Math.floor(days / 365);
            days = days % 365;
        }
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var days = Math.floor(days / 100) * 100;
        // Output the result in an element with id="count"
        document.getElementById("countdown").innerHTML = years + " " + langYears + " " + days + "+ " + langDays;
        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "<span style='font-size:10em'>&#9760;</span>";
        }
    }, 1000);
}