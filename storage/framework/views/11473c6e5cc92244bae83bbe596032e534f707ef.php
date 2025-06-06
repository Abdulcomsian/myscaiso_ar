<style>
	/* .image-logo-hover:hover{
		img
	} */

	.kt-menu__link {
		position: relative;
		display: inline-block;
	}

	.image-hover {
		position: absolute;
		top: 12px;
		right: 25px;
		opacity: 0;
	}

	.kt-menu__link:hover .image-hover {
		opacity: 1; /* Show the hover image on menu hover */
	}


</style>

<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn">
	<i class="la la-close"></i>
</button>
<div class="kt-aside kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside -->
	<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
		<div class="kt-aside__brand-logo">
			<a href="<?php echo e(url('/home')); ?>">
				<img alt="Logo" src="<?php echo e(Auth::user()->profile_image); ?>" width="84px"/>
			</a>
		</div>
		<div class="kt-aside__brand-tools">
			<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
				<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
							<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
							<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
						</g>
					</svg></span>
				<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
							<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
							<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
						</g>
					</svg></span>
			</button>

			<!--
			<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
			-->
		</div>
	</div>

	<!-- end:: Aside -->

	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
			<ul class="kt-menu__nav test123">
				<li class="kt-menu__item <?php echo e(Request::is('home') ? 'kt-menu__item--active' : ''); ?> kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="<?php echo e(route('home')); ?>" class="kt-menu__link">
						<span class="kt-menu__link-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect id="bound" x="0" y="0" width="24" height="24" />
											<rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
											<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
										</g>
									</svg>
						</span>
						<span class="kt-menu__link-text">لوحة المتابعة</span>
						<i class="kt-menu__ver-arrow la la-angle-right kt-menu__toggle"></i>
					</a>
					<div class="kt-menu__submenu">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">	  <span class="kt-menu__link">
									<span class="kt-menu__link-text">سجل الوثيقة</span>
									<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--rounded kt-badge--brand">
										2
										</span>
									</span>
								</span>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('/document_required')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">سجل الوثيقة</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span class="kt-menu__link-text">الأدلة والسياسات</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">	  <span class="kt-menu__link">
									<span class="kt-menu__link-text">صفحات المستخدم</span>
									<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--rounded kt-badge--brand">
										2
										</span>
									</span>
								</span>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('quality_manual')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">دليل الجودة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('quality_policy')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> سياسة الجودة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('environment_policy')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> السياسة البيئية</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('health_policy')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> سياسة الصحة والسلامة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('management_organogram')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> الهيكل التنظيمي للإدارة</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fa fa-spinner" aria-hidden="true"></i>
						</span>
						<span class="kt-menu__link-text">العمليات</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">	  <span class="kt-menu__link">
									<span class="kt-menu__link-text">صفحات المستخدم</span>
									<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--rounded kt-badge--brand">
										2
										</span>
									</span>
								</span>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('sale_processes')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">إجراء الجودة 1 - عملية المبيعات</span>
								</a>
							</li>
							<li class="kt-menu__item" aria-haspopup="true">
								<a href="<?php echo e(url('purchasing_processes')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">إجراء الجودة 2 - عملية الشراء</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('servicing_contract')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">إجراء الجودة 3 - تنفيذ بنود العقد</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('competency_process')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">إجراء الجودة 4 - عملية الكفاءة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('process_interaction')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">تفاعل العملية</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fa fa-gear"></i>
						</span>
						<span class="kt-menu__link-text">الإجراءات</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">	  <span class="kt-menu__link">
									<span class="kt-menu__link-text">صفحات المستخدم</span>
									<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--rounded kt-badge--brand">
										2
										</span>
									</span>
								</span>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('documented_information')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الإجراء 1 - المعلومات الموثقة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('corrective_action')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text text-right">الإجراء 2 - الإجراءات التصحيحية بما في ذلك حالات عدم المطابقة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('management_review')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الإجراء 3 - المراجعة الإدارية</span>
								</a>
							</li>
							<li class="kt-menu__item" aria-haspopup="true">
								<a href="<?php echo e(url('monitoring_measure')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الإجراء 4 - أدوات الرقابة والقياس</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('auidt')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الإجراء 5 - عمليات التدقيق</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fab fa-wpforms"></i>
						</span>
						<span class="kt-menu__link-text">النماذج والسجلات</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">	  <span class="kt-menu__link">
									<span class="kt-menu__link-text">صفحات المستخدم</span>
									<span class="kt-menu__link-badge">
										<span class="kt-badge kt-badge--rounded kt-badge--brand">
										2
										</span>
									</span>
								</span>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('requirements_aspect')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">المتطلبات المطلوبة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('process_audit')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> عمليات التدقيق</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('interesting_parties')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الأطراف المعنية</span>
								</a>
							</li>
							
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('qms_audit')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">عمليات تدقيق نظام إدارة الجودة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('non_confromities')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">حالات عدم المطابقة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('customer')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">العملاء</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('customer_review')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">مراجعة العملاء</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('supplier')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الموردون</span>
								</a>
							</li>
							<li class="kt-menu__item" aria-haspopup="true">
								<a href="<?php echo e(url('calibration_record')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">المعايرة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('employess')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الموظفون</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('add_management_review')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">المراجعات الإدارية</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('maintance_record')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> سجلات الصيانة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('accident_risk')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">تقييمات مخاطر الحوادث</span>
								</a>
							</li>

							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('risk_assessment')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> تقييمات المخاطر</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('chemical_control')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text"> التحكم الكيميائي</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('work_instruction')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">تعليمات العمل</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				
				

				<li id="admin_notifications" class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span class="kt-menu__link-text">الإخطارات</span>
                        <span class="badge badge-primary count_notifications" style="color:#FFF !important;"></span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                    <div class="kt-menu__submenu ">
                        <span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="<?php echo e(route('storeMessage')); ?>" class="kt-menu__link ">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">إنشاء رسالة</span>
                                </a>
                            </li>
                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="<?php echo e(route('inboxMessages')); ?>" class="kt-menu__link ">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">صندوق الرسائل</span>
                                </a>
                            </li>

                            <li class="kt-menu__item " aria-haspopup="true">
                                <a href="<?php echo e(route("sentMessages")); ?>" class="kt-menu__link ">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                        <span></span>
                                    </i>
                                    <span class="kt-menu__link-text">تم الإرسال</span>
                                </a>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </li>

				
					<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon image-logo-hover">
							
							
							<img class="image-main" src="<?php echo e(asset('assets/media/icons/support-black-24.png')); ?>" alt="logo-image">
							<img class="image-hover" src="<?php echo e(asset('assets/media/icons/support-blue.png')); ?>" alt="logo-image">


						</span>
						<span class="kt-menu__link-text">الدعم</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('faq')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">الأسئلة الشائعة</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('explainer_videos')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">فيديوهات التدريب</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('userDownload')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">التحميلات</span>
								</a>
							</li>
							<li class="kt-menu__item " aria-haspopup="true">
								<a href="<?php echo e(url('viewDownload')); ?>" class="kt-menu__link ">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">عرض التنزيلات الخاصة بي</span>
								</a>
							</li>
							
							<!--<li class="kt-menu__item " aria-haspopup="true">-->
							<!--	<a href="<?php echo e(url('quick_links')); ?>" class="kt-menu__link ">-->
							<!--		<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">-->
							<!--			<span></span>-->
							<!--		</i>-->
							<!--		<span class="kt-menu__link-text">Quick Links</span>-->
							<!--	</a>-->
							<!--</li>-->
						</ul>
					</div>
				</li>
				<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fab fa-wpforms"></i>
						</span>
						<span class="kt-menu__link-text">دورات ISO عبر الإنترنت</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">


							<li class="kt-menu__item " aria-haspopup="true">
								<a href="https://myisoonline.me/public/lms/courses/%d8%a2%d9%8a%d8%b2%d9%88-20159001-%d9%86%d8%b8%d8%a7%d9%85-%d8%a5%d8%af%d8%a7%d8%b1%d8%a9-%d8%a7%d9%84%d8%ac%d9%88%d8%af%d8%a9-%d8%af%d9%88%d8%b1%d8%a9-%d8%a7%d9%84%d9%85%d8%af%d9%82%d9%82-%d8%a7/" class="kt-menu__link " target="_blank">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">نظام إدارة الجودة	</span>
								</a>	
							</li>

							<li class="kt-menu__item " aria-haspopup="true">
								<a href="https://myisoonline.me/public/lms/courses/iso-450012018-occupational-health-safety-management-system-internal-auditor-course/" class="kt-menu__link" target="_blank">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">نظام إدارة الصحة والسلامة المهنية</span>
								</a>
							</li>

							<li class="kt-menu__item " aria-haspopup="true">
								<a href="https://myisoonline.me/public/lms/courses/iso-140012015-environmental-management-system-internal-auditor-course/" class="kt-menu__link " target="_blank">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">نظام الإدارةالبيئية</span>
								</a>
							</li>

						

						</ul>
						
					</div>
				</li>

				<li class="kt-menu__item   kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
					<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
						<span class="kt-menu__link-icon">
							<i class="fab fa-wpforms"></i>
						</span>
						<span class="kt-menu__link-text">دورات</span>
						<i class="kt-menu__ver-arrow la la-angle-right"></i>
					</a>
					<div class="kt-menu__submenu ">
						<span class="kt-menu__arrow"></span>
						<ul class="kt-menu__subnav">


							<li class="kt-menu__item " aria-haspopup="true">
								<a href="https://myisoonline.me/public/lms/courses/%D8%A3%D9%87%D9%85%D9%8A%D8%A9-%D8%A7%D9%84%D8%AD%D9%81%D8%A7%D8%B8-%D8%B9%D9%84%D9%89-%D8%A7%D9%84%D9%85%D9%8A%D8%A7%D9%87-%D9%81%D9%8A-%D9%85%D9%83%D8%A7%D9%86-%D8%A7%D9%84%D8%B9%D9%85%D9%84/" class="kt-menu__link " target="_blank">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">أهمية الحفاظ على المياه في مكان العمل	</span>
								</a>	
							</li>

							<li class="kt-menu__item " aria-haspopup="true">
								<a href="https://myisoonline.me/public/lms/courses/%D8%A3%D9%87%D9%85%D9%8A%D8%A9-%D8%B5%D9%8A%D8%A7%D9%86%D8%A9-%D8%A7%D9%84%D9%85%D8%B9%D8%AF%D8%A7%D8%AA-%D9%81%D9%8A-%D9%85%D9%83%D8%A7%D9%86-%D8%A7%D9%84%D8%B9%D9%85%D9%84/" class="kt-menu__link" target="_blank">
									<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="kt-menu__link-text">أهمية صيانة المعدات في مكان العمل</span>
								</a>
							</li>


						

						</ul>
						
					</div>
				</li>
			</ul>
		</div>
	</div>

	
	<!-- end:: Aside Menu -->
</div>

<!-- end:: Aside -->
<?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/includes/sidebar.blade.php ENDPATH**/ ?>