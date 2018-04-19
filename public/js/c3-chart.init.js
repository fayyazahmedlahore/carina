$(function () {
var chart = c3.generate({

    bindto: '#chart',

    data: {
    columns: [
    ['PHQ-2', 30, 200, 100, 400, 150, 250,100,200,300,400,500],
    ['data2', 50, 20, 20, 20, 15, 25, 30, 35, 40, 45, 50],
    ['data3', 50, 20, 30, 30, 15, 25, 30, 35, 40, 45, 50],
    ['data4', 50, 20, 50, 70, 15, 25, 30, 35, 40, 45, 50],
    ['data5', 50, 20, 60, 60, 15, 25, 30, 35, 40, 45, 50],
    ['data6', 50, 20, 70, 50, 15, 25, 30, 35, 40, 45, 50],
    ['data7', 50, 20, 30, 40, 15, 25, 30, 35, 40, 45, 50]
    ],
    types: {
    data1: 'line',
    data2: 'line',
    data3: 'line',
    data4: 'line',
    data5: 'line',
    data6: 'line',
    data7: 'line'
    }
},

axis: {
    x: {
    type: 'categorized'
    }
}

});



});
$(function () {
var chart = c3.generate({
    bindto: '#combine-chart',
    data: {
        columns: [
            ['data1', 30, 20, 50, 40, 60, 50],
            ['data2', 200, 130, 90, 240, 130, 220],
            ['data3', 300, 200, 160, 400, 250, 250],
            ['data4', 200, 130, 90, 240, 130, 220],
            ['data5', 130, 120, 150, 140, 160, 150]
        ],
        types: {
            data1: 'bar',
            data2: 'bar',
            data3: 'spline',
            data4: 'line',
            data5: 'bar'
        },
        groups: [
            ['data1','data2']
        ]
    },
    axis: {
        x: {
            type: 'categorized'
        }
    }
});

});
    $(function () {
    var chart = c3.generate({
        bindto: '#roated-chart',
        data: {
        columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 50, 20, 10, 40, 15, 25]
        ],
        types: {
        data1: 'bar'
        }
    },
    axis: {
        rotated: true,
        x: {
        type: 'categorized'
        }
    }
    });
    });