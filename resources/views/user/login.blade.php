@include('partials.header')

<h2 style="background-color:black; color:white; text-align:center; padding:10px;">Login</h2>
<br>
<div id="zzz" style="margin-left:800px;">

<form action="/login/process" method="Post" > 
    @csrf
  <!-- Email input -->
  <div class="form-outline mb-4" style="width:25%;">
    <label class="form-label" for="email"  style="text-shadow:1px 1px lightgreen;">Email address</label>
    <input type="email" name="email" id="email" class="form-control" style="background-color: rgba(0,0,0,0.4); "/>
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4" style="width:25%;" >
    <label class="form-label" for="password" style="text-shadow:1px 1px lightgreen;">Password</label>
    <input type="password" name="password" password id="password" class="form-control" style="background-color: rgba(0,0,0,0.4); " />
    
  </div>

  <!-- Submit button -->
  <button type="submit" class="button" style="margin-left:110px; cursor: pointer;  
        outline: none;  border-radius: 15px; box-shadow: 0 9px #999; text-shadow:1px 1px red;
        }">Submit</button>

  </div>
</div>
</form>
@include('partials.footer')