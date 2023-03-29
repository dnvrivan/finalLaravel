@include('partials.header')
<div id="zzz" style="margin-left:800px;">
    <h2>Add Products</h2>
    <br>
        <form action="/saveProducts" method="Post">
        @csrf
          
        <div class="mb-3" style="width:25%;">
            <label for="description" class="form-label" style="text-shadow:1px 1px lightgreen;">Description:</label>
            <input type="description" class="form-control" name="description" style="background-color: rgba(0,0,0,0.4); ">
          
        </div>      
        <div class="mb-3" style="width:25%;">
            <label for="quantity" class="form-label" style="text-shadow:1px 1px lightgreen;">Quantity:</label>
            <input type="quantity" class="form-control"  name="quantity" style="background-color: rgba(0,0,0,0.4); ">
        
        </div>
        <div class="mb-3" style="width:25%;">
            <label for="price" class="form-label" style="text-shadow:1px 1px lightgreen;">Price:</label>
            <input type="price" class="form-control"  name="price" style="background-color: rgba(0,0,0,0.4); ">
        
        </div>

        
        <button type="submit" class="button" style="margin-left:110px; cursor: pointer;  
        outline: none;  border-radius: 15px; box-shadow: 0 9px #999; text-shadow:1px 1px red;
        }">Submit</button>

        </form>
        
</div>
<br>
<br>
@include('partials.footer')