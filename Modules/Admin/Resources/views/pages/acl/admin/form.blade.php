<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0"></h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
            class="form-horizontal" autocomplete="off" method="POST" action="">
            @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                            <input type="text" name="name" value="{{ old('name', $admin->name ?? '') }}"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                        @if ($errors->first('name'))
                                <span class="fv-plugins-message-container invalid-feedback">{{ $errors->first('name') }}</span>
                            @endif
                        <!--end::Col-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                            <input type="text" name="email" value="{{ old('name', $admin->email ?? '') }}"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                        @if ($errors->first('email'))
                                <span class="fv-plugins-message-container invalid-feedback">{{ $errors->first('email') }}</span>
                            @endif
                        <!--end::Col-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" id="newpassword">
                            
                        @if ($errors->first('password'))
                                <span class="fv-plugins-message-container invalid-feedback">{{ $errors->first('password') }}</span>
                        @endif
                        <!--end::Col-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                 <!--begin::Input group-->
                 <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Phone</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <!--begin::Col-->
                            <input type="text" name="phone" value="{{ old('phone', $admin->phone ?? '') }}"
                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                        @if ($errors->first('phone'))
                                <span class="fv-plugins-message-container invalid-feedback">{{ $errors->first('phone') }}</span>
                            @endif
                        <!--end::Col-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
               
                <div class="card  box-shadow-0 mb-5">
                    <div class="card-body pt-3 mt-3">
                        <div class="row">
                            <div class="col-sm-12"><h4>Danh sách các nhóm quyền</h4></div>
                            @foreach($roles as $role)
                                <div class="col-sm-3">
                                    <label class="box-checkbox"> {{ $role->description }}
                                        <input type="checkbox" name="roles[]" {{ in_array($role->id,$rolesActive ?? []) ? "checked" : ""}}  value="{{ $role->id }}">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
               
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                    Changes</button>
            </div>
            <!--end::Actions-->
            <input type="hidden">
            <div></div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>


</form>
<style>
    .box-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 14px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.box-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
}

.box-checkbox:hover input~.checkmark {
    background-color: #ccc
}

.box-checkbox input:checked~.checkmark {
    background-color: #2196f3;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none
}

.box-checkbox input:checked~.checkmark:after {
    display: block
}

.box-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid #fff;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}
</style>