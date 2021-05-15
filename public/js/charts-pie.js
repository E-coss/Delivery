/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
$(document).ready(function() {

    var URLactual = window.location;

    // GRAFICA DASHBOARD ADMINISTRADOR

    var pestana = $('#G_User').attr('pestana');
    if (URLactual == pestana) {
        var datos;
        var route = $('#G_User').attr('ruta');
        $.ajax({
            url: route,
            type: 'GET',
            data: {},
            success: function(response) {
                datos = response.datos;
                console.log(response);

                const pieConfig = {
                        type: 'doughnut',
                        data: {
                            datasets: [{
                                data: [datos[1], datos[2], datos[3]],
                                /**
                                 * These colors come from Tailwind CSS palette
                                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                                 */
                                backgroundColor: ['#1c64f2', '#0694a2', '#7e3af2'],
                                label: 'Dataset 1',
                            }, ],
                            labels: ['Administrador', 'Supervisor', 'Cliente'],
                        },
                        options: {
                            responsive: true,
                            cutoutPercentage: 80,
                            /**
                             * Default legends are ugly and impossible to style.
                             * See examples in charts.html to add your own legends
                             *  */
                            legend: {
                                display: false,
                            },
                        },
                    }
                    // change this to the id of your chart element in HMTL
                const pieCtx = document.getElementById('pie')
                window.myPie = new Chart(pieCtx, pieConfig)

            },
            error: function(error) {

            }
        });
    }


});