@extends('admin.dashboard.layouts.app')

@section('content')
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

	<!--Begin::Dashboard 1-->


	<!--Begin::Section-->
	<div class="row">
		<div class="col-xl-12 col-lg-12">
			<h2>QMS Audits</h2>
		</div>
	</div>
	<section id="procedure_section">

		<div class="row">
			<div class="col-lg-12">
			<p>This audit is a horizontal audit against each clause in the standard. The frequency of this audit will typically be annually and is used to determine the level of compliance to your ISO Standard.</p>
					<p>To add a record, click on the “Add QMS Audit Details” button. To amend a record, click on the edit icon of the entry that needs to be modified. Audits will be conducted in accordance with <a href="{{url('auidt')}}">Audits</a></p>

                  
                    <div class="procedure_div">
                    	<div class="requirments_table_div">
                    		<h4>Total Audits Listed</h4>
                    		<div class="kt-portlet__body">
								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_agent">
									<thead>
										<tr>
											<th>QMS Audit ID</th>
											<th>Audit Date</th>
											<th>Detail View</th>
										</tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($auditreport as $item)
                                        <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                            <td>
                                                {{$item->competedDate}}

                                            </td>
                                            <td>
                                                <button  class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Info"
                                                    onclick="getEid({{json_encode($item)}});">								<i class="fa fa-eye"></i>
                                                    </button>
												{{-- <button  class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"
                                                    onclick="geteditdetails({{json_encode($item)}});">								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">											<rect x="0" y="0" width="24" height="24"></rect>											<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#5d78ff" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>											<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#5d78ff" fill-rule="nonzero" opacity="0.3"></path>										</g>									</svg>
													</button> --}}
													<button  class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit"
                                                    onclick="deleteqmsAudit({{json_encode($item)}});">					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">											<rect x="0" y="0" width="24" height="24"></rect>											<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#5d78ff" fill-rule="nonzero"></path>											<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#5d78ff" opacity="0.3"></path>										</g>									</svg>
                                                    </button>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
								</table>
								<!--end: Datatable -->
                    	</div>
                    </div>
			</div>
		</div>
	</section>

	<!--End::Section-->
