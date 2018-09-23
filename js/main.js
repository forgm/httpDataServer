    $(document).ready(function(){
        $.ajax({
            url: "input_data.php",
            method: "GET",
            success: function(data){
            var temperature = [];
            var timeStamp = [];
            for(var i in data) {
                temperature.push(data[i].temperature);
                timeStamp.push(data[i].timeStamp);
            }
             var CHART = document.getElementById("lineChart");
            var lineChart = new Chart(CHART, {
                type: 'line',
                data: {
                labels: temperature,
                datasets:[
                {           
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: timeStamp,
            spanGaps: false,
            }
            ]
            }
        });
    }

    });
});
   