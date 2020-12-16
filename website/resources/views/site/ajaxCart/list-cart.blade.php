<div class="cart-table">
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th class="p-name">Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        @if(Session::has("Cart") != null)
            @foreach(Session::get("Cart")->products as $item)
            <tr>
                <td class="cart-pic first-row"><img src="" alt=""></td>
                <td class="cart-title first-row">
                    <h5>{{$item["productInfo"]->name}}</h5>
                </td>
                <td class="p-price first-row">${{number_format($item['productInfo']->price)}}</td>
                <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="text" id="quanty--item-{{$item['productInfo']->id}}" value="{{$item['quanty']}}">
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">$ {{$item['price']}}</td>
                <td class="close-td first-row"><i class="fas fa-times save--item-list-cart" onclick="saveItemListCart({{$item['productInfo']->id}});"></i></td>
                <td class="close-td first-row"><i class="far fa-trash-alt close--item-list-cart" data-id="{{$item['productInfo']->id}}"></i></td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4 offset-lg-8">
        <div class="proceed-checkout">
            <ul>
                <li class="subtotal">Quanty <span>{{number_format(Session::get("Cart")->totalQuanty)}}</span></li>
                <li class="cart-total">Total <span>$ {{number_format(Session::get("Cart")->totalPrice)}}</span></li>
            </ul>
            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
        </div>
    </div>
</div>