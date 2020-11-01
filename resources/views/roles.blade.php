@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <h4>Dashboard</h4>
            <p class="text-gray">Complete Registration,</p>
        </div>
    </div>
    @if ($admin ?? '')
    <div class="row">
        <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">Administrator</p>
            <div class="grid-body">
            <div class="item-wrapper">
                
                <form action="{{ url('/complete_reg') }}" method="POST">
                    @csrf

                    <p>
                        <span>
                            <small>
                                You are the First User in the system, this implies that <br>
                            you are going to be the System Administrator.
                            </small>
                            
                        </span> 
                    </p>

                <div class="form-group">
                    <input type="hidden" name="role" value="admin">
                </div>
                    <button type="submit" class="btn btn-sm btn-primary">Accept Role</button>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-6 equel-grid">
        <div class="grid">
            <p class="grid-header">Select Role</p>
            <div class="grid-body">
              <div class="item-wrapper">
                
                <form action="{{ url('/complete_reg') }}" method="POST">
                    @csrf

                    <p>
                        <span>
                            <small>
                                You are required to select a role to use in the system before you can <br>
                                continue,<br><code>Note:</code> You will not be able to access other 
                                parts of the system if you have not selected a role.
                            </small>
                            
                        </span> 
                    </p>

                <div class="form-group">
                   <select style="text-transform: capitalize" name="role" class="form-control" id="">
                       <option value="" selected disabled> Select Role</option>
                       @foreach ($roles as $role)
                            <option value="{{ $role }}" style="text-tranform: capitalize;" selected> {{ $role }}</option>
                       @endforeach
                   </select>
                </div>
                    <button type="submit" class="btn btn-sm btn-primary">Complete</button>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    </div>
@endif

@endsection