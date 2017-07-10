$(function() {
  // init
  var $graph        = $(graph_selector),
      $selector   = $('#map-selector');

  // set pretty map trigger
  $graph.on('setGraph', function (e) {
    // get and process data
    $.ajax({
      url: ci_base_url + '/index.php/statistik/graph_ajax/' + app_model,
      type: 'POST',
      dataType: 'json',
      data: { w: graph_waktu, j: graph_jenis },
      success: function (response) {
        $graph.highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: graph_title + graph_waktu
          },
          xAxis: {
              categories: response.categories
          },
          yAxis: {
              title: {
                  text: null
              },
             
              
          },
          plotOptions: {
              column: {
                  minPointLength: '10'
              }
          },

         
          series: response.series
        });
      }
    });
  }).trigger('setGraph'); // triggers immediately

  // Listen to map selector
  $selector.find('select').change(function(e) {
    graph_waktu = $selector.find('.waktu').val();
    graph_jenis = $selector.find('.jenis').val();
    $graph.trigger('setGraph');
  });
});