</div>
<div class="modal fade" id="deleteRequirment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Deleting Process</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<p>Are you sure?Do you really want to delete this?.</p>
			</div>
			<div class="modal-footer">
			<form action="{{route('auditdeleter')}}" method="POST">
				@csrf
			<input type="hidden" id="re_id" value="" name="id">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				<button type="submit" class="btn btn-danger">Yes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editProcessAudit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit QMS Audit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
                <form>
                    @csrf
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>QMS Audit ID Number (See table below. For amendments only):</label>
                                <input type="number" name="QmsauditNumber" class="form-control"  placeholder="Enter QMS Audit ID:">
                            </div>
                        </div>
                    </div> --}}
                   <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.1 Understanding the organization and its context. Is this correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes"  name="qmsCorects"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No"  name="qmsCorects"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="qmsCorects"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.2 Understanding the needs and expectations of interested parties. Is this still correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="needExpactations"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="needExpactations"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="needExpactations"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance2" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.3 Determining the scope of the quality management system. Is this still correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction3"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction3"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction3"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence3"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.4 Quality management system and its processes. Are processes owned, relevant and show interaction?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction4"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction4"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction4"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance4"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.1 Leadership and commitment. Is top level management accountable for the quality system and is it customer focused?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction5"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction5"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction5"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence5" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.2 Policy. Is the quality policy established and accurate, reviewed and communicated?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction6"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction6"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction6"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidance7" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.3 Organizational roles, responsibilities and authorities. Are these assigned and communicated?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction7"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction7"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction7"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidance7" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.1 Actions to address risks and opportunities. Are risks and opportunities managed, understood and reviewed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction8"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction8"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction8"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance8" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.2 Quality objectives and planning to achieve them. Are objectives set at Management Review and monitored?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction9"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction9"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction9"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance10" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.3 Planning of changes. Have any changes occurred been planned to meet section 6.3 of the standard?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction11"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction11"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction11"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance12"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.1 Resources. Are satisfactory resources in place? Consider people, infrastructure, environment for the operation of processes, monitoring and measuring resources and organizational knowledge.</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction12"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction12"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction12"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence13" class="form-control"  placeholder="أدخل الأدلة:">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.2 Competence. Are the training records current?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction13"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction13"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction13"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance14"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.3 Awareness. Does employee awareness meet section 7.3 of the standard?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction14"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction14"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction14"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence17">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.4 Communication. Does communication meet section 7.4 of the standard?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction15"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction15"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction15"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence15"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.5 Documented information. Are all documents pertaining to the quality system controlled?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction16"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction16"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction16"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence17">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.1 Operational planning and control. Is the controlling system current and effective?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correciton17"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correciton17"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correciton17"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence18"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.2 Requirements for products and services. Is customer communication effective and has the requirements for products and services been defined, reviewed and documented?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction18"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction18"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction18"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence19">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.3 Design and development of products and services. Are the requirements of this standard met?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction19"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction19"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction19"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence20" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.4 Control of externally provided processes, products and services. Are externally provided processes, products and services controlled?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction20"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction20"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction20"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence21"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.5 Production and service provision. Is production and service provision controlled, including post delivery activities?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction21"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction21"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction21"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة::" name="evidence22">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.6 Release of products and services. Are products and services completed before release to the customer?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction22"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction22"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction22"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  name="evidence23" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.7 Control of nonconforming outputs. Are records kept and up to date?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction23"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction23"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction23"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence24" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.1 Monitoring, measurement, analysis and evaluation. Is monitoring, measurement, analysis and evaluation performed and documented?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction24"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction24"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction24"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence25"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.1.2 Customer satisfaction. Have customer satisfaction surveys been completed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction25"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction25"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction25"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence26"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.2 Internal audit. Are internal audits planned and completed</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction26"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction26"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction26"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence27" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.3 Management review. Has the management review been planned and completed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction27"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction27"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction27"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence28" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
							{{--	<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>10.1 Improvement - Has the organization determined and selected opportunities for improvement and implemented any necessary actions to meet customer requirements and enhance customer satisfaction?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 1
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 2
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 3
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence29" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>10.3 Continual improvement - Is there evidence that the company has continually improved?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 1
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 2
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 3
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence30" placeholder="أدخل الأدلة::">
										</div>
									</div>
							</div> --}}
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Audit Comments and Actions:</label>
											<input type="text" class="form-control" name="evidence31"  placeholder="Enter Comment:">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Date Completed (YYYY/MM/DD):</label>
											<input type="date" name="competedDate" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Auditor Name:</label>
											<input type="text" class="form-control" name="auditrName"  placeholder="Enter Auditor Name:">
										</div>
									</div>
								</div>
                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="geteditdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit QMS Audit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			  <form action="{{route('update_qmsaudit')}}" method="post">
                    @csrf
			<div class="modal-body">

                 <input type="hidden" value="" id="test_a" name="id" />
                   <div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.1 Understanding the organization and its context. Is this correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes"  name="qmsCorects"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No"  name="qmsCorects"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="qmsCorects"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.2 Understanding the needs and expectations of interested parties. Is this still correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="needExpactations"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="needExpactations"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="needExpactations"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance2" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.3 Determining the scope of the quality management system. Is this still correct?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction3"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction3"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction3"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence3"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>4.4 Quality management system and its processes. Are processes owned, relevant and show interaction?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction4"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction4"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction4"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance4"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.1 Leadership and commitment. Is top level management accountable for the quality system and is it customer focused?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction5"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction5"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction5"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence5" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.2 Policy. Is the quality policy established and accurate, reviewed and communicated?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction6"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction6"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction6"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidance7" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>5.3 Organizational roles, responsibilities and authorities. Are these assigned and communicated?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction7"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction7"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction7"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidance7" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.1 Actions to address risks and opportunities. Are risks and opportunities managed, understood and reviewed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction8"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction8"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction8"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance8" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.2 Quality objectives and planning to achieve them. Are objectives set at Management Review and monitored?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction9"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction9"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction9"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance10" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>6.3 Planning of changes. Have any changes occurred been planned to meet section 6.3 of the standard?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction11"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction11"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction11"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance12"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.1 Resources. Are satisfactory resources in place? Consider people, infrastructure, environment for the operation of processes, monitoring and measuring resources and organizational knowledge.</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction12"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction12"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction12"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence13" class="form-control"  placeholder="أدخل الأدلة:">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.2 Competence. Are the training records current?</label>
													<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction13"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction13"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction13"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidance14"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.3 Awareness. Does employee awareness meet section 7.3 of the standard?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction14"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction14"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction14"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence17">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.4 Communication. Does communication meet section 7.4 of the standard?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction15"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction15"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction15"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence15"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>7.5 Documented information. Are all documents pertaining to the quality system controlled?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction16"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction16"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction16"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence17">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.1 Operational planning and control. Is the controlling system current and effective?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correciton17"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correciton17"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correciton17"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence18"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.2 Requirements for products and services. Is customer communication effective and has the requirements for products and services been defined, reviewed and documented?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction18"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction18"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction18"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة:" name="evidence19">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.3 Design and development of products and services. Are the requirements of this standard met?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction19"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction19"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction19"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence20" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.4 Control of externally provided processes, products and services. Are externally provided processes, products and services controlled?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction20"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction20"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction20"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence21"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.5 Production and service provision. Is production and service provision controlled, including post delivery activities?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction21"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction21"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction21"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  placeholder="أدخل الأدلة::" name="evidence22">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.6 Release of products and services. Are products and services completed before release to the customer?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction22"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction22"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction22"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control"  name="evidence23" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>8.7 Control of nonconforming outputs. Are records kept and up to date?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction23"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction23"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction23"> NA
														<span></span>
													</label>
												</div>


										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence24" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.1 Monitoring, measurement, analysis and evaluation. Is monitoring, measurement, analysis and evaluation performed and documented?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction24"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction24"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction24"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence25"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.1.2 Customer satisfaction. Have customer satisfaction surveys been completed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction25"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction25"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction25"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence26"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.2 Internal audit. Are internal audits planned and completed</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction26"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction26"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction26"> NA
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence27" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>9.3 Management review. Has the management review been planned and completed?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" value="Yes" name="correction27"> Yes
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="No" name="correction27"> No
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" value="NA" name="correction27"> NA
														<span></span>
													</label>
												</div>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence28" placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
							{{--	<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>10.1 Improvement - Has the organization determined and selected opportunities for improvement and implemented any necessary actions to meet customer requirements and enhance customer satisfaction?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 1
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 2
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction28"> Option 3
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" name="evidence29" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>10.3 Continual improvement - Is there evidence that the company has continually improved?</label>
												<div class="kt-radio-list">
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 1
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 2
														<span></span>
													</label>
													<label class="kt-radio">
														<input type="radio" name="correction29"> Option 3
														<span></span>
													</label>
												</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Evidence:</label>
											<input type="text" class="form-control" name="evidence30" placeholder="أدخل الأدلة::">
										</div>
									</div>
							</div> --}}
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Audit Comments and Actions:</label>
											<input type="text" class="form-control" name="evidence31"  placeholder="Enter Comment:">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Date Completed (YYYY/MM/DD):</label>
											<input type="date" name="competedDate" class="form-control"  placeholder="أدخل الأدلة::">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Auditor Name:</label>
											<input type="text" class="form-control" name="auditrName"  placeholder="Enter Auditor Name:">
										</div>
									</div>
								</div>

			</div>
			<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Update</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

			</div>
			 </form>
		</div>
	</div>
