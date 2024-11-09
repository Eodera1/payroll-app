<!-- Empolyee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empolyee_id', 'Empolyee Id:') !!}
    {!! Form::number('empolyee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Check In Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_in_time', 'Check In Time:') !!}
    {!! Form::text('check_in_time', null, ['class' => 'form-control','id'=>'check_in_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_in_time').datepicker()
    </script>
@endpush

<!-- Check Out Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_out_time', 'Check Out Time:') !!}
    {!! Form::text('check_out_time', null, ['class' => 'form-control','id'=>'check_out_time']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#check_out_time').datepicker()
    </script>
@endpush

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush