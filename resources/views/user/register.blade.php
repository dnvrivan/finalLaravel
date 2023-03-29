@include('partials.header')
<div id="zzz" style="margin-left:800px;">
    <h2>Register</h2>
    <br>
        <form action="/store" method="Post">
        @CSRF
        <div class="mb-3" style="width:25%;">
            <label for="name" class="form-label" style="text-shadow:1px 1px lightgreen;">Name:</label>
            <input type="name" class="form-control" name="name" style="background-color: rgba(0,0,0,0.4); ">
            @error('name')
                <p>Invalid name. Name should be atleast 4 characters.</p>
            @enderror
        </div>      
        <div class="mb-3" style="width:25%;">
            <label for="email" class="form-label" style="text-shadow:1px 1px lightgreen;">Email:</label>
            <input type="email" class="form-control"  name="email" style="background-color: rgba(0,0,0,0.4); ">
            @error('email')
                <p>Email is already used.</p>
            @enderror
        </div>
        <div class="mb-3" style="width:25%;">
            <label for="password" class="form-label" style="text-shadow:1px 1px lightgreen;">Password:</label>
            <input type="password" class="form-control"   name="password" style="background-color: rgba(0,0,0,0.4); ">
        </div>
        <div class="mb-3" style="width:25%;">
            <label for="password" class="form-label" style="text-shadow:1px 1px lightgreen;">Confirm Password:</label>
            <input type="password" class="form-control"  name="password_confirmation" style="background-color: rgba(0,0,0,0.4); ">
        </div>
        
        <button type="submit" class="button" style="margin-left:110px; cursor: pointer;  
        outline: none;  border-radius: 15px; box-shadow: 0 9px #999; text-shadow:1px 1px red;
        }">Submit</button>

        </form>
        
</div>
<br>
<br>
@include('partials.footer')