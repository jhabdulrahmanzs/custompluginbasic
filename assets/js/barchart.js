$(document).ready(function(e) {
    e.preventDefault();
    // var link = "http://localhost/wp_plugindev/wp-content/plugins/custompluginbasic/includes/data/circket.json";
    var link = "http://localhost/wp_plugindev/wp-admin/admin-ajax.php";
    // console.log(link)
    var data = {
        'action': 'charts_ajax',
    };
    jQuery.ajax({
        url: link,
        method: "GET",
        data: data,
        success: function(data) {
            console.log(data)
            data = JSON.parse(data);
            var player = [];
            var score = [];
            var colors = [];
            for (var i in data) {
                console.log(data[i].player_name);
                player.push(data[i].player_name);
                score.push(data[i].runs);
                colors.push(color());
            }
            console.log(player);
            console.log(score);
            console.log(colors);

            var chartdata = {
                labels: player,
                datasets: [{
                    label: "Score Boards",
                    backgroundColor: colors,
                    data: score,
                }]
            };
            var ctx = $("#myChart");
            var barchart = new Chart(ctx, {
                type: 'bar',
                data: chartdata,

            });

        },
        error: function(data) {
            console.log(data);
        }
    });

    function color() {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        var rgba = 'rgba(' + r + ',' + g + ',' + b + ', 1.0)';
        return rgba;
    }

});


// const ctx = document.getElementById('myChart').getContext('2d');
// const myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ["Dhoni", "Kolhi", "Rohit", "Stokes", "Warner", "Jadeja"],
//         datasets: [{
//             label: "Score Board",
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',
//                 'rgba(163, 100, 255, 0.2)',
//             ],
//             data: [78, 67, 73, 64, 93, 58],

//         }],
//         options: {
//             // indexAxis: 'x',
//             legend: {
//                 display: false
//             },
//             title: {
//                 display: true,
//                 text: 'Circket Score Board 2022'
//             }
//         }
//     },


// });