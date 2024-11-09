<!-- Empolyee Id Field -->
<div class="col-sm-12">
    {!! Form::label('empolyee_id', 'Empolyee Id:') !!}
    <p>{{ $attendance->empolyee_id }}</p>
</div>

<!-- Check In Time Field -->
<div class="col-sm-12">
    {!! Form::label('check_in_time', 'Check In Time:') !!}
    <p>{{ $attendance->check_in_time }}</p>
</div>

<!-- Check Out Time Field -->
<div class="col-sm-12">
    {!! Form::label('check_out_time', 'Check Out Time:') !!}
    <p>{{ $attendance->check_out_time }}</p>
</div>

<!-- Date Field -->
<div class="col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $attendance->date }}</p>
</div>

