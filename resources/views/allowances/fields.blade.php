<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::number('employee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Allowance Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allowance_type', 'Allowance Type:') !!}
    {!! Form::text('allowance_type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Granted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_granted', 'Date Granted:') !!}
    {!! Form::text('date_granted', null, ['class' => 'form-control','id'=>'date_granted']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_granted').datepicker()
    </script>
@endpush

<!-- Allowance Privilage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('allowance_privilage', 'Allowance Privilage:') !!}
    {!! Form::text('allowance_privilage', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>