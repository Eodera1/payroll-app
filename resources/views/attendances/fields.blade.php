<!-- Empolyee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empolyee_id', 'Empolyee Id:') !!}
    {!! Form::number('empolyee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Check In Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_in_time', 'Check In Time:') !!}
    {!! Form::time('check_in_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Check Out Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('check_out_time', 'Check Out Time:') !!}
    {!! Form::time('check_out_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date').datepicker()
    </script>
@endpush
