<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
<form action="{{ route('admins.update', [$admin->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="name" placeholder="Input Name"
                id="example-text-input" value="{{ $admin->name }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="email" placeholder="Input Email"
                id="example-text-input" value="{{ $admin->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
            <input class="form-control" type="password" name="password" placeholder="Input Password"
                id="example-text-input" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label">No Hp</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="nohp" placeholder="Input No Hp"
                id="example-text-input" value="{{ $admin->nohp }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary waves-effect waves-light float-right"><i
            class="mdi mdi-file-document-box-plus mr-2"></i>Update</button>
</form>
