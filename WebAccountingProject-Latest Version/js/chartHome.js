var chart = AmCharts.makeChart( "chartHomediv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [ {
    "country": "Total \n Revenues",
    "visits": 2025
  }, {
    "country": "Cost of Sales \n of Production",
    "visits": 1882
  }, {
    "country": "Gross Profit \n on Sales",
    "visits": 1809
  }, {
    "country": "Management \n Costs",
    "visits": 1322
  }, {
    "country": "Costs of Sales",
    "visits": 1122
  }, {
    "country": "Other Operating \n Costs",
    "visits": 1114
  }, {
    "country": "Financial \n Costs",
    "visits": 984
  }, {
    "country": "Net Profit",
    "visits": 711
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
