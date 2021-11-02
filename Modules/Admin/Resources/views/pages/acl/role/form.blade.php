<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card  box-shadow-0 mb-5">
                <div class="card-body pt-3">
                    <div class="form-group mb-5">
                        <label  class="form-label fs-6 fw-bolder text-dark">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"  name="name" value="{{ old('name',$role->name ?? '') }}">
                        @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-5">
                        <label  class="form-label fs-6 fw-bolder text-dark">Guard <span>(*)</span></label>
                        <input type="text" class="form-control"  name="guard_name" value="admins" disabled>
                    </div>
                    <div class="form-group mb-5">
                        <label  class="form-label fs-6 fw-bolder text-dark">Description </label>
                        <input type="text" class="form-control"  name="description" value="{{ old('description', $role->description ?? '') }}" >
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    @foreach($permissions as $key => $groupPermission)
                    <div class="row" style="margin-bottom: 1rem;border-bottom: 1px solid #dedede">
                        <div class="col-sm-12">
                            <h5>{{ $groups[$key] }}</h5>
                        </div>
                        @foreach($groupPermission as $permission)
                            <div class="col-sm-3 mb-5">
                                <label class="box-checkbox"> {{ $permission->description }}
                                    <input type="checkbox" name="permission[]" {{ in_array($permission->id,$permissionActive) ? "checked" : ""}}  value="{{ $permission->id }}">
                                    <span class="checkmark" ></span>
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                </div>
            </div>
        </div>
       
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