<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://d3js.org/d3.v6.min.js"></script>
</head>
<body>
 
 <div id="viz">     
 </div>

<!-- 
    detruit de: https://observablehq.com/@d3/scatterplot
    site de reference incroyable
    j'ai démordernisé leur code ... pour mieux le suivre

read: 
    https://stackoverflow.com/questions/49999268/creating-and-appending-detached-elements-with-d3-create
-->

<script> 


    var height = 500;
    var width = 800;
    
    var margin = {
          top: 20,
          right: 30,
          bottom: 30,
          left: 40
    };

    d3.csv("micro").then(
        function(data) { 

           var data = data.map( function(d) { 
                                return {'name': d.Nom, 'x': +d.Longitude, 'y': +d.Latitude }
                                });

           // otherwise too many data to output (too many overlaps of texts)
           data.splice(50);

           console.log(data);

           var x = d3.scaleLinear()
                        .domain(d3.extent(data, d => d.x)).nice()
                        .range([margin.left, width - margin.right]);
           var y = d3.scaleLinear()
                        .domain(d3.extent(data, d => d.y)).nice()
                        .range([height - margin.bottom, margin.top]);
 

           var xAxis = g => g
                .attr("transform", `translate(0,${height - margin.bottom})`)
                .call(d3.axisBottom(x))
                .call(g => g.select(".domain").remove())
                .call(g => g.append("text")
                            .attr("x", width - margin.right)
                            .attr("y", -4)
                            .attr("fill", "#000")
                            .attr("font-weight", "bold")
                            .attr("text-anchor", "end")
                            .text('Longitude'));


           var yAxis = g => g
                .attr("transform", `translate(${margin.left},0)`)
                .call(d3.axisLeft(y))
                .call(g => g.select(".domain").remove())
                .call(g => g.select(".tick:last-of-type text").clone()
                            .attr("x", 4)
                            .attr("text-anchor", "start")
                            .attr("font-weight", "bold")
                            .text('Latitude'));
 

           var grid = g => g
                .attr("stroke", "currentColor")
                .attr("stroke-opacity", 0.1)
                .call(g => g.append("g")
                            .selectAll("line")
                            .data(x.ticks())
                            .join("line")
                            .attr("x1", d => 0.5 + x(d))
                            .attr("x2", d => 0.5 + x(d))
                            .attr("y1", margin.top)
                            .attr("y2", height - margin.bottom))
                            .call(g => g.append("g")
                                        .selectAll("line")
                                        .data(y.ticks())
                                        .join("line")
                                        .attr("y1", d => 0.5 + y(d))
                                        .attr("y2", d => 0.5 + y(d))
                                        .attr("x1", margin.left)
                                        .attr("x2", width - margin.right));

           var svg = d3.select("#viz")
                        .append("svg")
                        .attr("width", width)
                        .attr("height", height);

//                        .attr("viewBox", [0, 0, width, height]);

           svg.append("g").call(xAxis);
           svg.append("g").call(yAxis);
           svg.append("g").call(grid);
 
           svg.append("g")
                .attr("stroke", "steelblue")
                .attr("stroke-width", 1.5)
                .attr("fill", "none")
                .selectAll("circle")
                .data(data)
                .join("circle")
                .attr("cx", d => x(d.x))
                .attr("cy", d => y(d.y))
                .attr("r", 3);


           svg.append("g")
                .attr("font-family", "sans-serif")
                .attr("font-size", 10)
                .selectAll("text")
                .data(data)
                .join("text")
                .attr("dy", "0.35em")
                .attr("x", d => x(d.x) + 7)
                .attr("y", d => y(d.y))
                .text(d => d.name);
           

        } // data received
    ); // csv

 
</script>

</body>
</html>
