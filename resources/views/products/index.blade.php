@include('partials.header')
<x-nav/>

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @if (Session::has('success'))
  <div class="alert alert-warning" role="alert">
{{Session::get('success')}}
@include('partials.footer')
@endif
  @foreach ($products as $products)
  <tbody>
    <tr>
      <th scope="row">{{$products->prodId}}</th>
      <td>{{$products->description}}</td>
      <td>{{$products->quantity}}</td>
      <td>{{$products->price}}</td>
      <td><a href="editProd/{{$products->prodId}}">Edit</a></td>
      <td><a href="deleteProd/{{$products->prodId}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
