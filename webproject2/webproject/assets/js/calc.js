//script `starts` when page is loaded
//used several chart.js examples from codepen to create the graphing fun
document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("calcForm");
    form.addEventListener("submit", submit, false);     //event listener for when form is submitted

    var investment = document.getElementById("amount");
    investment.addEventListener("input", valitdateAmnt, false);  //event listener for making sure amount > 0

    var startInput = document.getElementById("start");
    startInput.addEventListener("input", validateAges, false);   //event listeners for making sure startAge < endAge

    var endInput = document.getElementById("end");
    endInput.addEventListener("input", validateAges, false);    //event listeners for making sure startAge < endAge

    var calcResults = document.getElementById("calc-results");  //setting up the graphing section
    var resultGraph = document.getElementById("result");
    var context = resultGraph.getContext("2d");
    var chart;

    //when form is submitted, grab the data and send it along to the chart to be calculated
    function submit(event) {
        event.preventDefault();
        var chartData = calculate({                                 //calculate the values
            start: document.getElementById("start").value,
            end: document.getElementById("end").value,
            contribution: document.getElementById("amount").value,
            rate: document.getElementById("rate").value
        });
        graph(chartData);                                           //graph the values
    }

    function calculate(data) {
        var ages = getRange(data.start, data.end);
        return {
            labels: ages,
            datasets: [
                {
                    type: "line",   //this will give the data for the contributions line
                    fill: false,
                    showLine: true,
                    pointRadius: 0,
                    pointHoverRadius: 0,
                    borderWidth: 5,
                    label: "Contributions",
                    data: ages.map((y) => contributionsAtAge(y, data)), //pass each value from ages to contributions function + data
                    backgroundColor: "rgb(199, 56, 56)",
                    borderColor: "rgb(199, 56, 56)"
                },
                {
                    label: "Earnings",
                    data: ages.map((y) => valueAtAge(y, data)),     //pass each value from ages to earnings function + data
                    backgroundColor: "rgb(142, 199, 56)"
                }
            ]
        };
    }

    //graphing function uses chart.js to make a nice little graph
    //chart.js docs: https://www.chartjs.org/docs/latest/configuration/
    function graph(data) {
        if (chart != null) chart.destroy();
        chart = new Chart(context, {
            type: "bar",
            data: data,
            options: {
                responsive: false,
                responsiveAnimationDuration: 500,
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                            gridLines: {
                                color: "rgba(10, 250, 0, 0.2)"
                            }
                        }
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                display: false
                            }
                        }
                    ]
                }
            }
        });
        calcResults.style.opacity = 1;
        calcResults.scrollIntoView();
    }

    //this will get us the data for the contributions made at each age
    //cant just use current age to calculate, if age started at 10, we dont want 10 * contribution
    function contributionsAtAge(age, data) {
        var year = age - data.start + 1;
        return Math.floor(year * data.contribution);
    }

    //javascript doesn't have a built in range function? why :(
    function getRange(low, high) {
        var list = [];
        for (var i = low; i <= high; i++) {
            list.push(i);
        }
        return list;
    }

    //recursively will figure out the earnings 
    function valueAtAge(age, data) {
        var rate = data.rate / 100;     //transform rate entered by user into a decimal
        if (age > data.end) {           //if age > ending age, then we can return the earnings values
            var earnings = valueAtAge(age - 1, data);
            return earnings + (earnings * rate);
        } else {
            var years = age - data.start + 1;           //years is the number of years the investment has been held
            return Math.floor(futureValue(rate, years, -data.contribution, 0, 1));  //same as FV in microsoft excel
        }
    }

    //this function is the same as Microsoft Excel's FV function!
    //resource: https://gist.github.com/lancevo/6010111
    //FV: https://support.microsoft.com/en-us/office/fv-function-2eef9f44-a084-4c61-bdd8-4fe4bb1b71b3
    function futureValue(rate, years, payment, currentValue, type) {
        currentValue = currentValue || 0;
        type = type || 0;
        var pow = Math.pow(1 + rate, years);
        var result;
        if (rate) {
            result = (payment * (1 + rate * type) * (1 - pow)) / rate - currentValue * pow;
        }
        else {
            result = -1 * (currentValue + payment * years);
        }
        return result;
    }

    //check if the amount is greater than 0
    function valitdateAmnt(event) {
        investment.setCustomValidity("");
        var amnt = Number(investment.value);
        if (amnt < 1) {
            event.target.setCustomValidity("Must be greater than 0.");
        }
    }

    //make sure starting age is less than ending age
    function validateAges(event) {
        startInput.setCustomValidity("");
        endInput.setCustomValidity("");
        var start = Number(startInput.value);
        var end = Number(endInput.value);
        if (start >= end) {
            event.target.setCustomValidity("Start age must be less than stop age.");
        }
    }
});