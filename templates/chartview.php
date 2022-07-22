<div class="container">
    <div class="col-8 offset-2 my-5">
        <div class="card">
            <div class="card-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
                labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [{
                    label: "Population (millions)",
                    
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    data: [2478,5267,734,784,433],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    hoverOffset: 4
            }]
        },
        options: {
            // indexAxis: 'x',
            legend: { display: false },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
                }
            }
       
    });
</script>