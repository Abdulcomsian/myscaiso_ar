

<?php $__env->startSection('content'); ?>
    <style>
        section#procedure_section {
            padding: 30px 20px;
            background: #fff;
        }

        div#faq-tabs a {
            padding: 13px 10px;
            border-radius: 0;
            border-bottom: 6px solid #F1F2F7;
        }

        section#procedure_section .col-lg-4>div,
        section#procedure_section .col-lg-8>div {
            background: #FFF;
        }

        div#faq-tabs a.nav-link {
            display: block;
            clear: both;
            position: relative;
            width: 100%
        }

        section#procedure_section a,
        section#procedure_section button {
            font-weight: 500 !important
        }

        section#procedure_section p {
            font-weight: 300 !important
        }

        /* .cat-tab{
            height: 5px;
        } */

        // FAQ .faq-nav{flex-direction:column;margin:0 0 32px;border-radius:2px;border:1px solid #ddd;box-shadow:0 1px 5px rgba(85,85,85,.15);display:block;margin:0;padding:13px 16px;background-color:#fff;border:0;border-bottom:1px solid #ddd;border-radius:0;color:#4580c6 !important;transition:background-color .2s ease;font-weight:700;color:rgba(0,0,0,.87)}&:last-of-type{border-bottom-left-radius:2px;border-bottom-right-radius:2px;border-bottom:0}i.mdi{margin-right:5px;font-size:18px;position:relative}.card-header{padding:15px 16px;border-radius:0;background-color:#f6f6f6;width:100%;padding:0;border:0;font-weight:700;color:rgba(0,0,0,.87);text-align:left;white-space:normal}.card-header .btn.btn-link {color: #4580c6 !important;}a.nav-link.active {background-color: #4580c6 !important;color: #FFF !important;}a.nav-link{color: #4580c6 !important;}
    </style>
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="direction: rtl;">
        <!--Begin::Dashboard 1-->
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <p style="font-size: 20px">الأسئلة الشائعة</p>
            </div>
        </div>

        <section id="procedure_section" class="mt-3">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">


                        <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                            <?php $__currentLoopData = $all_cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                                <a href="#tab<?php echo e($cate->id); ?>" class="nav-link" style="text-align: right;" data-toggle="pill" role="tab"
                                    aria-controls="tab<?php echo e($cate->id); ?>" aria-selected="true">
                                    <i class="mdi mdi-help-circle"></i><?php echo e($cate->name); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content" id="faq-tab-content">
                            <?php $x = 1; ?>
                            <?php $__currentLoopData = $all_cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane <?php echo e($x == 1 ? 'show active' : ''); ?>" id="tab<?php echo e($cate->id); ?>"
                                    role="tabpanel" aria-labelledby="tab<?php echo e($cate->id); ?>">
                                    <div class="accordion" id="accordion-tab-<?php echo e($cate->id); ?>">
                                        <?php $__currentLoopData = $all_faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($faq->category == $cate->id): ?>
                                                <div class="card category-<?php echo e(str_replace(' ', '-', $cate->name)); ?>">
                                                    <div class="card-header"
                                                        id="accordion-tab-<?php echo e($cate->id); ?>-heading-<?php echo e($faq->id); ?>">
                                                        <h5>
                                                            <p>
                                                            <button class="btn btn-link" style="text-align:left;"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#accordion-tab-<?php echo e($cate->id); ?>-content-<?php echo e($faq->id); ?>"
                                                                aria-expanded="false"
                                                                aria-controls="accordion-tab-<?php echo e($cate->id); ?>-content-<?php echo e($faq->id); ?>"><?php echo e($faq->question); ?></button>
                                                            </p>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse"
                                                        id="accordion-tab-<?php echo e($cate->id); ?>-content-<?php echo e($faq->id); ?>"
                                                        aria-labelledby="accordion-tab-<?php echo e($cate->id); ?>-content-<?php echo e($faq->id); ?>"
                                                        data-parent="#accordion-tab-<?php echo e($cate->id); ?>">
                                                        <div class="card-body">
                                                            <!---<p>Category single:<?php echo e($cate->id); ?></p>
                                        <p>Cate from faq: <?php echo e($faq->category); ?></p>--->
                                                        
                                                         <p>   <?php echo $faq->answer; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php $x++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--End::Section-->
    </div>
<?php $__env->stopSection(); ?>
<!-- end:: Content --''

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/faq.blade.php ENDPATH**/ ?>