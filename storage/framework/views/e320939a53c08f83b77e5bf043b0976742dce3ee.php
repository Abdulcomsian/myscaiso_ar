
<?php $__env->startSection('styles'); ?>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

	<style>
		.select2-search__field{
			padding-left: 10px !important;
		}
		.multiselect-native-select .btn-group{
			width: 100%;
		}
		/* .multiselect-native-select .btn-group button{
			text-a
		} */
		.ms-options ul{
			padding: 8px;
			list-style-type: none;
		}
		.ms-options ul label{
			text-align: left !important;
			line-height: 12px;
		}
		.ms-options-wrap button{
			border: 1px solid #0d47b3;
		}

		.right-text{
			text-align: right;
		}
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>tr.New>td {    color: #000 !important;    font-weight: 800;    cursor: pointer;}tr.New>button {    color: #FFF !important;    font-weight: 800;    cursor: pointer;}</style>
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<?php if($message = Session::get('success')): ?>
	<div class="alert alert-light alert-elevate" role="alert">
		<!-- <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div> -->
		<!-- <div class="alert-text">
			DataTables has the ability to read data from virtually any JSON data source that can be obtained by Ajax. This can be done, in its most simple form, by setting the ajax option to the address of the JSON data source.
			See official documentation <a class="kt-link kt-font-bold" href="https://datatables.net/examples/data_sources/ajax.html" target="_blank">here</a>.
		</div> -->

	        <!-- <div class="alert alert-success"> -->
	            <p><?php echo e($message); ?></p>
	        <!-- </div> -->
	</div>
	<?php endif; ?>
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-line-chart"></i>
				</span>
				<h3 style="color:black; font-weight: bold; margin-right: 4px;">
					إنشاء رسالة
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">
						<div class="dropdown dropdown-inline">
							
						</div>
						&nbsp;


					</div>
				</div>
			</div>
		</div>
		<div class="kt-portlet__body">

            <form class="kt-form kt-form--label-right"  action="<?php echo e(route('storeNotification')); ?>" enctype="multipart/form-data" method="POST">
    	<?php echo csrf_field(); ?>
    	<div class="modal-body">
    
    			<div class="kt-portlet__body">
    				<input type="hidden" name="id" id="editvalue" value="">
    				<div class="form-group row">
    					<div class="col-lg-8 text-right" >
    						<label for="title">الموضوع</label>
    						<input type="text" id="title" name="title" class="form-control" placeholder="الرجاء إدخال موضوع الرسالة" required>
    					</div>
                        <div class="col-md-4 text-right">
    						<label for="attachment">المرفق</label>
    						
								<div class="custom-file-input-tag form-control">
                                    <input type="file" id="fileInput" class="input-file" name="attachment"/>
                                    <label for="fileInput" class="file-label">
                                      <span class="file-text">اختيار الملف</span>
                                      <span class="file-chosen">لم يتم اختيار ملف</span>
                                    </label>
                                </div>
    						
    						
    					</div>
    
    
    
    					<div class="col-lg-12 text-right">
    						<label for="message"><p> رسالة إلى المسؤول</p></label>
    						<textarea name="message" id="message" cols="20" rows="5" class="form-control" placeholder="أدرج رسالتك من فضلك"></textarea>
    					</div>
    					<br>
    					<div class="col-lg-12 text-right">
    						<label for="address1">ارسل إلى</label>
    						<input name="userid" class="form-control" value="مسؤول" disabled>
    					</div>
    					<div class="col-lg-2">
    
    						<div class="kt-input-icon kt-input-icon--right">
    
    						</div>
    					</div>
    
    				</div>
    
    			</div>
    	</div>
    
    	<div class="modal-footer">
    		<button type="submit" class="btn btn-brand btn-elevate btn-icon-sm"><i class="fa fa-paper-plane"></i>  إرسال </button>
    	</div>
    
    </form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('myscript'); ?>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo e(asset('assets/jQuery-Multiple-Select/dist/js/bootstrap-multiselect.js')); ?>"></script> -->
<script type="text/javascript" src="<?php echo e(asset('assets/jquery.multiselect.js')); ?>"></script>
	 <script src="http://demos.codexworld.com/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
	 <!-- jquery.multiselect.js -->

	<script>
		//  $('input[name="date"]').daterangepicker();
		var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();

			today  = mm + '/' + dd + '/' + yyyy;

		$('.startdate').datepicker({
			todayHighlight: true,
			"format": 'mm/dd/yyyy',
			"startDate": '01/01/2017',
			"endDate": today,
			"setDate": today
		}).on('changeDate', function(e){
        	start_date = $("#start_date").val();
			end_date = $("#end_date").val();
			filter_by_certificate = $("#filter_by_certificate").val();
			console.log(filter_by_certificate);
			$('.enddate').datepicker('setStartDate', start_date);
			$.ajax({
						type: "get",
						url: "<?php echo e(url('/send_message')); ?>",
						data: 
						{'start_date':start_date, 'end_date':end_date, 'filter_by_certificate':filter_by_certificate, 'type':'month'},
						success: function (response) {
							var res=JSON.parse(response);
							$("#langOpt3").html(res[1]);
							$(".ms-options ul").html(res[0]);
						},
					});
			
    	});
		$('.enddate').datepicker({
			todayHighlight: true,
			"format": 'mm/dd/yyyy',
			"endDate": today,
			"setDate": today}).on('changeDate', function(e){
				start_date = $("#start_date").val();
				end_date = $("#end_date").val();
				filter_by_certificate = $("#filter_by_certificate").val();
				
				$.ajax({
						type: "get",
						url: "<?php echo e(url('/send_message')); ?>",
						data: 
						{'start_date':start_date, 'end_date':end_date, 'filter_by_certificate':filter_by_certificate, 'type':'month'},
						success: function (response) {
							var res=JSON.parse(response);
							$("#langOpt3").html(res[1]);
							$(".ms-options ul").html(res[0]);
						},
					});
		});
		 $(function() {
			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();

			today  = dd + '-' + mm + '-' + yyyy;
			$('input[name="daterange"]').daterangepicker({
				showDropdowns: true,
				changeYear: true,
				maxDate: today,
				minDate: '01-01-2017',
				locale: {
        format: 'DD/MM/YYYY',
        cancelLabel: 'Clear',
    }
				
			}, function(start, end, label) {
					start_date = start.format('YYYY-MM-DD');
					end_date = end.format('YYYY-MM-DD');
					console.log(start_date);
					console.log(end_date);
					$.ajax({
						type: "get",
						url: "<?php echo e(url('/send_message')); ?>",
						data: 
						{'start_date':start_date, 'end_date':end_date, 'type':'month'},
						success: function (response) {
							var res=JSON.parse(response);
							$("#langOpt3").html(res[1]);
							$(".ms-options ul").html(res[0]);
						},
					});
				// console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			});
			});


		// $('.select2').select2({
		// 	placeholder: "Select users",
		// });
		// // $(".select2").select2();
		// $("#checkbox").click(function(){
		// 	if($("#checkbox").is(':checked') ){
		// 		$("#user > option").prop("selected","selected");
		// 		$("#user").trigger("change");
		// 	}else{
		// 		$("#user > option").removeAttr("selected");
		// 		$("#user").trigger("change");
		// 		// document.querySelector('.select2-selection__rendered').innerHTML = "";
		// 		// document.getElementById("select2-selection__rendered").innerHTML =  "";
		// 		$('.select2-selection__rendered').html('')
		// 	}
		// });

		// $(function(){
		// 	$('#demo').multiselect({
		// 		// includes Select All Option
		// 			includeSelectAllOption:false,
		// 			selectedClass:'active',

		// 	});
		// });

		$('#langOpt3').multiselect({
			columns: 1,
			placeholder: 'Select Users',
			search: true,
			selectAll: true,
		});


		// $("#last_login").change(function(){
		// 	let Month=$(this).val();
		// 	console.log($(this).val(););
		// 	$.ajax({
        //     type: "get",
        //     url: "<?php echo e(url('/send_message')); ?>",
        //     data: 
        //     {'month':Month,'type':'month'},
        //     success: function (response) {
        //       var res=JSON.parse(response);
        //        $("#langOpt3").html(res[1]);
        //        $(".ms-options ul").html(res[0]);
        //     },
        //    });
		// })


		$("#filter_by_certificate").change(function(){
			
			// console.log(cert);
		// 	$.ajax({
        //     type: "get",
        //     url: "<?php echo e(url('/send_message')); ?>",
		// 		data: {'cert':cert,'type':'certificate'},
		// 		success: function (response) {
		// 			var res=JSON.parse(response);
		// 			$("#langOpt3").html(res[1]);
		// 			$(".ms-options ul").html(res[0]);
			
		// 		},
        //    }); 
		  	let filter_by_certificate=$(this).val();
		 	start_date = $("#start_date").val();
			end_date = $("#end_date").val();

		   $.ajax({
				type: "get",
				url: "<?php echo e(url('/send_message')); ?>",
				data: 
				{'start_date':start_date, 'end_date':end_date, 'filter_by_certificate':filter_by_certificate, 'type':'month'},
				success: function (response) {
					var res=JSON.parse(response);
					$("#langOpt3").html(res[1]);
					$(".ms-options ul").html(res[0]);
				},
			});
		})

		let x = 0;
		$('.ms-selectall.global').click(function(){
			// toggle select and unselect text of this
			if(x == 0){
				$(this).text('Unselect All');
				x = 1;
				return;
			}
			$(this).text($(this).text() == 'select All' ? 'Unselect All' : 'select All');
		})

	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/form_records/createMessageUser.blade.php ENDPATH**/ ?>