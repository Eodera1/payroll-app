<!-- Leave Name Field -->
<div class="col-sm-12">
    {!! Form::label('leave_name', 'Leave Name:') !!}
    <p>{{ $leavetype->leave_name }}</p>
</div>

<!-- Duration Field -->
<div class="col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{{ $leavetype->duration }}</p>
</div>

<!-- Paid Field -->
<div class="col-sm-12">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $leavetype->paid }}</p>
</div>

<!-- Leave Condition Field -->
<div class="col-sm-12">
    {!! Form::label('leave_condition', 'Leave Condition:') !!}
    <p>{{ $leavetype->leave_condition }}</p>
</div>

