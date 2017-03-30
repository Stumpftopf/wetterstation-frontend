<!doctype html>
<html>
<head></head>


<body><script src="/jquery-3.1.1.min.js"></script>
<script src="/_extphp/wetterstation/highcharts/code/highcharts.js"></script>
<script src="/_extphp/wetterstation/highcharts/code/highcharts-more.js"></script>
<script src="/_extphp/wetterstation/highcharts/code/modules/data.js"></script>
<script src="/_extphp/wetterstation/highcharts/code/modules/exporting.js"></script>

<script type="text/javascript">
// Parse the data from an inline table using the Highcharts Data plugin
Highcharts.chart('container', {
                 data: {
                 table: 'freq',
                 startRow: 1,
                 endRow: 17,
                 endColumn: 7
                 },
                 
                 chart: {
                 polar: true,
                 type: 'column'
                 },
                 
                 title: {
                 text: 'Wind rose for South Shore Met Station, Oregon'
                 },
                 
                 subtitle: {
                 text: 'Source: or.water.usgs.gov'
                 },
                 
                 pane: {
                 size: '85%'
                 },
                 
                 legend: {
                 align: 'right',
                 verticalAlign: 'top',
                 y: 100,
                 layout: 'vertical'
                 },
                 
                 xAxis: {
                 tickmarkPlacement: 'on'
                 },
                 
                 yAxis: {
                 min: 0,
                 endOnTick: false,
                 showLastLabel: true,
                 title: {
                 text: 'Frequency (%)'
                 },
                 labels: {
                 formatter: function () {
                 return this.value + '%';
                 }
                 },
                 reversedStacks: false
                 },
                 
                 tooltip: {
                 valueSuffix: '%'
                 },
                 
                 plotOptions: {
                 series: {
                 stacking: 'normal',
                 shadow: false,
                 groupPadding: 0,
                 pointPlacement: 'on'
                 }
                 }
                 });
</script>


<div style="display:initial">
<!-- Source: http://or.water.usgs.gov/cgi-bin/grapher/graph_windrose.pl -->
<table id="freq" border="0" cellspacing="0" cellpadding="0">
<tr nowrap bgcolor="#CCCCFF">
<th colspan="9" class="hdr">Table of Frequencies (percent)</th>
</tr>
<tr nowrap bgcolor="#CCCCFF">
<th class="freq">Direction</th>
<th class="freq">&lt; 0.5 m/s</th>
<th class="freq">0.5-2 m/s</th>
<th class="freq">2-4 m/s</th>
<th class="freq">4-6 m/s</th>
<th class="freq">6-8 m/s</th>
<th class="freq">8-10 m/s</th>
<th class="freq">&gt; 10 m/s</th>
<th class="freq">Total</th>
</tr>
<tr nowrap>
<td class="dir">N</td>
<td class="data">1.81</td>
<td class="data">1.78</td>
<td class="data">0.16</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">3.75</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">NNE</td>
<td class="data">0.62</td>
<td class="data">1.09</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">1.71</td>
</tr>
<tr nowrap>
<td class="dir">NE</td>
<td class="data">0.82</td>
<td class="data">0.82</td>
<td class="data">0.07</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">1.71</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">ENE</td>
<td class="data">0.59</td>
<td class="data">1.22</td>
<td class="data">0.07</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">1.88</td>
</tr>
<tr nowrap>
<td class="dir">E</td>
<td class="data">0.62</td>
<td class="data">2.20</td>
<td class="data">0.49</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">3.32</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">ESE</td>
<td class="data">1.22</td>
<td class="data">2.01</td>
<td class="data">1.55</td>
<td class="data">0.30</td>
<td class="data">0.13</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">5.20</td>
</tr>
<tr nowrap>
<td class="dir">SE</td>
<td class="data">1.61</td>
<td class="data">3.06</td>
<td class="data">2.37</td>
<td class="data">2.14</td>
<td class="data">1.74</td>
<td class="data">0.39</td>
<td class="data">0.13</td>
<td class="data">11.45</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">SSE</td>
<td class="data">2.04</td>
<td class="data">3.42</td>
<td class="data">1.97</td>
<td class="data">0.86</td>
<td class="data">0.53</td>
<td class="data">0.49</td>
<td class="data">0.00</td>
<td class="data">9.31</td>
</tr>
<tr nowrap>
<td class="dir">S</td>
<td class="data">2.66</td>
<td class="data">4.74</td>
<td class="data">0.43</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">7.83</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">SSW</td>
<td class="data">2.96</td>
<td class="data">4.14</td>
<td class="data">0.26</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">7.37</td>
</tr>
<tr nowrap>
<td class="dir">SW</td>
<td class="data">2.53</td>
<td class="data">4.01</td>
<td class="data">1.22</td>
<td class="data">0.49</td>
<td class="data">0.13</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">8.39</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">WSW</td>
<td class="data">1.97</td>
<td class="data">2.66</td>
<td class="data">1.97</td>
<td class="data">0.79</td>
<td class="data">0.30</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">7.70</td>
</tr>
<tr nowrap>
<td class="dir">W</td>
<td class="data">1.64</td>
<td class="data">1.71</td>
<td class="data">0.92</td>
<td class="data">1.45</td>
<td class="data">0.26</td>
<td class="data">0.10</td>
<td class="data">0.00</td>
<td class="data">6.09</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">WNW</td>
<td class="data">1.32</td>
<td class="data">2.40</td>
<td class="data">0.99</td>
<td class="data">1.61</td>
<td class="data">0.33</td>
<td class="data">0.00</td>
<td class="data">0.00</td>
<td class="data">6.64</td>
</tr>
<tr nowrap>
<td class="dir">NW</td>
<td class="data">1.58</td>
<td class="data">4.28</td>
<td class="data">1.28</td>
<td class="data">0.76</td>
<td class="data">0.66</td>
<td class="data">0.69</td>
<td class="data">0.03</td>
<td class="data">9.28</td>
</tr>
<tr nowrap bgcolor="#DDDDDD">
<td class="dir">NNW</td>
<td class="data">1.51</td>
<td class="data">5.00</td>
<td class="data">1.32</td>
<td class="data">0.13</td>
<td class="data">0.23</td>
<td class="data">0.13</td>
<td class="data">0.07</td>
<td class="data">8.39</td>
</tr>
<tr nowrap>
<td class="totals">Total</td>
<td class="totals">25.53</td>
<td class="totals">44.54</td>
<td class="totals">15.07</td>
<td class="totals">8.52</td>
<td class="totals">4.31</td>
<td class="totals">1.81</td>
<td class="totals">0.23</td>
<td class="totals">&nbsp;</td>
</tr>
</table>
</div>
<div id="container" style="min-width: 420px; max-width: 600px; height: 400px; margin: 0 auto"></div>

</body>
</html>
