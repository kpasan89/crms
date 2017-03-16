<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!!
            Form::text('title',
            isset($data['title']) ?$data['title'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('maritial_status', 'Maritial Status:', ['class' => 'control-label']) !!}
        {!!
            Form::text('maritial_status',
            isset($data['status']) ? $data['status'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
        {!!
            Form::text('gender',
            isset($data['gender']) ?$data['gender'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('married_date', 'Date of Marriage:', ['class' => 'control-label']) !!}
        {!!
            Form::text('married_date',
            isset($data['married_date']) ? $data['married_date'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
    {!!
        Form::text('first_name',
        isset($data['first_name']) ? $data['first_name'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('family_name', 'Family Name:', ['class' => 'control-label']) !!}
    {!!
        Form::text('family_name',
        isset($data['family_name']) ? $data['family_name'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('full_name', 'Full Name:', ['class' => 'control-label']) !!}
    {!!
        Form::text('full_name',
        isset($data['full_name']) ? $data['full_name'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('dob', 'Date of Birth:', ['class' => 'control-label']) !!}
        {!!
            Form::text('dob',
            isset($data['dob']) ?$data['dob'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('nationality', 'Nationality:', ['class' => 'control-label']) !!}
        {!!
            Form::text('nationality',
            isset($data['nationality']) ? $data['nationality'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('country_name', 'Residence Country:', ['class' => 'control-label']) !!}
    {!!
        Form::text('country_name',
        isset($data['country_name']) ? $data['country_name'] : null,
        ['class' => 'form-control'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('pvt_address', 'Address:', ['class' => 'control-label']) !!}
    {!!
        Form::text('pvt_address',
        isset($data['pvt_address']) ? $data['pvt_address'] : null,
        ['class' => 'form-control'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('bussiness_address', 'Address (Business):', ['class' => 'control-label']) !!}
    {!!
        Form::text('bussiness_address',
        isset($data['bussiness_address']) ? $data['bussiness_address'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('passport', 'Passport Number:', ['class' => 'control-label']) !!}
        {!!
            Form::text('passport',
            isset($data['passport']) ?$data['passport'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('nic', 'NIC Number:', ['class' => 'control-label']) !!}
        {!!
            Form::text('nic',
            isset($data['nic']) ? $data['nic'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('pp_issued_date', 'Passport Issued Date:', ['class' => 'control-label']) !!}
        {!!
            Form::text('pp_issued_date',
            isset($data['pp_issued_date']) ?$data['pp_issued_date'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('pp_expire_date', 'Passport Expiry Date:', ['class' => 'control-label']) !!}
        {!!
            Form::text('pp_expire_date',
            isset($data['pp_expire_date']) ? $data['pp_expire_date'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('customer_type', 'Customer Type:', ['class' => 'control-label']) !!}
    {!!
        Form::text('customer_type',
        isset($data['customer_type']) ? $data['customer_type'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('job_title', 'Job Title:', ['class' => 'control-label']) !!}
    {!!
        Form::text('job_title',
        isset($data['job_title']) ? $data['job_title'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('company_name', 'Company Name:', ['class' => 'control-label']) !!}
    {!!
        Form::text('company_name',
        isset($data['company_name']) ? $data['company_name'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('telepone', 'Telephone Number:', ['class' => 'control-label']) !!}
    {!!
        Form::text('telepone',
        isset($data['telepone']) ? $data['telepone'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('mobile', 'Mobile Number:', ['class' => 'control-label']) !!}
    {!!
        Form::text('mobile',
        isset($data['mobile']) ? $data['mobile'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('fax', 'Fax Number:', ['class' => 'control-label']) !!}
    {!!
        Form::text('fax',
        isset($data['fax']) ? $data['fax'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail address:', ['class' => 'control-label']) !!}
    {!!
        Form::email('email',
        isset($data['email']) ? $data['email'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('seat', 'Seat Preference:', ['class' => 'control-label']) !!}
    {!!
        Form::text('seat',
        isset($data['seat']) ? $data['seat'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('sport', 'Sport Preference:', ['class' => 'control-label']) !!}
    {!!
        Form::text('sport',
        isset($data['sport']) ? $data['sport'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('interest', 'Interests:', ['class' => 'control-label']) !!}
    {!!
        Form::text('interest',
        isset($data['interest']) ? $data['interest'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group">
    {!! Form::label('meal', 'Meal Preference:', ['class' => 'control-label']) !!}
    {!!
        Form::text('meal',
        isset($data['meal']) ? $data['meal'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('privilage_crd', 'Own an Airline Privilege Card?:', ['class' => 'control-label']) !!}
        {!!
            Form::text('privilage_crd',
             isset($data['privilage_crd']) ? $data['privilage_crd'] : null,
             ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-8 removeleft removeright">
        {!! Form::label('card_type', 'If Yes, Select type:', ['class' => 'control-label']) !!}
        {!!
            Form::text('card_type',
            isset($data['card_type']) ? $data['card_type'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('bussiness_bought', 'Business brought by:', ['class' => 'control-label']) !!}
    {!!
        Form::text('bussiness_bought',
        isset($data['bussiness_bought']) ? $data['bussiness_bought'] : null,
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-4 removeleft">
        {!! Form::label('bussiness_tel', 'Tel No:', ['class' => 'control-label']) !!}
        {!!
            Form::text('bussiness_tel',
            isset($data['bussiness_tel']) ? $data['bussiness_tel'] : null,
            ['class' => 'form-control'])
        !!}
    </div>

    <div class="form-group col-sm-8 removeleft removeright">
        {!! Form::label('bussiness_email', 'E-mail:', ['class' => 'control-label']) !!}
        {!!
            Form::text('bussiness_email',
            isset($data['bussiness_email']) ? $data['bussiness_email'] : null,
            ['class' => 'form-control'])
        !!}
    </div>
</div>
<!--<div class="form-group">

    {!! Form::label('company_type', 'Company type:', ['class' => 'control-label']) !!}
    {!!
        Form::text('company_type',
        isset($data['companydesc']) ? $data['companydesc'] : null,
        ['class' => 'form-control'])
    !!}
</div>
<div class="form-group">
    {!! Form::label('industry', 'Industry:', ['class' => 'control-label']) !!}
    {!!
        Form::select('industry_id',
        $industries,
        null,
        ['class' => 'form-control ui search selection top right pointing search-select',
        'id' => 'search-select'])
    !!}
</div>


<div class="form-group">
    {!! Form::label('user_id', 'Assign user:', ['class' => 'control-label']) !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}

</div>-->


{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
