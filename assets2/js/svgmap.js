$(function() {
  // init
  var $map        = $('#map'),
      $kec        = $map.find('[id^="kec-"]'),
      $selector   = $('#map-selector'),
      bindTarget  = '';

  // set pretty map trigger
  $map.on('setMap', function (e) {
    // get and process data
    $.ajax({
      url: ci_base_url + '/index.php/statistik/map_ajax/' + app_model,
      type: 'POST',
      dataType: 'json',
      data: { w: map_waktu, j: map_jenis },
      success: function (response) {
        $.each(response.data, function (i, kec) {
          var color = [
                Math.floor((Math.abs(map_warna[map_jenis].max[0] - map_warna[map_jenis].min[0]) * kec.ratio) + map_warna[map_jenis].max[0]),
                Math.floor((Math.abs(map_warna[map_jenis].max[1] - map_warna[map_jenis].min[1]) * kec.ratio) + map_warna[map_jenis].max[1]),
                Math.floor((Math.abs(map_warna[map_jenis].max[2] - map_warna[map_jenis].min[2]) * kec.ratio) + map_warna[map_jenis].max[2])
              ];

          $('#kec-'+ kec.kec.toLowerCase())
            .data({
              'original-title': 'Kec. ' + kec.kec,
              'content': kec.content
            })
            .attr({
              'data-original-title': 'Kec. ' + kec.kec,
              'data-content': kec.content
            })
            .find('.shape').css({
              'fill': 'rgb(' + color.join() + ')'
            });
          // console.log(color_r + ',' + color_g + ',' + color_b);
        });

        $map.find('.scale').css({
          'background': '-webkit-linear-gradient(left, rgb(' + map_warna[map_jenis].min.join() + ') 0%, rgb(' + map_warna[map_jenis].max.join() + ') 100%)',
          'background': 'linear-gradient(to right, rgb(' + map_warna[map_jenis].min.join() + ') 0%, rgb(' + map_warna[map_jenis].max.join() + ') 100%)'
        }).find('.max').text(response.max);
      }
    });
  }).trigger('setMap'); // triggers immediately

  // Bootstrap Popovers
  $kec.popover({
    container: 'body',
    // animation: false,
    trigger: 'hover',
    html: true,
  });

  // Listen to map selector
  $selector.find('select').change(function(e) {
    map_waktu = $selector.find('.waktu').val();
    map_jenis = $selector.find('.jenis').val();
    $map.trigger('setMap');
  });
});
