<div class="card mb-5 mt-5" id="cardss">
    <div class="card-header" style="height:70px;">
        <h1 class="form-title">Teacher Form</h1>
    </div>
    <div class="card-body" id="teacher-card">
        <div class="mb-3 form-group @error('lastName') has-error @enderror">
            {!! Form::label('lastName','LastName',[],false) !!}
            @error('lastName')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
            {!! Form::text('lastName', null, ['class'=>'form-control', 'id'=>'lastName', 'required' => '']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('lastName') }}</span>
        </div>

        <div class="mb-3 form-group @error('firstName') has-error @enderror">
            {!! Form::label('firstName','FirstName',[],false) !!}
            @error('firstName')<span class="errspanicon" id="errspanicon"><i class="fal fa-exclamation-circle"></i></span>@enderror
            {!! Form::text('firstName', null, ['class'=>'form-control', 'id'=>'firstName','required' => '']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('firstName') }}</span>
        </div>

        <div class="mb-3 form-group @error('phone') has-error @enderror">
            {!! Form::label('phone', 'Phone Number',[],false) !!}
            {!! Form::number('phone', null, ['class'=>'form-control', 'placeholder'=>'example: 09123....','required' => '', 'id'=>'modal-input-contact']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('phone') }}</span>
        </div>

        <div class="mb-3 form-group @error('subj_Teaching') has-error @enderror">
            {!! Form::label('subj_Teaching','Subject',[],false) !!}
            {{Form::select('subj_Teaching', [
                1 => 'Math',
                2 => 'English',
                3 => 'Filipino',
                4 => 'Science',
            ], null, ['class'=>'form-control form-select', 'id'=>'modal-input-subj_Teaching'])}}
            <span class="errspan" id="errspan">{{ $errors->first('subj_Teaching') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-primary form-control">Submit</button> 
        </div>
        
    </div>
    
</div>


