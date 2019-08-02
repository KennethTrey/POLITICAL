<?php $__env->startSection('content'); ?>

 <center> <h2 id="headline"><b>The List of members </b></h2> </center>
 
 <a href="/agent_form"><div id="add-more-container">
 	<center>
 	<div id="add-more-button"><?php echo e(count($recommenders)); ?></div>
 	</center>
 	<p>Upgrade members </p>
 </div></a>
 <div id="recomendr_div"> 
 	<?php if(count($recommenders) > 0): ?>
 	<table border="0" width="100%">
		<?php $__currentLoopData = $recommenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommendr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 		<tr>  <td><?php echo e($recommendr->memberName); ?></td> <td>recommended</td> <td><?php echo e($recommendr->recommendedMembers); ?></td> </tr>
 		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
	<?php endif; ?> 
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
		<?php if(count($member_data) > 0): ?>
		  <?php $__currentLoopData = $member_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td><?php echo e($d_data->id); ?></td>
				<td class="left"><?php echo e($d_data->districtName); ?></td>
				<td class="left"><?php echo e($d_data->memberName); ?></td>
				<td class="left"><?php echo e($d_data->enrollmentDate); ?></td> 
				<td class="left"><?php echo e($d_data->memberGender); ?></td> 
				<td class="left"><?php echo e($d_data->memberRecommender); ?></td> 
				<td class="left"><?php echo e($d_data->enrolledBy); ?></td> 
				<td>
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-pencil"></i>
					</button>
					<button class="btn btn-danger btn-xs">
						<i class="fa fa-trash-o "></i>
					</button>
				</td>
			</tr>
		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	   <?php endif; ?>
	<!--============================================-->
	</tbody>
</table>
</center>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>