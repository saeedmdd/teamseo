function radarChart(elementID, colors, labels, elemLabels, data) {

    console.log(data)

    const options = {
        labels: elemLabels,
        datasets: [{
            label: labels[0],
            data: data[0],
            fill: true,
            backgroundColor: 'rgba(100, 148, 237, 0.678)',
            borderColor: colors[0],
            pointBackgroundColor: colors[0],
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: colors[0]
        }, {
            label: labels[1],
            data: data[1],
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: colors[1],
            pointBackgroundColor: colors[1],
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: colors[1]
        }]
    };

    const config = {
        type: 'radar',
        data: options,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        },
    };

    var myChart = new Chart(
        document.getElementById(elementID),
        config
    );

    return myChart;
}

function render_radar(elementID, colors, labels, elemLabels, datas) {
    let str = `<!-- chart -->
                <div class="mb-3 mt-4">
                    <canvas id="${elementID}"></canvas>
                </div>`;
    $('.myRadar').append(str);
    radarChart(elementID, colors, labels, elemLabels, datas)
}


setTimeout(function() {
    $(".myRadar").html(``);

    render_radar(
        '#mychart1', ['blue', 'red'], ['ماه بهمن', 'ماه دی '], ['مغز', 'اعصاب', 'روان', 'ذهن', 'حافظه'], [
            [28, 43, 62, 90, 65],
            [30, 40, 60, 70, 50]
        ]
    );

}, 1000);