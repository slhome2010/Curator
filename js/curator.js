/* Examples progress bar*/
(function($) {
  var progressBarOptions = {
    size: 150,
    thickness: 4,
    startAngle: -1.55,
    lineCap: "round",
    emptyFill: "rgba(0, 0, 0, .3)",
    fill: {
      color: "#db0100"
    }
  };
  var animated = false;

  $.appear(".appear-animated", {
    force_process: true
  });

  $(".circles").on("appear", function(event, $all_appeared_elements) {
    if (animated) return;

    $(".circle")
      .circleProgress(progressBarOptions)
      .on("circle-animation-progress", function(event, progress, stepValue) {
        $(this)
          .find("strong")
          .html(
            Math.round(String(stepValue.toFixed(2)).substr(1) * 100) +
              "<i>%</i>"
          );
      });

    $(".first.circle").circleProgress({
      animation: {
        duration: 1800,
        easing: "circleProgressEasing"
      },
      value: 0.2
    });

    $(".second.circle").circleProgress({
      animation: {
        duration: 1800,
        easing: "circleProgressEasing"
      },
      value: 0.35
    });

    $(".third.circle").circleProgress({
      animation: {
        duration: 1800,
        easing: "circleProgressEasing"
      },
      value: 0.5
    });

    var c4 = $(".forth.circle");

    c4.circleProgress({
      value: 0.9
    });
    // Let's emulate dynamic value update
    setTimeout(function() {
      c4.circleProgress("value", 0.7);
    }, 1000);
    setTimeout(function() {
      c4.circleProgress("value", 0.99);
    }, 1100);
    setTimeout(function() {
      c4.circleProgress("value", 0.9);
    }, 2100);

    animated = true;
  });

  /* Animation */
  $(".solution-item.fade-right").on("appear", function(
    event,
    $all_appeared_elements
  ) {
    $(this).each(function() {
      $(this).addClass("fadeInRight");
    });
  });

  $(".solution-item.fade-left").on("appear", function(
    event,
    $all_appeared_elements
  ) {
    $(this).each(function() {
      $(this).addClass("fadeInLeft");
    });
  });
})(jQuery);

/* Charts */
var fuelChartDataSet = [
  {    
    data: [35, 70, 90, 100],
    backgroundColor: [
      "rgba(255, 99, 132, 0.5)",
      "rgba(54, 162, 235, 0.5)",
      "rgba(255, 206, 86, 0.5)",
      "rgba(75, 192, 192, 0.5)"
    ],
    borderColor: [
      "rgba(255,99,132,1)",
      "rgba(54, 162, 235, 1)",
      "rgba(255, 206, 86, 1)",
      "rgba(75, 192, 192, 1)"
    ],
    borderWidth: 1
  }
];
var data = {
  labels: [
    "Экономия топлива",
    "Сокращение ручного труда",
    "Контроль раздачи топлива",
    "Онлайн контроль персонала"
  ],
  datasets: fuelChartDataSet
};
var title = {
  display: true,
  text: "Эффект от внедрения (%)",
  fontColor: "rgba(240, 255, 255, 0.8)"
};

var ctx = document.getElementById("fuelChart");
var fuelChart = new Chart(ctx, {
  type: "horizontalBar",
  data: data,
  options: {
    title: title,
    scales: {
      yAxes: [
        {
          barPercentage: 1,
          barThickness: 12,
          gridLines: {
            offsetGridLines: true,
            color: "rgba(0, 0, 0, .3)"
          },
          ticks: {
            beginAtZero: true,
            fontColor: "rgba(240, 255, 255, 0.6)"
            /* fontSize: '11', */
          }
        }
      ],
      xAxes: [
        {
          gridLines: {
            /*  offsetGridLines: true, */
            color: "rgba(0, 0, 0, .3)"
          },
          ticks: {
            beginAtZero: true,
            fontColor: "rgba(240, 255, 255, 0.6)"
          }
        }
      ]
    },
    legend: {
      display: false
    }
  }
});

var theHelp = Chart.helpers;
var vctx = document.getElementById("vfuelChart");
var vfuelChart = new Chart(vctx, {
  type: "bar",
  data: data,
  options: {
    title: title,
    scales: {
      yAxes: [
        {
          gridLines: {
            color: "rgba(0, 0, 0, .3)"
          },
          ticks: {
            beginAtZero: true,
            fontColor: "rgba(240, 255, 255, 0.6)"
          }
        }
      ],
      xAxes: [
        {
          barThickness: 18,
          gridLines: {
            color: "rgba(0, 0, 0, .3)"
          },
          ticks: {
            display: false
          }
        }
      ]
    },
    legend: {
      display: true,
      position: "bottom",
      fullWidth: true,
      labels: {
        fontColor: "rgba(240, 255, 255, 0.6)",
        generateLabels: chart => {
          chart.legend.afterFit = function() {
            var width = this.width;
           /*  console.log(this.width); */
            this.lineWidths = this.lineWidths.map(() => this.width - 24);
            /* console.log(this.lineWidths); */
            this.options.labels.padding = 10;
            this.options.labels.boxWidth = 25;
          };

          var data = chart.data;
          //https://github.com/chartjs/Chart.js/blob/1ef9fbf7a65763c13fa4bdf42bf4c68da852b1db/src/controllers/controller.doughnut.js
          if (data.labels.length && data.datasets.length) {
            return data.labels.map((label, i) => {
              var meta = chart.getDatasetMeta(0);
              var ds = data.datasets[0];
              var arc = meta.data[i];
              var custom = (arc && arc.custom) || {};
              var getValueAtIndexOrDefault = theHelp.getValueAtIndexOrDefault;
              var arcOpts = chart.options.elements.arc;
              var fill = custom.backgroundColor ? custom.backgroundColor : getValueAtIndexOrDefault(ds.backgroundColor, i, arcOpts.backgroundColor);
              var stroke = custom.borderColor ? custom.borderColor : getValueAtIndexOrDefault(ds.borderColor, i, arcOpts.borderColor);
              var bw = custom.borderWidth ? custom.borderWidth : getValueAtIndexOrDefault(ds.borderWidth, i, arcOpts.borderWidth);

              return {
                text: label,
                fillStyle: fill,
                strokeStyle: stroke,
                lineWidth: bw,
                hidden: isNaN(ds.data[i]) || meta.data[i].hidden,
                // Extra data used for toggling the correct item
                index: i
              };
            });
          }
          return [];
        }
      }
    }
  }
});
