@extends('header')
@section('content') 

 <center> <h2 id="sub_headline" ><b>Register new agent</b></h2> </center> 
  <center>
  <form action="/register_agent" >
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr>   <th colspan="2"> Enter new agent's details </th>   </tr> 

    <tbody> 
    	<tr>  <td><label for="agentname"> Name </label></td> <td> <input type="text" name="agentname"> </td>  </tr>
    	<tr>  <td><label for="agentUsername"> Username </label></td> <td> <input type="text" name="agentUsername"> </td>  </tr> 
    	<tr>  <td><label for="signature"> signatre </label></td> <td> <input type="text" name="signature"> </td>  </tr>
    	<tr>  <td>   </td> <td> <input type="submit" value="Register"> </td>  </tr>
    	<tr><td colspan="2">
    	<a href="/agents"><div id="add-more-container">
		 	<center>
		 	<div id="add-more-button"> ... </div>
		 	</center>
		 	<p><center>See all agents</center></p>
		 </div></a>
 		</td></tr>
	</tbody>
</table>
</form>
</center>
 <div style="min-height:175px"></div>
@endsection

@section('footer')
<footer class="footer">
			<div class="container">
				<div class="content has-text-centered">
					<p>
						Copyright &copy; 2019 <a href="home">The United Front for Transformation</a>. All rights reserved. 
					</p> 
					<p>
						
						<a class="nav-link" href="http://localhost:8000" hreflang="en-us"></a>
						
					</p>
				</div>
			</div>
</footer> 
@endsection