</div>
@endsection

<script>
    function getEid(data){
            console.log(data);
         $("#id_feild").val(data.id);
         $("input[name='auditrName']").val(data.auditrName);
         $("input[name='competedDate']").val(data.competedDate);
         $("input[name='completion_date']").val(data.completion_date);
         $("input[name='evidance2']").val(data.evidance2);
         $("input[name='evidance4']").val(data.evidance4);
         $("input[name='evidance5']").val(data.evidance5);
         $("input[name='evidance6']").val(data.evidance6);
         $("input[name='evidance7']").val(data.evidance7);
         $("input[name='evidance8']").val(data.evidance8);
         $("input[name='evidance10']").val(data.evidance10);
         $("input[name='evidance12']").val(data.evidance12);
         $("input[name='evidance14']").val(data.evidance14);
         $("input[name='evidance']").val(data.evidance);
         $("input[name='evidance3']").val(data.evidance3);
         $("input[name='evidance13']").val(data.evidance13);
         $("input[name='evidance5']").val(data.evidance5);
         $("input[name='evidance17']").val(data.evidance17);
         $("input[name='evidance18']").val(data.evidance18);
         $("input[name='evidance19']").val(data.evidance19);
         $("input[name='evidance20']").val(data.evidance20);
         $("input[name='evidance21']").val(data.evidance21);
         $("input[name='evidance22']").val(data.evidance22);
         $("input[name='evidance23']").val(data.evidance23);
         $("input[name='evidance24']").val(data.evidance24);
         $("input[name='evidance25']").val(data.evidance25);
         $("input[name='evidance26']").val(data.evidance26);
         $("input[name='evidance27']").val(data.evidance27);
         $("input[name='evidance28']").val(data.evidance28);
         $("input[name='evidance29']").val(data.evidance29);
         $("input[name='evidance30']").val(data.evidance30);
         $("input[name='evidence3']").val(data.evidence3);
         $("input[name='evidence']").val(data.evidence);
         $("input[name='evidence5']").val(data.evidence5);
         $("input[name='evidence13']").val(data.evidence13);
         $("input[name='evidence15']").val(data.evidence15);
         $("input[name='evidence17']").val(data.evidence17);
         $("input[name='evidence18']").val(data.evidence18);
         $("input[name='evidence19']").val(data.evidence19);
         $("input[name='evidence20']").val(data.evidence20);
         $("input[name='evidence21']").val(data.evidence21);
         $("input[name='evidence22']").val(data.evidence22);
         $("input[name='evidence23']").val(data.evidence23);
         $("input[name='evidence24']").val(data.evidence24);
         $("input[name='evidence25']").val(data.evidence25);
         $("input[name='evidence26']").val(data.evidence26);
         $("input[name='evidence27']").val(data.evidence27);
         $("input[name='evidence28']").val(data.evidence28);
         $("input[name='evidence31']").val(data.evidence31);

         $("input[name='qmsCorects'][value="+data.qmsCorects+"]").prop('checked',true);
         $("input[name='needExpactations'][value="+data.needExpactations+"]").prop('checked',true);
         $("input[name='correction3'][value="+data.correction3+"]").prop('checked',true);
         $("input[name='correction5'][value="+data.correction5+"]").prop('checked',true);
         $("input[name='correction7'][value="+data.correction7+"]").prop('checked',true);
         $("input[name='correction4'][value="+data.correction4+"]").prop('checked',true);
         $("input[name='correction8'][value="+data.correction8+"]").prop('checked',true);
         $("input[name='correction6'][value="+data.correction6+"]").prop('checked',true);

         $("input[name='correction9'][value="+data.correction9+"]").prop('checked',true);
         $("input[name='correction10'][value="+data.correction10+"]").prop('checked',true);
         $("input[name='correction11'][value="+data.correction11+"]").prop('checked',true);
         $("input[name='correction12'][value="+data.correction12+"]").prop('checked',true);
         $("input[name='correction13'][value="+data.correction13+"]").prop('checked',true);
         $("input[name='correction14'][value="+data.correction14+"]").prop('checked',true);
         $("input[name='correction15'][value="+data.correction15+"]").prop('checked',true);
         $("input[name='correction16'][value="+data.correction16+"]").prop('checked',true);
         $("input[name='correction18'][value="+data.correction18+"]").prop('checked',true);
         $("input[name='correction17'][value="+data.correction17+"]").prop('checked',true);

         $("input[name='correction19'][value="+data.correction19+"]").prop('checked',true);
         $("input[name='correction20'][value="+data.correction20+"]").prop('checked',true);
         $("input[name='correction21'][value="+data.correction21+"]").prop('checked',true);
         $("input[name='correction22'][value="+data.correction22+"]").prop('checked',true);
         $("input[name='correction23'][value="+data.correction23+"]").prop('checked',true);
         $("input[name='correction24'][value="+data.correction24+"]").prop('checked',true);
         $("input[name='correction25'][value="+data.correction25+"]").prop('checked',true);
         $("input[name='correction26'][value="+data.correction26+"]").prop('checked',true);
         $("input[name='correction27'][value="+data.correction27+"]").prop('checked',true);
         $("input[name='correction28'][value="+data.correction28+"]").prop('checked',true);
         $("input[name='correction29'][value="+data.correction29+"]").prop('checked',true);

                $("#editProcessAudit").modal('show');
     }
	 function geteditdetails(data){
            console.log(data);
         $("#test_a").val(data.id);
         $("input[name='auditrName']").val(data.auditrName);
         $("input[name='competedDate']").val(data.competedDate);
         $("input[name='completion_date']").val(data.completion_date);
         $("input[name='evidance2']").val(data.evidance2);
         $("input[name='evidance4']").val(data.evidance4);
         $("input[name='evidance5']").val(data.evidance5);
         $("input[name='evidance6']").val(data.evidance6);
         $("input[name='evidance7']").val(data.evidance7);
         $("input[name='evidance8']").val(data.evidance8);
         $("input[name='evidance10']").val(data.evidance10);
         $("input[name='evidance12']").val(data.evidance12);
         $("input[name='evidance14']").val(data.evidance14);
         $("input[name='evidance']").val(data.evidance);
         $("input[name='evidance3']").val(data.evidance3);
         $("input[name='evidance13']").val(data.evidance13);
         $("input[name='evidance5']").val(data.evidance5);
         $("input[name='evidance17']").val(data.evidance17);
         $("input[name='evidance18']").val(data.evidance18);
         $("input[name='evidance19']").val(data.evidance19);
         $("input[name='evidance20']").val(data.evidance20);
         $("input[name='evidance21']").val(data.evidance21);
         $("input[name='evidance22']").val(data.evidance22);
         $("input[name='evidance23']").val(data.evidance23);
         $("input[name='evidance24']").val(data.evidance24);
         $("input[name='evidance25']").val(data.evidance25);
         $("input[name='evidance26']").val(data.evidance26);
         $("input[name='evidance27']").val(data.evidance27);
         $("input[name='evidance28']").val(data.evidance28);
         $("input[name='evidance29']").val(data.evidance29);
         $("input[name='evidance30']").val(data.evidance30);
         $("input[name='evidence3']").val(data.evidence3);
         $("input[name='evidence']").val(data.evidence);
         $("input[name='evidence5']").val(data.evidence5);
         $("input[name='evidence13']").val(data.evidence13);
         $("input[name='evidence15']").val(data.evidence15);
         $("input[name='evidence17']").val(data.evidence17);
         $("input[name='evidence18']").val(data.evidence18);
         $("input[name='evidence19']").val(data.evidence19);
         $("input[name='evidence20']").val(data.evidence20);
         $("input[name='evidence21']").val(data.evidence21);
         $("input[name='evidence22']").val(data.evidence22);
         $("input[name='evidence23']").val(data.evidence23);
         $("input[name='evidence24']").val(data.evidence24);
         $("input[name='evidence25']").val(data.evidence25);
         $("input[name='evidence26']").val(data.evidence26);
         $("input[name='evidence27']").val(data.evidence27);
         $("input[name='evidence28']").val(data.evidence28);
         $("input[name='evidence31']").val(data.evidence31);

         $("input[name='qmsCorects'][value="+data.qmsCorects+"]").prop('checked',true);
         $("input[name='needExpactations'][value="+data.needExpactations+"]").prop('checked',true);
         $("input[name='correction3'][value="+data.correction3+"]").prop('checked',true);
         $("input[name='correction5'][value="+data.correction5+"]").prop('checked',true);
         $("input[name='correction7'][value="+data.correction7+"]").prop('checked',true);
         $("input[name='correction4'][value="+data.correction4+"]").prop('checked',true);
         $("input[name='correction8'][value="+data.correction8+"]").prop('checked',true);
         $("input[name='correction6'][value="+data.correction6+"]").prop('checked',true);

         $("input[name='correction9'][value="+data.correction9+"]").prop('checked',true);
         $("input[name='correction10'][value="+data.correction10+"]").prop('checked',true);
         $("input[name='correction11'][value="+data.correction11+"]").prop('checked',true);
         $("input[name='correction12'][value="+data.correction12+"]").prop('checked',true);
         $("input[name='correction13'][value="+data.correction13+"]").prop('checked',true);
         $("input[name='correction14'][value="+data.correction14+"]").prop('checked',true);
         $("input[name='correction15'][value="+data.correction15+"]").prop('checked',true);
         $("input[name='correction16'][value="+data.correction16+"]").prop('checked',true);
         $("input[name='correction18'][value="+data.correction18+"]").prop('checked',true);
         $("input[name='correction17'][value="+data.correction17+"]").prop('checked',true);

         $("input[name='correction19'][value="+data.correction19+"]").prop('checked',true);
         $("input[name='correction20'][value="+data.correction20+"]").prop('checked',true);
         $("input[name='correction21'][value="+data.correction21+"]").prop('checked',true);
         $("input[name='correction22'][value="+data.correction22+"]").prop('checked',true);
         $("input[name='correction23'][value="+data.correction23+"]").prop('checked',true);
         $("input[name='correction24'][value="+data.correction24+"]").prop('checked',true);
         $("input[name='correction25'][value="+data.correction25+"]").prop('checked',true);
         $("input[name='correction26'][value="+data.correction26+"]").prop('checked',true);
         $("input[name='correction27'][value="+data.correction27+"]").prop('checked',true);
         $("input[name='correction28'][value="+data.correction28+"]").prop('checked',true);
         $("input[name='correction29'][value="+data.correction29+"]").prop('checked',true);

         $("#geteditdetails").modal('show');
     }

     function deleteqmsAudit(data){
         $("#re_id").val(data.id);
         $("#deleteRequirment").modal('show');

     }
 </script>
