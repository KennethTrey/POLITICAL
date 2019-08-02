@extends('header')
@section('content')

 <center> <h2 id="sub_headline" ><b> Agents' payments </b></h2> </center>
 
 <div>
 	<center> 
	 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
		    <tr>  <th colspan="2">Total donations : </th>  <th colspan="3"> {{$other_data['don_total']}} </th>  </tr> 
		     
		    <tr>  
		    	<td colspan="5">
		    		<div >Amount reserved for Treasury : </div> <div style="text-align:right;"><b> {{$other_data['amount_for_treasury']}} </b></div> 
		    		<hr/>
		    		<div>Admin's wage (half of an agent's wage): </div> <div style="text-align:right;"> {{ceil($other_data['amont_per_unit']*2)}} </div> 
		    		<div> <hr/> </div>  
		    	</td> 
			</tr> 
		    <tr > <th> Agent name</th> <th> Username</th> <th> District</th> <th>Rank</th> <th> Amount</th>   </tr> 
		</thead>
		<tbody>  
		<!--========================================--> 			
		@if(count($agent_data) > 0)
		  @foreach($agent_data as $d_data) 
			<tr class="odd gradeX">  
				<td class="left">{{$d_data->agentName}}</td>  
				<td class="left">{{$d_data->agentUsername}}</td> 
				<td class="left">{{$d_data->districtName}}</td>
				@if($d_data->agentHead==1) 
				<td class="left">Head agent</td> 
				@else 
				<td class="left">Agent</td>
				@endif
				<td class="left">{{ceil($other_data['amont_per_unit']*$d_data->wageUnits)}}</td>  <!-- amont_per_unit * wageUnits-->
			</tr>
		  @endforeach
	   @endif
	<!--============================================-->
		</tbody>
		
	</table> 
</center>
 </div>
 
<script> setInterval(function(){ location.reload(); },300000); </script> 

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



