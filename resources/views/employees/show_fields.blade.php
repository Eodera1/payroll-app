<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $employees->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $employees->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $employees->email }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $employees->phone_number }}</p>
</div>

<!-- Physical Address Field -->
<div class="col-sm-12">
    {!! Form::label('physical_address', 'Physical Address:') !!}
    <p>{{ $employees->physical_address }}</p>
</div>

<<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department', 'Department:') !!}
    <p>{{ $employee->department->name }}</p>
</div>

<!-- Hire Date Field -->
<div class="col-sm-12">
    {!! Form::label('hire_date', 'Hire Date:') !!}
    <p>{{ $employees->hire_date }}</p>
</div>

<!-- Salary Field -->
<div class="col-sm-12">
    {!! Form::label('salary', 'Salary:') !!}
    <p>{{ $employees->salary }}</p>
</div>

<!-- Disability Status Field -->
<div class="col-sm-12">
    {!! Form::label('disability_status', 'Disability Status:') !!}
    <p>{{ $employees->disability_status }}</p>
</div>

<!-- Job Basis Field -->
<div class="col-sm-12">
    {!! Form::label('job_basis', 'Job Basis:') !!}
    <p>{{ $employees->job_basis }}</p>
</div>

<!-- Emergency Contact Field -->
<div class="col-sm-12">
    {!! Form::label('emergency_contact', 'Emergency Contact:') !!}
    <p>{{ $employees->emergency_contact }}</p>
</div>

