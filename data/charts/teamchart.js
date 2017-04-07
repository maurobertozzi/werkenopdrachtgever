      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          ['Person', 'Hours worked'],
          ['Steve Jobs',     50.03],
          ['Marie Forleo',      36.93],
          ['Kim Kardashian',  30.48],
          ['LeBron James', 1.75],
          ['Zinedine Zidane',    45.50],
          ['Shawn Corey Carter',    42.67],
          ['Doutze Kroes',    0],
          ['Bruce Lee',    7.27],
          ['Onika Tanya Maraj',    27.93]
        ]);

        var options = {
          title: 'Hours worked by each employee',
          is3D: true,
          legend: { position: "top", maxLines: "3"},
          backgroundColor: { fill:'transparent' },
          sliceVisibilityThreshold: 0,
          slices: {
            0: { color: '#94C7A4' },
            1: { color: '#89B8B8' },
            2: { color: '#528494' },
            3: { color: '#6CD5B0' },
            4: { color: '#33b848' },
            5: { color: '#44d4b4' },
            6: { color: '#359abb' },
            7: { color: '#315c9b' },
            8: { color: '#81D4D9' }
          }

        };
        function resize () {
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        drawChart2();
      }
      window.onload = resize();
      window.onresize = resize;
        

      }

  function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Label", "Aantal uren", { role: "style" } ],
        ["Total required hours",  1232.00, "#315c9b"],
        ["Total hours logged", 1123.27, "1CD938"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Hours required vs hours worked.",
        backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }