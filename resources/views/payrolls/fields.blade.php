<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::number('employee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Salary Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salary_id', 'Salary Id:') !!}
    {!! Form::number('salary_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Period Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_period', 'Payment Period:') !!}
    {!! Form::number('payment_period', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Earning Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_earning', 'Total Earning:') !!}
    {!! Form::number('total_earning', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Deductions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_deductions', 'Total Deductions:') !!}
    {!! Form::number('total_deductions', null, ['class' => 'form-control']) !!}
</div>

<!-- Net Pay Field -->
<div class="form-group col-sm-6">
    {!! Form::label('net_pay', 'Net Pay:') !!}
    {!! Form::number('net_pay', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 1, 'maxlength' => 1]) !!}
</div>

<!-- Pay Slip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_slip', 'Pay Slip:') !!}
    {!! Form::text('pay_slip', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>