function createActivityGraph() {
    var activityGraph = document.getElementById("lab-activity")
    if (activityGraph) {
        var data = JSON.parse(activityGraph.dataset.graph)
        var ctx = activityGraph.getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.labels,
                datasets: [{
                    label: 'Commits',
                    data: data.data,
                    backgroundColor: [
                        '#E9F1FE'
                    ],
                    borderColor: [
                        '#377dff'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        offset: true,
                        display: false,
                        gridLines: {
                            display: true
                        },
                        ticks: {
                            display: true
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true
                        },
                        ticks: {
                            min: 0,
                            display: true
                        }
                    }]
                }
            }
        });
    }
}

function init()
{
    // Contact
    autosize(document.querySelector('.contact-message'));

    // Lab
    timeago().render(document.querySelectorAll('.timeago'));
    createActivityGraph();
    document.querySelectorAll('code').forEach(function(element) {
        hljs.highlightBlock(element);
    });
}

document.addEventListener("turbolinks:load", function() {
    init();
});
init();
