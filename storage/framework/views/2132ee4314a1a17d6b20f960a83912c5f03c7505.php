

<?php $__env->startSection('content'); ?>
<style>section#procedure_section{padding:30px 20px;background:#FFF !important;}
    .table thead th, .table thead td {
    font-weight: bold !important;
    font-size: 15px;
	text-align: right;
}

</style>
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<!--Begin::Dashboard 1-->
	<!--Begin::Section-->
	
	<section id="procedure_section" class="mt-3">
		
		  <!-- Category Dropdown -->
<div class="row">
    <div class="col-md-6">
        <div class="form-group" style="margin-left: 2em">
            <label>فئة</label><br>
            <select id="category-select" name="category" required class="form-control">
                
                                        <option value="Emergency Signs" title="Emergency Signs">افتات الطوارئ</option>
                                        <option value="Prohibition Signs" title="Prohibition Signs">افتات المنع</option>
                                        <option value="Environmental signs" title="Environmental signs">اللافتات البيئية</option>
                                        <option value="Mandatory Signs" title="Mandatory Signs">اللافتات الإلزامية</option>
                                        <option value="Warning Signs" title="Warning Signs">اللافتات التحذيرية</option>
            </select>
        </div>
    </div>
</div>

<!-- Default Downloads -->
<div id="default-downloads" style="width: 100%;">
    <?php $__currentLoopData = $all_downloads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
        <div style="display: flex; margin-left: 2em; margin-right: 2em; background:#f0f4fd; gap:80px; margin-bottom:20px; padding:30px 20px; align-items:center; border-radius:12px; ">
            <div style="display:flex; align-items:center; gap:40px">
                <?php if($download->thumb_nail): ?>
                <div>
                    <img src="<?php echo e(asset('uploads/downloads/' . $download->thumb_nail)); ?>" width="110" height="156">
                </div>
                <?php endif; ?>
				<div style="color:#084f95; font-size: 18px; font-weight:600; text-align:left;width:170px;"><?php echo e($download->name); ?></div>
            </div>
           
         <div style="display: flex; gap:20px;justify-content:space-between;">
            <div style="display: flex; flex-direction: column;">
                <?php if($download->download_file): ?>
                <a href="<?php echo e(asset('uploads/downloads/' . $download->download_file)); ?>" target="_blank"><img src="assets/img/a4-btn-ar.png"  style="width: 80%"></a><br>
                <?php endif; ?>
                <?php if($download->download_file2): ?>
                <a href="<?php echo e(asset('uploads/downloads/' . $download->download_file2)); ?>" target="_blank"><img src="assets/img/a5-ar-btn.png"  style="width: 80%"></a><br>
                <?php endif; ?>
            </div>
           
         </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Filtered Downloads -->
<div id="filtered-downloads" style="display: none;">
    <!-- This will be updated dynamically -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
	$(document).on('click', '.btn-fetch-data', function(e) {
			e.preventDefault();
			var hrefValue = $(this).attr('href');  // Get the href attribute value
			// Get the data-id from the clicked button
			var dataId = $(this).data('id');
			
			$.ajax({
				url: "<?php echo e(route('user.get-data')); ?>",
				type: 'POST',
				data: {
					id: dataId,
					_token: "<?php echo e(csrf_token()); ?>"
				},
				success: function(response) {
					if (response.status === 'success') {
						// Handle success
						//console.log(response.data);
						//alert("Data fetched successfully!");
						window.open(hrefValue, '_blank');  // Opens the URL in a new tab
						return true;
					} else {
						// Handle error
						console.log(response.message);
						alert("Error: " + response.message);
					}
				},
				error: function(xhr, status, error) {
					console.log(xhr.responseText);
					alert("An error occurred!");
				}
			});
		});
 
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: 'Please enter your Details',
        tabsize: 2,
        width:700,
        height: 150,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    });
  </script>
   <script>
	$(document).ready(function() {
		$('#category-select').change(function() {
			let category = $(this).val();

			// Make an AJAX request to filter downloads
			$.ajax({
				url: "<?php echo e(route('downloads.userfilter')); ?>", // Define this route in web.php
				type: "GET",
				data: { category: category },
				success: function(response) {
					// Hide the default downloads   
					$('#default-downloads').hide();

					// Display the filtered downloads
					$('#filtered-downloads').html(response).show();
				},
				error: function() {
					alert('Error loading downloads. Please try again.');
				}
			});
		});
	});
</script>
<?php $__env->stopSection(); ?>
<!-- end:: Content --''
<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/download.blade.php ENDPATH**/ ?>