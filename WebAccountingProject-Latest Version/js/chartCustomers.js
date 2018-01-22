var chart = AmCharts.makeChart("chartCustomersdiv", {
	"theme": "light",
    "type": "serial",
    "dataProvider": [{
        "name": "Unbilled last 365 days",
        "startTime": 8,
        "endTime": 11,
        "color": "#FF0F00"
    }, {
        "name": "Upaid last 365 days",
        "startTime": 10,
        "endTime": 13,
        "color": "#FF9E01"
    }, {
        "name": "Paid",
        "startTime": 11,
        "endTime": 18,
        "color": "#F8FF01"
    }],
    "valueAxes": [{
        "axisAlpha": 0,
        "gridAlpha": 0.1
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<b>[[category]]</b><br>starts at [[startTime]]<br>ends at [[endTime]]",
        "colorField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0,
        "openField": "startTime",
        "type": "column",
        "valueField": "endTime"
    }],
    "rotate": true,
    "columnWidth": 0.5,
    "categoryField": "name",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0.1,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }
});