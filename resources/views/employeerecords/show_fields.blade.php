<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $employeerecord->employee_id }}</p>
</div>

<!-- Record Type Field -->
<div class="col-sm-12">
    {!! Form::label('record_type', 'Record Type:') !!}
    <p>{{ $employeerecord->record_type }}</p>
</div>

<!-- Record Date Field -->
<div class="col-sm-12">
    {!! Form::label('record_date', 'Record Date:') !!}
    <p>{{ $employeerecord->record_date }}</p>
</div>

<!-- Record Description Field -->
<div class="col-sm-12">
    {!! Form::label('record_description', 'Record Description:') !!}
    <p>{{ $employeerecord->record_description }}</p>
</div>

<!-- Outcome Field -->
<div class="col-sm-12">
    {!! Form::label('outcome', 'Outcome:') !!}
    <p>{{ $employeerecord->outcome }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $employeerecord->comments }}</p>
</div>

<!-- Handled By Field -->
<div class="col-sm-12">
    {!! Form::label('handled_by', 'Handled By:') !!}
    <p>{{ $employeerecord->handled_by }}</p>
</div>

