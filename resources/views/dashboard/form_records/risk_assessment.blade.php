@extends('dashboard.layouts.app')

@section('content')
    <!-- begin:: Content -->
    <style>
        .risk_assessment_from_div .row:nth-child(even) {
            background: #FFF !important;
            padding: 5px;
        }
    </style>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!--Begin::Dashboard 1-->
        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-right">
                <h2>تقييم المخاطر</h2>
            </div>
        </div>
        <section id="procedure_section">
            <div class="row text-right">
                <div class="col-lg-12">
                    <h5>النطاق:</h5>
                    <p>يوضح هذا الإجراء تفاصيل السيناريوهات المحتملة لإمكانية الموافقة على أحد العقود، ويقارنها مع مخاطر
                        وعواقب ما يحدث من مشكلات.</p>
                    <div class="procedure_div">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a onclick="riskAssessment()" class="addBtn">إضافة تقييم للمخاطر</a>
                            </div>
                        </div>
                        <div class="risk_assessment_from_div">
                            <form action="{{ route('assessment') }} " method="POST" class="addForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>رقم الوظيفة:</label><br>
                                            <input type="text" min="1" class="form-control validate_number"
                                                name="jobNumber" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>التاريخ (شهر/يوم/سنة):</label><br>
                                            <input type="date" max="2999-12-31" class="form-control" name="date"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>هل يمكنني تلبية متطلبات معايير الجودة؟</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="qualitySatandard" value="Yes" required>
                                                    نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="qualitySatandard" value="No"> لا
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="qualitySatandard" value="NA"> لا ينطبق
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تعليقات:</label>
                                            <input type="text" class="form-control" placeholder="أدخل التعليق"
                                                name="commentsstandard">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> هل يمكنني الالتزام بموعد التسليم؟</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="delevryStandard" value="yes" required>
                                                    نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="delevryStandard" value="no"> لا
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="delevryStandard" value="NA"> لا ينطبق
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تعليقات:</label>
                                            <input type="text" class="form-control" placeholder="أدخل التعليق"
                                                name="commentsdelvery">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>هل يمكنني تلبية متطلبات السعر؟</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="priceRequiremnt" value="yes" required>
                                                    نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="priceRequiremnt" value="No"> لا
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="priceRequiremnt" value="NA"> لا ينطبق
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تعليقات:</label>
                                            <input type="text" class="form-control" placeholder="أدخل التعليق"
                                                name="commentprice">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>هل يمكن اعتبار الأطراف المعنية متأثرة؟</label>
                                            <div class="kt-radio-inline">
                                                <label class="kt-radio">
                                                    <input type="radio" name="interestedDeemed" value="Yes"
                                                        required> نعم
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="interestedDeemed" value="No"> لا
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="interestedDeemed" value="NA"> لا
                                                    ينطبق
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>تعليقات:</label>
                                            <input type="text" class="form-control" placeholder="أدخل التعليق"
                                                name="commentsDeemed">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>التعليق على القرار:</label>
                                            <input type="text" class="form-control" placeholder="أدخل التعليق"
                                                name="DecisionComment" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>موعد التسليم (شهر/يوم/سنة):</label>
                                            <input type="date" max="2999-12-31" class="form-control"
                                                placeholder="Enter Comment" name="dateDevelry" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>احتمالية المخاطرة (انظر التعليمات) – 4 = محتمل جدًا، 3 = محتمل، 2 = غير
                                                متوقع، 1 = غير متوقع نهائيًا:</label>
                                            <!--<input type="number" class="form-control" name="RiskProbability">-->
                                            <select name="RiskProbability" id="RiskProbability" class="form-control"
                                                required>
                                                <option value="">حدد واحدًا</option>

                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>شدة المخاطر (انظر التعليمات) – 4 = كارثيّة، 3 = خطيرة، 2 = هامشية، 1 = لا
                                                تُذكر:</label>
                                            <!--<input type="number" class="form-control" name="riskSeverity">-->

                                            <select name="riskSeverity" id="riskSeverity" class="form-control" required>
                                                <option value="">حدد واحدًا</option>

                                                <option value="4">4</option>
                                                <option value="3">3</option>
                                                <option value="2">2</option>
                                                <option value="1">1</option>

                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="submitBtn">يُقدِّم</button>
                                <button onclick="riskAssessment()" type="reset" class="submitBtn" data-dismiss="modal"
                                    style="margin-right:7px;">يلغي</button>
                            </form>
                        </div>
                    </div>

                    <div class="procedure_div">
                        <div class="requirments_table_div">
                            <h4>إجمالي تقييمات المخاطر المدرجة</h4>
                            <div class="kt-portlet__body table-responsive">
                                <!--begin: Datatable -->
                                <table
                                    class="common_table table table-striped- table-bordered table-hover table-checkable table-responsive"
                                    id="kt_table_agent">
                                    <thead>
                                        <tr>
                                            <th>رقم معرف المخاطرة</th>
                                            <th>رقم الوظيفة</th>
                                            <th>تاريخ الطلب</th>
                                            <th> هل تمت الموافقة على الجودة؟</th>
                                            <th>هل تمت الموافقة على التسليم؟</th>
                                            <th>هل تمت الموافقة على السعر؟</th>
                                            <th>القرار بشأن المخاطرة</th>
                                            <th> الإجراء</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($assessment as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <!--<td>{{ $data->id }}</td>-->
                                                <td>{{ $data->jobNumber }}</td>

                                                <td>{{ date('d/m/Y', strtotime($data->date)) }}</td>
                                                <td>{{ ucfirst($data->qualitySatandard) }}</td>
                                                <td>{{ ucfirst($data->delevryStandard) }}</td>
                                                <td>{{ ucfirst($data->priceRequiremnt) }}</td>
                                                <td>{{ ucfirst($data->DecisionComment) }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                        data-toggle="modal" data-target="#viewData-{{ $data->id }}"
                                                        id="viewData_{{ $data->id }}" title="View" type="button">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                    <!--EDIT MODAL-->
                                                    <div class="modal fade text-right" id="viewData-{{ $data->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel2">عرض
                                                                        تقييمات المخاطر</h5>
                                                                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
																	</a>
                                                                </div>
                                                                <form>

                                                                    <div class="modal-body ">
                                                                        {{-- print_r($data) - --}}
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>رقم الوظيفة:</label><br>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        name="jobNumber"
                                                                                        value="{{ $data->jobNumber }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>التاريخ
                                                                                        (شهر/يوم/سنة):</label><br>
                                                                                    <input disabled type="date"
                                                                                        max="2999-12-31"
                                                                                        class="form-control"
                                                                                        name="date"
                                                                                        value="{{ $data->date }}"
                                                                                        disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label> هل يمكنني تلبية متطلبات معايير
                                                                                        الجودة؟: </label>
                                                                                    <div class="kt-radio-inline">
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="qualitySatandard"
                                                                                                value="Yes"
                                                                                                {{ $data->qualitySatandard == 'Yes' ? 'checked' : '' }}>
                                                                                            نعم
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="qualitySatandard"
                                                                                                value="No"
                                                                                                {{ $data->qualitySatandard == 'No' ? 'checked' : '' }}>
                                                                                            لا
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="qualitySatandard"
                                                                                                value="NA"
                                                                                                {{ $data->qualitySatandard == 'NA' ? 'checked' : '' }}>
                                                                                            لا ينطبق
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>تعليقات:</label>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Enter Comment"
                                                                                        name="commentsstandard"
                                                                                        value="{{ $data->commentsstandard }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label> هل يمكنني الالتزام بموعد
                                                                                        التسليم؟</label>
                                                                                    <div class="kt-radio-inline">
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="delevryStandard"
                                                                                                value="yes"
                                                                                                {{ $data->delevryStandard == 'yes' ? 'checked' : '' }}>
                                                                                            نعم
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="delevryStandard"
                                                                                                value="no"
                                                                                                {{ $data->delevryStandard == 'no' ? 'checked' : '' }}>
                                                                                            لا
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="delevryStandard"
                                                                                                value="NA"
                                                                                                {{ $data->delevryStandard == 'NA' ? 'checked' : '' }}>
                                                                                            لا ينطبق
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>تعليقات:</label>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Enter Comment"
                                                                                        name="commentsdelvery"
                                                                                        value="{{ $data->commentsdelvery }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>هل يمكنني تلبية متطلبات السعر؟
                                                                                        ({{ $data->priceRequiremnt }})</label>
                                                                                    <div class="kt-radio-inline">
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="priceRequiremnt"
                                                                                                value="yes"
                                                                                                {{ $data->priceRequiremnt == 'yes' ? 'checked' : '' }}>
                                                                                            نعم
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="priceRequiremnt"
                                                                                                value="No"
                                                                                                {{ $data->priceRequiremnt == 'No' ? 'checked' : '' }}>
                                                                                            لا
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="priceRequiremnt"
                                                                                                value="NA"
                                                                                                {{ $data->priceRequiremnt == 'NA' ? 'checked' : '' }}>
                                                                                            لا ينطبق
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>تعليقات:</label>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="أدخل التعليق"
                                                                                        name="commentprice"
                                                                                        value="{{ $data->commentprice }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>هل يمكن اعتبار الأطراف المعنية
                                                                                        متأثرة؟</label>
                                                                                    <div class="kt-radio-inline">
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="interestedDeemed"
                                                                                                value="Yes"
                                                                                                {{ $data->interestedDeemed == 'Yes' ? 'checked' : '' }}>
                                                                                            نعم
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="interestedDeemed"
                                                                                                value="No"
                                                                                                {{ $data->interestedDeemed == 'No' ? 'checked' : '' }}>
                                                                                            لا
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <label class="kt-radio">
                                                                                            <input disabled type="radio"
                                                                                                name="interestedDeemed"
                                                                                                value="NA"
                                                                                                {{ $data->interestedDeemed == 'NA' ? 'checked' : '' }}>
                                                                                            لا ينطبق
                                                                                            <span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>تعليقات:</label>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="أدخل التعليق"
                                                                                        name="commentsDeemed"
                                                                                        value="{{ $data->commentsDeemed }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>التعليق على القرار:</label>
                                                                                    <input disabled type="text"
                                                                                        class="form-control"
                                                                                        placeholder="أدخل التعليق"
                                                                                        name="DecisionComment"
                                                                                        value="{{ $data->DecisionComment }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>موعد التسليم
                                                                                        (شهر/يوم/سنة):</label>
                                                                                    <input disabled type="date"
                                                                                        max="2999-12-31"
                                                                                        class="form-control"
                                                                                        placeholder="أدخل التعليق"
                                                                                        name="dateDevelry"
                                                                                        value="{{ $data->dateDevelry }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>احتمالية المخاطرة (انظر
                                                                                        التعليمات) – 4 = محتمل جدًا، 3 =
                                                                                        محتمل، 2 = غير متوقع، 1 = غير متوقع
                                                                                        نهائيًا:</label>
                                                                                    <!--<input disabled type="number" class="form-control" name="RiskProbability">-->
                                                                                    <select name="RiskProbability"
                                                                                        id="RiskProbability"
                                                                                        class="form-control" disabled>
                                                                                        <option value="">حدد واحدًا
                                                                                        </option>

                                                                                        <option value="4"
                                                                                            {{ $data->RiskProbability == '4' ? 'selected="selected"' : '' }}>
                                                                                            4</option>
                                                                                        <option value="3"
                                                                                            {{ $data->RiskProbability == '3' ? 'selected="selected"' : '' }}>
                                                                                            3</option>
                                                                                        <option value="2"
                                                                                            {{ $data->RiskProbability == '2' ? 'selected="selected"' : '' }}>
                                                                                            2</option>
                                                                                        <option value="1"
                                                                                            {{ $data->RiskProbability == '1' ? 'selected="selected"' : '' }}>
                                                                                            1</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label>شدة المخاطر (انظر التعليمات) – 4
                                                                                        = كارثيّة، 3 = خطيرة، 2 = هامشية، 1
                                                                                        = لا تُذكر:</label>
                                                                                    <!--<input disabled type="number" class="form-control" name="riskSeverity">-->

                                                                                    <select name="riskSeverity"
                                                                                        id="riskSeverity"
                                                                                        class="form-control" disabled>
                                                                                        <option value="">حدد واحدًا
                                                                                        </option>

                                                                                        <option value="4"
                                                                                            {{ $data->riskSeverity == '4' ? 'selected="selected"' : '' }}>
                                                                                            4</option>
                                                                                        <option value="3"
                                                                                            {{ $data->riskSeverity == '3' ? 'selected="selected"' : '' }}>
                                                                                            3</option>
                                                                                        <option value="2"
                                                                                            {{ $data->riskSeverity == '2' ? 'selected="selected"' : '' }}>
                                                                                            2</option>
                                                                                        <option value="1"
                                                                                            {{ $data->riskSeverity == '1' ? 'selected="selected"' : '' }}>
                                                                                            1</option>

                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">يغلق</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--EDIT MODAL ENDS-->
                                                    <button class="btn btn-sm btn-clean btn-icon btn-icon-md"
                                                        type="button" onclick="EditData({{ $data }});"
                                                        title="Edit">
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
                                                        data-target="#confirm-{{ $data->id }}"
                                                        id="remove_{{ $data->id }}" title="Delete"
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
                                                        id="confirm-{{ $data->id }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="confirm" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <form action="{{ route('delete_assesment') }}"
                                                                    method="post">
                                                                    <div class="modal-header"> @csrf
                                                                        <div class="modal-profile"> حذف إدخال </div>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        <p>هل أنت متأكد أنك تريد حذف هذا الإدخال؟</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $data->id }}">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">لا</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">نعم</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>

                                            </tr>
                                            @php $i++  @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>


        </section>

        <!--End::Section-->
    </div>


    <div class="modal fade text-right" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تحرير تقييمات المخاطر</h5>
                    <a data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i>
					</a>
                </div>
                <form action="{{ route('editassessment') }} " method="POST">
                    @csrf

                    <div class="modal-body ">
                        <input type="hidden" name="id" value="" id="id_feild">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>رقم الوظيفة:</label><br>
                                    <input type="text" min="1" class="form-control validate_number"
                                        name="jobNumber">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التاريخ (شهر/يوم/سنة):</label><br>
                                    <input type="date" max="2999-12-31" class="form-control" name="date" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>هل يمكنني تلبية متطلبات معايير الجودة؟</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="qualitySatandard" value="Yes" required> نعم
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="qualitySatandard" value="No"> لا
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="qualitySatandard" value="NA"> لا ينطبق
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تعليقات:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التعليق"
                                        name="commentsstandard">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>هل يمكنني الالتزام بموعد التسليم؟</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="delevryStandard" value="yes" required> نعم
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="delevryStandard" value="no"> لا
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="delevryStandard" value="NA"> لا ينطبق
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تعليقات:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التعليق"
                                        name="commentsdelvery">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>هل يمكنني تلبية متطلبات السعر؟</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="priceRequiremnt" value="yes" required> نعم
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="priceRequiremnt" value="No"> لا
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="priceRequiremnt" value="NA"> لا ينطبق
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تعليقات:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التعليق"
                                        name="commentprice">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> هل يمكن اعتبار الأطراف المعنية متأثرة؟</label>
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio" name="interestedDeemed" value="Yes" required> نعم
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="interestedDeemed" value="No"> لا
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="interestedDeemed" value="NA"> لا ينطبق
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>تعليقات:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التعليق"
                                        name="commentsDeemed">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>التعليق على القرار:</label>
                                    <input type="text" class="form-control" placeholder="أدخل التعليق"
                                        name="DecisionComment" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>موعد التسليم (شهر/يوم/سنة):</label>
                                    <input type="date" max="2999-12-31" class="form-control"
                                        placeholder="أدخل التعليق" name="dateDevelry" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>احتمالية المخاطرة (انظر التعليمات) – 4 = محتمل جدًا، 3 = محتمل، 2 = غير متوقع، 1
                                        = غير متوقع نهائيًاP:</label>
                                    <!--<input type="number" class="form-control" name="RiskProbability">-->
                                    <select name="RiskProbability" id="RiskProbability" class="form-control" required>
                                        <option value="">حدد واحدًا</option>

                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>شدة المخاطر (انظر التعليمات) – 4 = كارثيّة، 3 = خطيرة، 2 = هامشية، 1 = لا
                                        تُذكر:</label>
                                    <!--<input type="number" class="form-control" name="riskSeverity">-->

                                    <select name="riskSeverity" id="riskSeverity" class="form-control" required>
                                        <option value="">حدد واحدًا</option>

                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>

                                    </select>

                                </div>
                            </div>



                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="margin-right:20px;">يلغي</button>
                        <button type="submit" class="btn btn-primary mx-2">تحديث</button>
                    </div>
            </div>
        </div>
    </div>


    {{--
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">View Risk Assessments</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
            </div>
            <form>

			<div class="modal-body ">
                <input disabled type="hidden" name="id"  value="" id="id_feild">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Job Number:</label><br>
								<input disabled type="text" class="form-control" name="jobNumber">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Date (MM/DD/YYY):</label><br>
								<input disabled type="date" max="2999-12-31" class="form-control" name="date">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Can I meet the quality standard?:</label>
									<div class="kt-radio-inline">
										<label class="kt-radio">
											<input disabled type="radio" name="qualitySatandard" value="Yes" required> Yes
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="qualitySatandard" value="No" required> No
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="qualitySatandard" value="NA" required> NA
											<span></span>
										</label>
									</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Comments:</label>
								<input disabled type="text" class="form-control"  placeholder="Enter Comment" name="commentsstandard">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Can I meet the delivery date?:</label>
									<div class="kt-radio-inline">
										<label class="kt-radio">
											<input disabled type="radio" name="delevryStandard" value="yes" required> Yes
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="delevryStandard" value="no" required> No
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="delevryStandard" value="NA" required> NA
											<span></span>
										</label>
									</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Comments:</label>
								<input disabled type="text" class="form-control"  placeholder="Enter Comment" name="commentsdelvery">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Can I meet the price?:</label>
									<div class="kt-radio-inline">
										<label class="kt-radio">
											<input disabled type="radio" name="priceRequiremnt" value="yes" required> Yes
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="priceRequiremnt" value="No" required> No
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="priceRequiremnt" value="NA" required> NA
											<span></span>
										</label>
									</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Comments:</label>
								<input disabled type="text" class="form-control"  placeholder="Enter Comment" name="commentprice">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Could interested parties be deemed affected?:</label>
									<div class="kt-radio-inline">
										<label class="kt-radio">
											<input disabled type="radio" name="interestedDeemed" value="Yes" required> Yes
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="interestedDeemed" value="No" required> No
											<span></span>
										</label>
										<label class="kt-radio">
											<input disabled type="radio" name="interestedDeemed" value="NA" required> NA
											<span></span>
										</label>
									</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Comments:</label>
								<input disabled type="text" class="form-control"  placeholder="Enter Comment" name="commentsDeemed">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Decision Comment:</label>
								<input disabled type="text" class="form-control"  placeholder="Enter Comment" name="DecisionComment">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Delivery Date (MM/DD/YYY):</label>
								<input disabled type="date" max="2999-12-31" class="form-control"  placeholder="Enter Comment" name="dateDevelry">
							</div>
						</div>
					</div>

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Risk Probability (see instructions) - 4 = Very likely, 3 = Likely, 2 = Not likely, 1 = Very unlikely:</label>
											<!--<input disabled type="number" class="form-control" name="RiskProbability">-->
											<select name="RiskProbability" id="RiskProbability" class="form-control" disabled>
											    <option value="">Select One</option>
											    
											    <option value="4">4</option>
											    <option value="3">3</option>
											    <option value="2">2</option>
											    <option value="1">1</option>
											    
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Risk Severity (see instructions) - 4 = Catastrophic, 3 = Critical, 2 = Marginal, 1 = Negligible:</label>
											<!--<input disabled type="number" class="form-control" name="riskSeverity">-->
											
											<select name="riskSeverity" id="riskSeverity" class="form-control" disabled>
											    <option value="">Select One</option>
											    
											    <option value="4">4</option>
											    <option value="3">3</option>
											    <option value="2">2</option>
											    <option value="1">1</option>
											    
											</select>
											
										</div>
									</div>
								</div>
            </div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
		</div>
	</div>
</div>
- --}}
@endsection
<style>
    .risk_assessment_from_div .row:nth-child(even) {
        background: #fff;
        padding: 5px;
    }
