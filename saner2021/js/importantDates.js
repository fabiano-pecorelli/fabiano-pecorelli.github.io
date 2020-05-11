function next() {
    if ($('#date8').css('display') === 'block') {
        $('#date1').css('display', 'block');
        $('#date8').css('display', 'none');
    } else {
        var i;
        for (i = 1; i <= 7; i++) {
            if ($('#date' + i).css('display') === 'block') {
                var j = i + 1;
                $('#date' + j).css('display', 'block');
                $('#date' + i).css('display', 'none');
                break;
            }

        }
    }
}

function previous() {

    var i;
    for (i = 1; i <= 8; i++) {
        if ($('#date' + i).css('display') === 'block') {
            if (i === 1) {
                $('#date8').css('display', 'block');
                $('#date1').css('display', 'none');
                break;
            } else {
                var j = i - 1;
                $('#date' + j).css('display', 'block');
                $('#date' + i).css('display', 'none');
                break;
            }
        }

    }


}

