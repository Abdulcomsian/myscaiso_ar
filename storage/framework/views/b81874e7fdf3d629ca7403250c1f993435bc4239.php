

<?php $__env->startSection('content'); ?>
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!--Begin::Dashboard 1-->
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-right">
                <h2>رأي العميل</h2>
            </div>
        </div>
        <section id="procedure_section">
            <div class="row text-right">
                <div class="col-lg-12">
                    <p>تقييمات العملاء هي أداة لمراقبة وتصنيف مستويات الأداء التي يقدمها عملاؤك، ويمكن لمؤشر الأداء هذا أن يستهدف جميع مجالات الاتصال مع العميل. على سبيل المثال: "جودة الخدمة أو المنتج" "دقة وقت التسليم" "مداراة موظفينا" أو ما شابه ذلك وذات صلة</p>
                    <p>لإضافة سجل، يرجى النقر على زر "إضافة تقييم عميل". لتعديل سجل، يرجى النقر على أيقونة التعديل الخاصة
                        بالقيد المراد تعديله. </p>
                    <div class="procedure_div">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a onclick="customerReview()" class="addBtn">إضافة تقييم عميل </a>
                            </div>
                        </div>
                        <div class="customer_review_from_div">
                            <form method="POST" action="<?php echo e(route('customer_rview')); ?> " enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>رقم تعريف العميل: </label><br>
                                            <!-- <input type="number" class="form-control" name="cus_id" placeholder="Enter Customer ID:"> -->
                                            <select class="form-control" name="cus_id" required="required">
                                                <option value="" selected disabled>يرجى اختيار رقم تعريف العميل
                                                </option>
                                                <?php $__currentLoopData = $all_customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($customer->idNumber); ?>"><?php echo e($customer->idNumber); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
										<div class="form-group">
											<label>المنتج / النشاط / المنطقة التي تتم مراجعتها</label><br>
											<input class="form-control" type="text" name="product_activity_area" placeholder="أدخل المنتج / النشاط / المنطقة قيد المراجعة">
										</div>
									</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> التقييم من حيث الجودة (0 – 10):</label>
                                            <input type="number" min="0" max="10" id="qualityScore"
                                                class="form-control"
                                                placeholder=" يرجى إدخال النقاط المحرزة فيما يتعلق  بالجودة"
                                                name="qualityScore" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>التقييم من حيث السعر: (0 – 10):</label>
                                            <input type="number" class="form-control"min="0" max="10"
                                                name="priceScore" required="required" placeholder="إذا كان قابلا للتطبيق">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>التقييم من حيث التسليم: (0 – 10): </label>
                                            <input type="number"min="0" max="10" class="form-control" name="DScore"
                                                required="required"
                                                placeholder=" يرجى إدخال النقاط المحرزة فيما يتعلق  بالتسليم">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>النتيجة الإجمالية (0-10):</label>
                                            <input type="number" class="form-control"min="0" max="10"
                                            name="OveralScore" required="required" placeholder="أدخل السعر الإجمالي">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تاريخ التقييم: (الشهر/ اليوم/ السنة):</label>
                                            <input type="date" class="form-control" max="2999-12-31" name="AssesmentDate"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟</label>
                                            <input type="text" required class="form-control" placeholder="هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟" name="other_issue" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                       
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>إرفاق الأدلة:</label>
                                            <input type="hidden" id="assetUrl" value="<?php echo e(asset('customer_review_evidence/')); ?>">
                                            
                                            
                                            <div class="custom-file-input-tag form-control">
                                                <input type="file" id="fileInput" class="input-file" name="attach_evidence" accept="all"/>
                                                <label for="fileInput" class="file-label">
                                                    <span class="file-text">اختيار الملف</span>
                                                    <span class="file-chosen">لم يتم اختيار ملف</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="submitBtn" type="submit">يُقدِّم</button>
                                <button class="btn btn-secondary submitBtn" type="reset" onclick="customerReview()"
                                    style="margin-right: 6px;">يلغي</button>
                            </form>
                        </div>
                    </div>

                    <div class="procedure_div">
                        <div class="requirments_table_div">
                            <h4>تفاصيل تقييم العميل </h4>
                            <div class="kt-portlet__body">
                                <!--begin: Datatable -->
                                <table
                                    class="common_table table table-striped- table-bordered table-hover table-checkable table-responsive">
                                    <thead>
                                        <tr>
                                            <th>رقم تقييم العميل</th>
                                            <th>رقم تعريف العميل</th>
                                            <th>اسم العميل</th>
                                            <th>الجودة </th>
                                            <th>السعر </th>
                                            <th>التسليم </th>
                                            <th>الإجمالي</th>
                                            <th>تاريخ التقييم </th>
                                            <th>حالات أخرى </th>
                                            <th>إرفاق الأدلة </th>
                                            <th>المنتج / النشاط / المنطقة التي تتم مراجعتها</th>
                                            <th>النشاط </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i = 1;
                                        ?>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i++); ?> </td>
                                                <td><?php echo e($data->cus_id); ?></td>
                                                <?php
                                                    $customersName = \App\customers::where('user_id', $userid)
                                                        ->where('idNumber', $data->cus_id)
                                                        ->first();
                                                ?>
                                                <td>
                                                    <?php if(isset($customersName->name)): ?>
                                                        <?php echo e($customersName->name); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($data->qualityScore); ?> </td>
                                                <td><?php echo e($data->priceScore); ?> </td>
                                                <td><?php echo e($data->DScore); ?> </td>
                                                <td><?php echo e($data->OveralScore); ?> </td>

                                                <td><?php echo e(date('d/m/Y', strtotime($data->AssesmentDate))); ?> </td>
                                                <td><?php echo e($data->other_issues); ?></td>
                                                <td>
                                                    <?php if(isset($data->attach_evidence)): ?>
                                                    <a href="<?php echo e(asset('customer_review_evidence/' . $data->attach_evidence)); ?>" target="_blank">View Evidence</a>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo e($data->product_activity_area); ?>

                                                </td>      
                                                <td>
                                                    <!-- new  -->
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md" onclick="getView(<?php echo e($data); ?>);" title="View Customer Details" value="" o data-toggle="modal" data-target="#model3"><i class="fa fa-eye"></i>
                                                    </button>


                                                    <!-- Modal -->
                                                    <div class="modal fade text-right" id="model3" tabindex="-1" role="dialog"
                                                        aria-labelledby="model3Label" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">رأي
                                                                        العميل</h5>
																		<a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
																		</a>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>رقم هوية العميل:</label><br>
                                                                                <input type="number" class="form-control" required name="cus_id"
                                                                                    placeholder="أدخل معرف العميل:" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>المنتج / النشاط / المنطقة التي تتم مراجعتها</label><br>
                                                                                <input class="form-control" type="text" name="product_activity_area_id" placeholder="أدخل المنتج / النشاط / المنطقة قيد المراجعة" value="" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label> التقييم من حيث الجودة: (0 – 10):</label>
                                                                                <input type="number" min="0" max="10" required class="form-control"
                                                                                    name="qualityScore">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>التقييم من حيث السعر: (0 – 10):</label>
                                                                                <input type="number" min="0" max="10" required class="form-control"
                                                                                    name="priceScore">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>التقييم من حيث التسليم: (0 – 10): </label>
                                                                                <input type="number" class="form-control" required min="0" max="10"
                                                                                    name="DScore">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>النتيجة الإجمالية (0-10)</label>
                                                                                <input type="number" class="form-control" required min="0" max="10"
                                                                                    name="OveralScore">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                            
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>تاريخ التقييم: (الشهر/ اليوم/ السنة)</label>
                                                                                <input type="date" max="2999-12-31" required class="form-control"
                                                                                    name="AssesmentDate" required="required">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟</label>
                                                                                <input type="text" required class="form-control" placeholder="هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟" name="other_issue" required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>إرفاق الأدلة:</label>
                                                                               <a href="" name="attach_evidence">عرض الأدلة المرفقة</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <button class="btn btn-secondary" type="reset" data-dismiss="modal"
                                                                        aria-label="Close" style="margin-right: 6px;">يلغي</button>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">يغلق</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                        title="Edit" value=""
                                                        onclick="getEid(<?php echo e($data); ?>);">
                                                        <span class="svg-icon svg-icon-md"> <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                                height="18px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24">
                                                                    </rect>
                                                                    <path
                                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                        fill="#5d78ff" fill-rule="nonzero"
                                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) ">
                                                                    </path>
                                                                    <path
                                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                        fill="#5d78ff" fill-rule="nonzero"
                                                                        opacity="0.3"></path>
                                                                </g>
                                                            </svg> </span>
                                                    </button>
                                                    <button data-toggle="modal"
                                                        data-target="#confirm-<?php echo e($data->id); ?>"
                                                        id="remove_<?php echo e($data->id); ?>" title="Delete"
                                                        class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                            height="18px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                    fill="#5d78ff" fill-rule="nonzero"></path>
                                                                <path
                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                    fill="#5d78ff" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <!-- Delete Modal -->

                                                    <div class="modal fade modal-mini modal-primary"
                                                        id="confirm-<?php echo e($data->id); ?>" tabindex="-1" role="dialog"
                                                        aria-labelledby="confirm" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="<?php echo e(route('delete_customer_review')); ?>"
                                                                    method="post">
                                                                    <div class="modal-header text-right"> <?php echo csrf_field(); ?>
                                                                        <div class="modal-profile"> حذف تفاصيل مراجعة
                                                                            العميل </div>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <p>هل أنت متأكد أنك تريد إزالة هذا؟</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">لا</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">نعم</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>

        </section>

    </div>


    <div class="modal fade text-right" id="editcustomer_rev" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحرير تفاصيل تقييم العملاء</h5>
                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
					</a>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('editCustomerReview')); ?> " enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="editid">
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>رقم هوية العميل:</label><br>
                                    <input type="number" class="form-control" required name="cus_id"
                                        placeholder="أدخل معرف العميل:" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>المنتج / النشاط / المنطقة التي تتم مراجعتها</label><br>
                                    <!-- <input type="number" class="form-control" name="cus_id" placeholder="Enter Customer ID:"> -->
                                    <input class="form-control" type="text" name="product_activity_area_edit" placeholder="أدخل المنتج / النشاط / المنطقة قيد المراجعة">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> التقييم من حيث الجودة: (0 – 10):</label>
                                    <input type="number" min="0" max="10" required class="form-control"
                                        name="qualityScore">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التقييم من حيث السعر: (0 – 10):</label>
                                    <input type="number" min="0" max="10" required class="form-control"
                                        name="priceScore">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التقييم من حيث التسليم: (0 – 10): </label>
                                    <input type="number" class="form-control" required min="0" max="10"
                                        name="DScore">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>النتيجة الإجمالية (0-10)</label>
                                    <input type="number" class="form-control" required min="0" max="10"
                                        name="OveralScore">
                                </div>
                            </div>
                        </div>
                       

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تاريخ التقييم: (الشهر/ اليوم/ السنة)</label>
                                    <input type="date" max="2999-12-31" required class="form-control"
                                        name="AssesmentDate" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟</label>
                                    <input type="text" required class="form-control" placeholder="هل هناك أي مشكلات أو نقاط أخرى يجب ملاحظتها؟" name="other_issue" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>إرفاق الأدلة:</label>
                                    <input type="hidden" id="assetUrl" value="<?php echo e(asset('customer_review_evidence/')); ?>">
                                    
                                    
                                    <div class="custom-file-input-tag form-control">
                                        <input type="file" id="fileInput" class="input-file" name="attach_evidence" accept="all"/>
                                        <label for="fileInput" class="file-label">
                                            <span class="file-text">اختيار الملف</span>
                                            <span class="file-chosen">لم يتم اختيار ملف</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="submitBtn" type="submit">تحديث</button>

                        <button class="btn btn-secondary submitBtn" type="reset" data-dismiss="modal"
                            aria-label="Close" style="margin-right: 6px;">يلغي</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    function getEid(data) {
        console.log(data);

        $("#editid").val(data.id);
        $("input[name='AssesmentDate']").val(data.AssesmentDate);
        $("input[name='DScore']").val(data.DScore);
        $("input[name='OveralScore']").val(data.OveralScore);
        $("select[name='cus_id']").val(data.cus_id);
        $("input[name='priceScore']").val(data.priceScore);
        $("input[name='qualityScore']").val(data.qualityScore);
        $("input[name='revnumber']").val(data.revnumber);
        $("input[name='qualityScore']").val(data.qualityScore);
        $("input[name='product_activity_area_edit']").val(data.product_activity_area);
        $("input[name='other_issue']").val(data.other_issues);
        $("#editcustomer_rev").modal('show');
    }

    function getView(data){
		console.log(data);
        $("input[name='AssesmentDate']").val(data.AssesmentDate);
        $("input[name='DScore']").val(data.DScore);
        $("input[name='OveralScore']").val(data.OveralScore);
        $("input[name='cus_id']").val(data.cus_id);
        $("input[name='priceScore']").val(data.priceScore);
        $("input[name='qualityScore']").val(data.qualityScore);
        $("input[name='product_activity_area_id']").val(data.product_activity_area);
        $("input[name='revnumber']").val(data.revnumber);
        $("input[name='qualityScore']").val(data.qualityScore);
        $("input[name='other_issue']").val(data.other_issues);
		var assetUrl = $("#assetUrl").val();
    	$("a[name='attach_evidence']").attr("href", assetUrl + "/" + data.attach_evidence);
        // $("#editcustomer_rev").modal('show');
	}
</script>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myiso_ar\resources\views/dashboard/form_records/customer_review.blade.php ENDPATH**/ ?>