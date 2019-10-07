<div class="form-group col-md-12">
    <label class="control-label col-md-3 col-sm-3 col-xs-12"
           for="first-name">{{$isim}} <span>*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {{Form::text($name,$value,array_merge(['class'=>'form-control col-md-7 col-xs-12l'],
                 $attributes)) }}
    </div>

</div>