</style>
<script>
    function EditData(data) {
        console.log(data);

        $("#id_feild").val(data.id);
        $("input[name='DecisionComment']").val(data.DecisionComment);
        $("input[name='RiskProbability']").val(data.RiskProbability);
        $("input[name='commentprice']").val(data.commentprice);
        $("input[name='commentsDeemed']").val(data.commentsDeemed);
        $("input[name='commentsdelvery']").val(data.commentsdelvery);
        $("input[name='commentsstandard']").val(data.commentsstandard);
        $("input[name='date']").val(data.date);
        $("input[name='dateDevelry']").val(data.dateDevelry);
        $("input[name='jobNumber']").val(data.jobNumber);

        $("input[name='delevryStandard'][value=" + data.delevryStandard + "]").prop('checked', true);
        $("input[name='interestedDeemed'][value=" + data.interestedDeemed + "]").prop('checked', true);
        $("input[name='priceRequiremnt'][value=" + data.priceRequiremnt + "]").prop('checked', true);
        $("input[name='qualitySatandard'][value=" + data.qualitySatandard + "]").prop('checked', true);

        $("select[name='RiskProbability']").val(data.RiskProbability);
        $("select[name='riskSeverity']").val(data.riskSeverity);

        $("#editModal").modal('show');
        resetForm();

    }
    {{-- -    function viewData(data){
        // console.log(data);

        $("#id_feild").val(data.id);
         $("input[name='DecisionComment']").val(data.DecisionComment);
         $("input[name='RiskProbability']").val(data.RiskProbability);
         $("input[name='commentprice']").val(data.commentprice);
         $("input[name='commentsDeemed']").val(data.commentsDeemed);
         $("input[name='commentsdelvery']").val(data.commentsdelvery);
         $("input[name='commentsstandard']").val(data.commentsstandard);
         $("input[name='date']").val(data.date);
         $("input[name='dateDevelry']").val(data.dateDevelry);
         $("input[name='jobNumber']").val(data.jobNumber);

         $("input[name='delevryStandard'][value="+data.delevryStandard+"]").prop('checked',true);
         $("input[name='interestedDeemed'][value="+data.interestedDeemed+"]").prop('checked',true);
         $("input[name='priceRequiremnt'][value="+data.priceRequiremnt+"]").prop('checked',true);
         $("input[name='qualitySatandard'][value="+data.qualitySatandard+"]").prop('checked',true);

         $("select[name='RiskProbability']").val(data.RiskProbability);
         $("select[name='riskSeverity']").val(data.riskSeverity);

        $("#viewModal").modal('show');

    }
    --- --}}
</script>
