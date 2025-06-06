@extends('dashboard.layouts.app')

@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!--Begin::Dashboard 1-->
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-right">
                <h2>مراجعات الإدارة</h2>
            </div>
        </div>
        <section id="procedure_section">
            <div class="row text-right">
                <div class="col-lg-12">
                    <p>صُممت المراجعات الإدارية لتقييم كفاءة نظام الإدارة مع توجيه مسار الأعمال نحو التحسين المستمر. وينبغي
                        إجراء هذه المراجعات بشكلٍ شهري أو ربع سنوي أو نصف سنوي أو سنويًا وذلك بناءً على حجم العمل وطبيعته
                    </p>

                    <p>لإضافة سجل، انقر زر "إضافة مراجعة إدارية". لتعديل سجل، انقر على رمز التحرير الخاص بالقيد المراد
                        تعديله أو حذفه.</p>

                    <div class="procedure_div">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a onclick="managemnetReviewForm()" class="addBtn">إضافة مراجعة إدارية </a>
                            </div>
                        </div>
                        <div class="managemnet_review_from_div">
                            <form action="{{ route('mgtreview') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- <div class="col-lg-6">
                        <div class="form-group">
               <label>Management Review ID Number (See table below. For amendments only):</label><br>
               <input type="number" class="form-control" name="mgtreviewId">
              </div>
                                        </div>  -->
                                    <input type="hidden" class="form-control" name="mgtreviewId" value="241">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>تاريخ المراجعة الإدارية: </label><br>
                                            <input type="date" max="2999-12-31" required class="form-control"
                                                name="reviewdate">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>الحضور في اجتماع المراجعة الإدارية: </label>
                                            <textarea class="form-control" name="meetingatt" required placeholder="أدخل اسم الحضور:" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>مراجعة محضر الاجتماع السابق: </label>
                                            <textarea class="form-control" name="prevmeeting" required placeholder="أدخل النقاط الرئيسية للاجتماعات السابقة"
                                                cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>التعديلات في الشؤون الخارجية والداخلية التي تخص نظام إدارة الجودة
                                                والتغييرات الموصى بها:</label>
                                            <textarea class="form-control" name="recommendedchange" required placeholder="أدخل التغييرات" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تقديم ملخص لاستطلاعات رضا العملاء وردود الفعل من الأطراف المعنية ذات
                                                الصلة:</label>
                                            <textarea class="form-control" placeholder="أدخل الملخص" name="sammarisecustomr" required placeholder=""
                                                cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تقديم الملاحظات على الأهداف السابقة: </label>
                                            <textarea class="form-control" name="prevobjectv" placeholder="أدخل تعليقات الكائنات السابقة" required placeholder=""
                                                cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>إجراء تدقيق لأداء المنتجات والخدمات ومطابقتها مع معايير الجودة:</label>
                                            <textarea class="form-control"
                                                placeholder="أدخل تعليقات حول أداء المنتجات والخدمات التي تم إنشاؤها في عمليات تدقيق العمليات" name="conformity"
                                                required placeholder="" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تحديد حالات عدم المطابقة والإجراءات التصحيحية المناسبة:</label>
                                            <textarea class="form-control" name="nonconformities" required
                                                placeholder="أدخل حالات عدم المطابقة والإجراءات التصحيحية" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تحديد نتائج المراقبة والإشراف والقياس:</label>
                                            <textarea class="form-control" name="monitoringres" required placeholder="أدخل النتيجة" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تقديم الملاحظات حول نتائج التدقيق: </label>
                                            <textarea class="form-control" name="auditres" required placeholder="أدخل التعليقات على نتائج التدقيق" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تقديم الملاحظات بشأن أداء مزودي الخدمات الخارجيين: </label>
                                            <textarea class="form-control" name="externalprovider" required
                                                placeholder="أدخل تعليقات أداء مقدمي الخدمات الخارجيين" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ضمان دقة الموارد والتغييرات الموصى بها: </label>
                                            <textarea class="form-control" name="adequacy" required
                                                placeholder="أدخل التعليقات حول مدى كفاية الموارد والتغييرات الموصى بها" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>ضمان فعالية الإجراءات المتخذة لمعالجة المخاطر واستغلال الفرص: </label>
                                            <textarea class="form-control" name="effectiveness" required placeholder= "أدخل فعالية الإجراءات" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>إضافة أهداف الجودة الجديدة والمستهدفات وفرص التحسين، مع مراعاة الأطراف
                                                المسؤولة والجداول الزمنية للإنجاز ومعايير النجاح. وينبغي أن تشمل هذه الأهداف
                                                جوانب الجودة والجوانب المالية، مع أخذ المواءمة مع سياسة الجودة في
                                                الاعتبار:</label>
                                            <textarea class="form-control" name="newquality" required placeholder="أدخل أهداف الجودة الجديدة" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>الملف المرفق (PDF, jpeg, txt, .docx, doc, png):</label>
                                            <input name="attach_file" type="file" class="form-control" accept="image/*,.doc, .docx,.txt,.pdf,.jpeg,.png">
										</div>
									</div>
								</div>
                                <button type="submit" class="submitBtn">يُقدِّم</button>
                                <button type="reset" onclick="mngmnt_reviews()" class="submitBtn"
                                    style="margin-right:12px;">يلغي</button>


                                <!--<button  onclick="customerForm()" type="reset" class="submitBtn"style="margin-right: 8px;">Cancel</button>-->
                            </form>
                        </div>
                    </div>

                    <div class="procedure_div">
                        <div class="requirments_table_div">
                            <h4> مراجعة الإدارة</h4>
                            <div class="kt-portlet__body table-responsive">
                                <!--begin: Datatable -->
                                <table
                                    class="common_table table table-striped- table-bordered table-hover table-checkable table-responsive"
                                    id="kt_table_agent">
                                    <thead>
                                        <tr>
                                            <th> رقم الهوية</th>
                                            <th>التاريخ</th>
                                            <th>الحضور</th>
                                            <th> الأهداف المرجوة</th>
                                            <!--<th>Detail View</th>-->
                                            <th>الإجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($userData as $item)
                                            <tr>
                                                <!--<td> {{ $item->id }}</td>-->
                                                <td>@php echo $i; @endphp</td>
                                                <td> {{ date('d/m/Y', strtotime($item->reviewdate)) }}</td>
                                                <td> {{ $item->meetingatt }}</td>
                                                <td> {{ $item->newquality }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                        title="Edit" value=""
                                                        onclick="displaydetail({{ json_encode($item) }});">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                        title="Edit" value=""
                                                        onclick="getEid({{ $item }});"><span
                                                            class="svg-icon svg-icon-md"> <svg
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
                                                    <button onclick="deleteData({{ $item }})"
                                                        class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete"
                                                        value=""><svg xmlns="http://www.w3.org/2000/svg"
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
                                                </td>
                                                <!--       <td>-->
                                                <!--   {{-- <button  onclick="deleteData({{$item}})" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete" value=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">											<rect x="0" y="0" width="24" height="24"></rect>											<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#5d78ff" fill-rule="nonzero"></path>											<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#5d78ff" opacity="0.3"></path>										</g>									</svg>-->
                                        <!--   </button> --}}-->
                                                <!--</td>-->

                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!--End::Section-->
    </div>
    <div class="modal fade text-right" id="deleteRequirment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">حذف مراجعة الإدارة</h5>
                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <p>هل أنت متأكد أنك تريد حذف هذا الإدخال؟</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('deletemgtreview') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="validid">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">لا</button>
                        <button type="submit" class="btn btn-danger">نعم</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade text-right" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">عرض تفاصيل مراجعات الإدارة</h5>
                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <input type="hidden" readonly disabled name="id" value="" id="id_feild">
                            <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Management Review ID Number (See table below. For amendments only):</label><br>
                                        <input type="number" readonly disabled class="form-control" name="1mgtreviewId">
                                    </div>
                                </div> -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>تاريخ المراجعة الإدارية: </label><br>
                                    <input type="date" readonly disabled class="form-control" name="1reviewdate">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>الحضور في اجتماع المراجعة الإدارية: </label>
                                    <input type="text" readonly disabled class="form-control" name="1meetingatt"
                                        placeholder="أدخل اسم الحضور:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>مراجعة محضر الاجتماع السابق: </label>
                                    <input type="text" readonly disabled class="form-control" name="1prevmeeting"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التعديلات في الشؤون الخارجية والداخلية التي تخص نظام إدارة الجودة والتغييرات
                                        الموصى بها:</label>
                                    <input type="text" readonly disabled class="form-control"
                                        placeholder="أدخل التغييرات" name="1recommendedchange">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم ملخص لاستطلاعات رضا العملاء وردود الفعل من الأطراف المعنية ذات
                                        الصلة:</label>
                                    <input type="text" readonly disabled class="form-control"
                                        placeholder="أدخل الملخص" name="1sammarisecustomr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات على الأهداف السابقة: </label>
                                    <input type="text" readonly disabled class="form-control"
                                        placeholder="أدخل تعليقات الكائنات السابقة" name="1prevobjectv">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>إجراء تدقيق لأداء المنتجات والخدمات ومطابقتها مع معايير الجودة:</label>
                                    <input type="text" readonly disabled
                                        placeholder="أدخل تعليقات حول أداء المنتجات والخدمات" class="form-control"
                                        name="1conformity">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>حديد حالات عدم المطابقة والإجراءات التصحيحية المناسبة:</label>
                                    <input type="text" readonly disabled class="form-control"
                                        placeholder="أدخل حالات عدم المطابقة والإجراءات التصحيحية"
                                        name="1nonconformities">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تحديد نتائج المراقبة والإشراف والقياس:</label>
                                    <input type="text" readonly disabled class="form-control"
                                        placeholder="أدخل النتيجة" name="1monitoringres">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات حول نتائج التدقيق: </label>
                                    <input type="text" readonly disabled class="form-control" name="1auditres">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات بشأن أداء مزودي الخدمات الخارجيين: </label>
                                    <input type="text" readonly disabled class="form-control"
                                        name="1externalprovider">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ضمان دقة الموارد والتغييرات الموصى بها: </label>
                                    <input type="text" readonly disabled class="form-control" name="1adequacy">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ضمان فعالية الإجراءات المتخذة لمعالجة المخاطر واستغلال الفرص: </label>
                                    <input type="text" readonly disabled class="form-control" name="1effectiveness">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>إضافة أهداف الجودة الجديدة والمستهدفات وفرص التحسين، مع مراعاة الأطراف المسؤولة
                                        والجداول الزمنية للإنجاز ومعايير النجاح. وينبغي أن تشمل هذه الأهداف جوانب الجودة
                                        والجوانب المالية، مع أخذ المواءمة مع سياسة الجودة في الاعتبار:</label>
                                    <input type="text" readonly disabled class="form-control" name="1newquality">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>الملف المرفق (PDF, jpeg, txt, .docx, doc, png):</label>
                                    <div class="file_attachemnt_div">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">يغلق</button>

                </div>
                
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-right" id="editSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحرير تفاصيل مراجعات الإدارة</h5>
                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('mgtreviewupdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <input type="hidden" name="id" value="" id="sdsd">
                            <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Management Review ID Number (See table below. For amendments only):</label><br>
                                        <input type="number" class="form-control" name="mgtreviewId">
                                    </div>
                                </div> -->
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>تاريخ المراجعة الإدارية: </label><br>
                                    <input type="date" max="2999-12-31" required class="form-control"
                                        name="reviewdate">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>الحضور في اجتماع المراجعة الإدارية: </label>
                                    <input type="text" class="form-control" required name="meetingatt"
                                        placeholder="أدخل اسم الحضور:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>مراجعة محضر الاجتماع السابق: </label>
                                    <input type="text" class="form-control" required name="prevmeeting"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التعديلات في الشؤون الخارجية والداخلية التي تخص نظام إدارة الجودة والتغييرات
                                        الموصى بها:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التغييرات" required
                                        name="recommendedchange">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم ملخص لاستطلاعات رضا العملاء وردود الفعل من الأطراف المعنية ذات
                                        الصلة:</label>
                                    <input type="text" class="form-control" placeholder="أدخل الملخص" required
                                        name="sammarisecustomr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات على الأهداف السابقة: </label>
                                    <input type="text" class="form-control"
                                        placeholder="أدخل تعليقات الكائنات السابقة" required name="prevobjectv">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>جراء تدقيق لأداء المنتجات والخدمات ومطابقتها مع معايير الجودة:</label>
                                    <input type="text" class="form-control"
                                        placeholder="أدخل تعليقات حول أداء المنتجات والخدمات" required name="conformity">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تحديد حالات عدم المطابقة والإجراءات التصحيحية المناسبة:</label>
                                    <input type="text"
                                        class="form-control"placeholder="أدخل حالات عدم المطابقة والإجراءات التصحيحية"
                                        name="nonconformities">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تحديد نتائج المراقبة والإشراف والقياس:</label>
                                    <input type="text" class="form-control" placeholder="أدخل النتيجة" required
                                        name="monitoringres">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات حول نتائج التدقيق: </label>
                                    <input type="text" class="form-control" required name="auditres">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تقديم الملاحظات بشأن أداء مزودي الخدمات الخارجيين: </label>
                                    <input type="text" class="form-control" required name="externalprovider">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ضمان دقة الموارد والتغييرات الموصى بها: </label>
                                    <input type="text" class="form-control" required name="adequacy">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>ضمان فعالية الإجراءات المتخذة لمعالجة المخاطر واستغلال الفرص: </label>
                                    <input type="text" class="form-control" required name="effectiveness">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>إضافة أهداف الجودة الجديدة والمستهدفات وفرص التحسين، مع مراعاة الأطراف المسؤولة
                                        والجداول الزمنية للإنجاز ومعايير النجاح. وينبغي أن تشمل هذه الأهداف جوانب الجودة
                                        والجوانب المالية، مع أخذ المواءمة مع سياسة الجودة في الاعتبار:</label>
                                    <input type="text" class="form-control" required name="newquality">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>الملف المرفق (PDF, jpeg, txt, .docx, doc, png):</label>
                                    <input name="attach_file" type="file" class="form-control" accept="image/*,.doc, .docx,.txt,.pdf,.jpeg,.png">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">يلغي</button>
                    <button type="submit" class="btn btn-danger">تحديث</button>

                </div>
                </form>
            </div>
        </div>
    </div>


    {{-- deyail modal --}}
@endsection
<script>
    function getEid(data) {
        console.log(data);
        $("#sdsd").val(data.id);
        $("input[name='adequacy']").val(data.adequacy);
        $("input[name='mgtreviewId']").val(data.mgtreviewId);
        $("input[name='auditres']").val(data.auditres);
        $("input[name='conformity']").val(data.conformity);
        $("input[name='effectiveness']").val(data.effectiveness);
        $("input[name='externalprovider']").val(data.externalprovider);
        $("input[name='meetingatt']").val(data.meetingatt);
        $("input[name='monitoringres']").val(data.monitoringres);
        $("input[name='newquality']").val(data.newquality);
        $("input[name='nonconformities']").val(data.nonconformities);
        $("input[name='prevmeeting']").val(data.prevmeeting);
        $("input[name='prevobjectv']").val(data.prevobjectv);
        $("input[name='recommendedchange']").val(data.recommendedchange);
        $("input[name='reviewdate']").val(data.reviewdate);
        $("input[name='sammarisecustomr']").val(data.sammarisecustomr);
        $("#editSupplier").modal('show');
    }

    function deleteData(data) {
        $("#validid").val(data.id);
        $("#deleteRequirment").modal('show');

    }

    function displaydetail(data) {
        $("input[name='1adequacy']").val(data.adequacy);
        $("input[name='1mgtreviewId']").val(data.mgtreviewId);
        $("input[name='1auditres']").val(data.auditres);
        $("input[name='1conformity']").val(data.conformity);
        $("input[name='1effectiveness']").val(data.effectiveness);
        $("input[name='1externalprovider']").val(data.externalprovider);
        $("input[name='1meetingatt']").val(data.meetingatt);
        $("input[name='1monitoringres']").val(data.monitoringres);
        $("input[name='1newquality']").val(data.newquality);
        $("input[name='1nonconformities']").val(data.nonconformities);
        $("input[name='1prevmeeting']").val(data.prevmeeting);
        $("input[name='1prevobjectv']").val(data.prevobjectv);
        $("input[name='1recommendedchange']").val(data.recommendedchange);
        $("input[name='1reviewdate']").val(data.reviewdate);
        $("input[name='1sammarisecustomr']").val(data.sammarisecustomr);
        console.log("modal here");
        if(data.attach_file){
			$('.file_attachemnt_div').empty().append(`<a target="_blank" href="${data.attach_file}">Click to View</a>`);
		}else{
			$('.file_attachemnt_div').empty().append('No data found');
		}
        $("#DetailModal").modal('show');
    }

    function mngmnt_reviews() {

        if ($(".managemnet_review_from_div").css("display") === "block") {
            $(".managemnet_review_from_div").css("display", "none");
        } else {
            $(".managemnet_review_from_div").css("display", "block");
        }
    }
</script>
