@component('mail::message')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Index</th>
            <th scope="col">Name</th>
            <th scope="col">Ean</th>
            <th scope="col">MainPrice</th>
            <th scope="col">Eshopprice</th>
            <th scope="col">Discount</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->product_id}}</td>
            <td>{{$product->index}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->ean}}</td>
            <td>{{$product->mainprice}}</td>
            <td>{{$product->eshopprice}}</td>
            <td>{{$product->discount}}</td>
            <td>{{$product->url}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endcomponent
