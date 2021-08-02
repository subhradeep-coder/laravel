@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>



                
                <h1 style="text-align: center;">REGISTRATION FORM</h1>
                
                <form target="_blank" name="RegForm" action="student.store" 
               method="post">
              
                <div class="row">

                  <div class="col">
             <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                 </div>
                
                 <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                 </div>

              </div>
              <br><br>

              <div class="col">
            Date of Birth: <input type = "date">
            </div>
           Phone Number:
           <br><br>
           <div>
           <p>Telephone: <input type="text" 
                        size="65" name="Telephone" /></p>
           </div>
                       
                    <div class="col">
                Place:
             <input type="text" class="form-control" placeholder="Place" aria-label="Place">
                 </div>

                 <br><br>  <p>E-mail Address: <input type="text" 
                            size="65" name="EMail"  placeholder="subh@example.com"/></p><br><br>

                            <p>
                Selecy your Department:
                <select type="text" value="" name="Department" >
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>CE</option>
                    <option>ME</option>
                    <option>EE</option>
                </select>
            </p>
                            

            <input type="Submit" 
                       value="Submit" name="Submit" />
          

                       <input type="reset" 
                       value="Reset" name="Reset" />
      </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
