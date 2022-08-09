$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#leader').on('submit', function(e) {
    e.preventDefault();
    var url = $(this).attr('data-action');
    $.ajax({
        type: 'POST',
        url: url,
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: true,
        processData: false,
        success: function(data) {
            // alert(data.success);
            $('#2').click();
            $('#1').off('click');
            $('#leader').attr('hidden', true);
            $('#notice_leader').attr('hidden', false);
            var count = data.leader_id.length - 1;

            // console.log(count);
            // console.log(data.leader_id[count].id);
            $('input[name="leader_id"]').val(data.leader_id[count].id);
        },
        error: function() {
            alert("errrooorrr!!!");
        }
    });
});
$('#player').on('submit', function(e) {
    e.preventDefault();
    var url = $(this).attr('data-action');
    $.ajax({
        type: 'POST',
        url: "{{ route('registrasi.player') }}",
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            // $('input[name="leader_id"]').val(data.leader_id[count].id);
            $('input[name="id_game"]').val('');
            $('input[name="nick"]').val('');
            var sum = 1;
            $('#player_ke').each(function() {
                sum += +$(this).text()||1;
            });
            var player = $('#player_ke').text();
            $('#player_ke').text(sum);
            console.log(player);
            if ($('#player_ke').text() === '4') {
                $('#addplayer').attr('hidden', true);
                $('#submit-player').attr('hidden', false);
            }
            else if ($('#player_ke').text() === '5') {
                $('#addplayer').attr('hidden', true);
                $('#submit-player').attr('hidden', false);
                $('#attention').attr('hidden', false);
            }
            else if ($('#player_ke').text() === '8') {
                $('#addplayer').attr('hidden', true);
                $('#submit-player').attr('hidden', true);
                $('#player').attr('hidden', true);
                $('#detail_player').attr('hidden', true);
                $('#form-player').attr('hidden', true);
                $('#notice_player').attr('hidden', false);
                $('#attention').attr('hidden', true);
                $('#3').click();
            }
        },
        error: function() {
            alert("errrooorrr!!!");
        }
    });
});