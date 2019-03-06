<div>
  <label for="name">Name: </label>
  <input type="text" name="name" value={{ old('name') ?? $customer->name}}>
  <div>{{ $errors->first('name')}}</div>
</div>

<div>
  <label for="email">Email: </label>
  <input type="text" name="email" value={{ old('email') ?? $customer->email}}>
  <div>{{ $errors->first('email')}}</div>
</div>

<div>
  <label for="active">Status: </label>
  <select name="active" id="active">
    <option value="" disable>Select</option>
    <option value="1" {{ $customer->active == 'Active' ? 'selected' : '' }}>
      Active
    </option>
    <option value="0" {{ $customer->active == 'Inactive' ? 'selected' : '' }}>
      Inactive
    </option>
  </select>
</div>

<div>
  <label for="company_id">Status: </label>
  <select name="company_id" id="company_id">
    @foreach ($companies as $company)
      <option value="{{$company->id}}" {{$company->id == $customer->company_id ? 'selected' : ''}}>
        {{$company->name}}
      </option>
    @endforeach
  </select>
</div>
@csrf