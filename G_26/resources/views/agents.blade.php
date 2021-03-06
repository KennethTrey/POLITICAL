@extends('header')
@section('content') 

 <center> <h2 id="sub_headline" ><b>List of agents</b></h2> </center> 
  <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr> 						 
        	<th></th>
            <th> Name </th>
            <th> Username </th>
            <th> Signature </th>
            <th> District </th>    
            <th>  </th>
        </tr>
    </thead>
    <tbody>
 	<!--============================================-->
		@if(count($agent_data) > 0)
		  @foreach($agent_data as $d_data)
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td>{{$d_data->agentName}}</td>
				<td class="left">{{$d_data->agentUsername}}</td>
				<td class="left">{{$d_data->signatre}}</td>
				<td class="left">{{$d_data->districtName}}</td> 
				<td></td> 
			</tr> 
		  @endforeach 
	   @endif
	   <tr> <td colspan="6">
				<a href="/agent_form"><div id="add-more-container"> 
				 	<p><center>+ Add a new agent</center></p>
				 </div></a>
			  </td>
		   </tr>
	<!--============================================-->
	</tbody>
</table>
</center>
 
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



