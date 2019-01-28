<h2>Find nearest location from Desired Location</h2>
<h4>PHP script that calculates the nearest stores <em>near a given location</em></h4>
<p>The script calculates the closest distance from a particular location using sql script.</p>
<h5>The mathematical formula </h5>
<code size:15px; background-color:#ffeaa7>Δlat = lat2 - lat1  Δlon = lon2 - lon1</code>
<code size:15px; background-color:#ffeaa7>a = sin<sup>2</sup>(Δlat/2) + cos(lat1) * cos(lat2) * sin<sup>2</sup>(Δlong/2)</code>
<code size:15px; background-color:#ffeaa7>2*a*tan2(√a , √1-a)</code>
<code>d = R*c where R is the earth's radius = 3956</code>
