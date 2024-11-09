<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $payroll->employee_id }}</p>
</div>

<!-- Salary Id Field -->
<div class="col-sm-12">
    {!! Form::label('salary_id', 'Salary Id:') !!}
    <p>{{ $payroll->salary_id }}</p>
</div>

<!-- Payment Period Field -->
<div class="col-sm-12">
    {!! Form::label('payment_period', 'Payment Period:') !!}
    <p>{{ $payroll->payment_period }}</p>
</div>

<!-- Total Earning Field -->
<div class="col-sm-12">
    {!! Form::label('total_earning', 'Total Earning:') !!}
    <p>{{ $payroll->total_earning }}</p>
</div>

<!-- Total Deductions Field -->
<div class="col-sm-12">
    {!! Form::label('total_deductions', 'Total Deductions:') !!}
    <p>{{ $payroll->total_deductions }}</p>
</div>

<!-- Net Pay Field -->
<div class="col-sm-12">
    {!! Form::label('net_pay', 'Net Pay:') !!}
    <p>{{ $payroll->net_pay }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $payroll->status }}</p>
</div>

<!-- Pay Slip Field -->
<div class="col-sm-12">
    {!! Form::label('pay_slip', 'Pay Slip:') !!}
    <p>{{ $payroll->pay_slip }}</p>
</div>

