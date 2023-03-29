@include('partials.header')
<div id="zzz" style="margin-left:800px;">
    <h2>Add</h2>
    <br>
        <form action="/saveCustomer" method="Post">
        @CSRF
        <div class="mb-3" style="width:25%;">
            <label for="name" class="form-label" style="text-shadow:1px 1px lightgreen;">LastName:</label>
            <input type="name" class="form-control" name="lastName" style="background-color: rgba(0,0,0,0.4); ">
          
        </div>   
        <div class="mb-3" style="width:25%;">
            <label for="name" class="form-label" style="text-shadow:1px 1px lightgreen;">FirstName:</label>
            <input type="name" class="form-control" name="firstName" style="background-color: rgba(0,0,0,0.4); ">
          
        </div>      
        <div class="mb-3" style="width:25%;">
            <label for="email" class="form-label" style="text-shadow:1px 1px lightgreen;">Email:</label>
            <input type="email" class="form-control"  name="email" style="background-color: rgba(0,0,0,0.4); ">
        
        </div>
        <div class="mb-3" style="width:25%;">
            <label for="contactNumber" class="form-label" style="text-shadow:1px 1px lightgreen;">Contact Number:</label>
            <input type="contactNumber" class="form-control"  name="contactNumber" style="background-color: rgba(0,0,0,0.4); ">
        
        </div>
        <div class="mb-3" style="width:25%;">
            <label for="address" class="form-label" style="text-shadow:1px 1px lightgreen;">Address:</label>
            <input type="address" class="form-control"  name="address" style="background-color: rgba(0,0,0,0.4); ">
        
        </div>
       
        
        <button type="submit" class="button" style="margin-left:110px; cursor: pointer;  
        outline: none;  border-radius: 15px; box-shadow: 0 9px #999; text-shadow:1px 1px red;
        }">Submit</button>

        </form>
        
</div>
<br>
<br>
@include('partials.footer')