Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}

google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Label", "Aantal uren", { role: "style" } ],
        ["Total required hours",  311.50, "#315c9b"],
        ["Total hours logged", 20.5, "1CD938"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Storypoints team vs personal Storypoints.",
        backgroundColor: { fill:'transparent' },
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      function resize () {
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
      drawChart2();
    }
      window.onload = resize();
      window.onresize = resize;
    
  }


  function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Label", "Aantal uren", { role: "style" } ],
        ["Total required hours",  176.00, "#315c9b"],
        ["Total hours logged", 129.00, "1CD938"],
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
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
      chart.draw(view, options);

  }

