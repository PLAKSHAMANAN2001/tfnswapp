<table style="height: 465px;" width="717">
<tbody>
<tr>
<td style="width: 707px;">
<table style="width: 699px; height: 135px; float: left;">
<tbody>
<tr>
<td style="width: 179.19px;"><img src="img/tfnsw.png" alt="Transport NSW" /></td>
<td style="width: 502.81px;">
<h3><span style="color: #ff6600;"><strong>Transport NSW Openshift PaaS Demo - This runs from Openshift Redhat cloud - Trial account</strong></span></h3>
</td>
</tr>
<tr>
<td style="width: 179.19px;">Details of webservices Hosted AWS - Openshift</td>
<td style="width: 502.81px;"><a href="http://tfnsw-ws-demo-integrationpoc.apps.np.dmp.aws.hosting.transport.nsw.gov.au/">http://tfnsw-ws-demo-integrationpoc.apps.np.dmp.aws.hosting.transport.nsw.gov.au/</a></td>
</tr>
<tr>
<td style="width: 179.19px;">How to use service</td>
<td style="width: 502.81px;">Use Postname or SoapUI to with following instructions</td>
</tr>
<tr>
<td style="width: 179.19px;">Postman setting</td>
<td style="width: 502.81px;">
<div>Step1:</div>
<div>1. Setup follwing instructions in Postname</div>
<ul>
<li>Set 'POST' Method</li>
<li>Set 'Body' and 'raw' mode</li>
<li>Set 'XML(text/xml)'</li>
</ul>
</td>
</tr>
<tr>
<td style="width: 179.19px;">&nbsp;</td>
<td style="width: 502.81px;">
<div>2. Step2:</div>
<div>&nbsp;</div>
<div><em>&lt;soapenv:Envelope xmlns:soapenv="<a href="http://schemas.xmlsoap.org/soap/envelope/">http://schemas.xmlsoap.org/soap/envelope/</a>" xmlns:hs="<a href="http://transportnsw.com">http://transportnsw.com</a>"&gt;</em><br /><em>&lt;soapenv:Body&gt;</em><br /><em>&lt;hs:inputSOATest&gt;</em><br /><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;employeeID&gt;123456&lt;/employeeID&gt;</em><br /><em>&lt;/hs:inputSOATest&gt;</em><br /><em>&lt;/soapenv:Body&gt;</em><br /><em>&lt;/soapenv:Envelope&gt;</em></div>
<div>&nbsp;</div>
<div>Valid employeeIDs are '123456' and '12345'</div>
<div>Change any other value to validate service</div>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
