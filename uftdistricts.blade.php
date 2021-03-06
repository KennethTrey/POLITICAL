@extends('header')

@section('content') 
 <center> <h2 id="sub_headline" ><b>List of districts </b></h2> </center> 
 <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr>
        	<th></th>
            <th> Name </th>
            <th> Head agent </th>
            <th> Number of members </th>
            <th> Agents </th>   
        </tr>
    </thead>
    <tbody>
 <!--============================================-->
		@if(count($district_data) > 0)
		  @foreach($district_data as $d_data)
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td>{{$d_data->districtName}}</td>
				<td class="left">{{$d_data->headAgent}}</td>
				<td class="left">{{$d_data->no_of_members}}</td>
				<td class="left">{{$d_data->no_of_agents}}</td> 
				 
			</tr>
		  @endforeach
	   @endif
<!--============================================-->
	</tbody>
</table>
</center>
<div style="min-height:162px"></div>

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









