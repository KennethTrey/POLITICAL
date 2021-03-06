@extends('header')
@section('content')

 <center> <h2 id="sub_headline"><b>The List of members </b></h2> </center>
 
 <div id="recomendr_div"> 
 	<table border="0" width="100%">
 	<tr>
 	<td colspan="3">
 	<a href="/agent_form">
		 <div id="members-to-upgrade">
		 	<center>
		 	<div id="add-more-button">{{count($recommenders)}}</div>
		 	</center>
		 	<p><center>Members to be upgraded </center></p>
		 </div>
 	</a>
 	</td> 
 	</tr>
 	<tr> <td>___ </td> <td>___ </td> <td>___ </td> </tr>
 	@if(count($recommenders) > 0) 
		@foreach($recommenders as $recommendr)
 		<tr>  <td>{{$recommendr->memberName}}</td> <td>recommended</td> <td>{{$recommendr->recommendedMembers}}</td> </tr>
 		@endforeach
	</table>
	@endif 
 </div>
 
  <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr> 						 
        	<th></th>  
            <th> Count </th>
            <th> District </th>
            <th> Member ID </th>
            <th> Member Name </th>
            <th> Enrollment Date </th>  
            <th> Gender </th>
            <th> Recommender </th>  
            <th> Enrolled By </th>  
            <th>  </th>
        </tr>
    </thead>
    <tbody>
 	<!--============================================-->
		@if(count($member_data) > 0)
		  @foreach($member_data as $d_data)
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td>{{$d_data->id}}</td>
				<td class="left">{{$d_data->districtName}}</td>
				<td class="left">{{$d_data->memberID}}</td>
				<td class="left">{{$d_data->memberName}}</td>
				<td class="left">{{$d_data->enrollmentDate}}</td> 
				<td class="left">{{$d_data->memberGender}}</td> 
				<td class="left">{{$d_data->memberRecommender}}</td> 
				<td class="left">{{$d_data->enrolledBy}}</td> 
				 
			</tr>
		  @endforeach
	   @endif
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

 


