var chart = AmCharts.makeChart("chardiv", {
    "type": "serial",
    "theme": "none",
    "fontFamily": "sans-serif",
    "color": "#fff",
    "pathToImages":"http://www.amcharts.com/lib/3/images/",
    "dataProvider": [{
        "country": "СНИЖЕНИЕ\n ТРУДОЗАТРАТ",
        "visits": -20,
    }, {
        "country": "СНИЖЕНИЕ\n РАСХОДОВ",
        "visits": -35,
    }, {
        "country": "КВАЛИФИЦИРОВАННОСТЬ",
        "visits": 70,
    }, {
        "country": "ПРОИЗВОДИТЕЛЬНОСТЬ",
        "visits": 30,
    }, {
        "country": "ЭФФЕКТИВНОСТЬ",
        "visits": 50,
    }, {
        "country": "КОНКУРЕТНОСПОСБНОСТЬ",
        "visits": 25,
    }, {
        "country": "КАЧЕСТВО",
        "visits": 70,
    }, {
        "country": "ПРОФИЛЬНОСТЬ",
        "visits": 50,
    }],
    "valueAxes": [{
        "axisAlpha": 0,
        "minVerticalGap": 80,
        "position": "left",
        "title": "",
        "gridColor": "#fff"
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<b>[[category]]: [[value]]</b>",
        // "colorField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.2,
        "type": "column",
        // "balloonColor": "blue",
        "fillColors": "#008cba",
        "lineAlpha": "0",
        "valueField": "visits"
    }],
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 45,
        "tickLength": 15,
        "gridColor": "#fff"
    },
    "amExport":{}    
});