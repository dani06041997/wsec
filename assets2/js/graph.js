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
      data: { w: graph_waktu },
      success: function (response) {
        $graph.highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: graph_title + graph_waktu
          },
          xAxis: [{
              categories: response.categories,
              reversed: false
          }, { // mirror axis on right side
              opposite: true,
              reversed: false,
              categories: response.categories,
              linkedTo: 0
          }],
          yAxis: {
              title: {
                  text: null
              },
              labels: {
                  formatter: function () {
                      return Math.abs(this.value);
                  }
              }
          },
          plotOptions: {
              series: {
                  stacking: 'normal'
              }
          },

          // tooltip: {
          //     formatter: function () {
          //         return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
          //             'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
          //     }
          // },

          series: response.series
        });
      }
    });
  }).trigger('setGraph'); // triggers immediately

  // Listen to map selector
  $selector.find('select.waktu').change(function(e) {
    graph_waktu = $selector.find('.waktu').val();
    $graph.trigger('setGraph');
  });
});
