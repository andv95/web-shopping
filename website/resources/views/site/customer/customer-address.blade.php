@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="form-tiki">
    <div class="Name--user text-center mb3 mx-auto">    
        <div class="header__name ">
            <h1>
                Chào User Name!
            </h1>
        </div>
        <div class="slogan-ran">
            <p>
                Everything you want to know before we get dirty
            </p>
        </div>
    </div>
    <!-- Body Wrapper -->
    <div class="customer-body mx-auto">
        <div class="customer-body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="acc__menu px-2">
                            <ul class="acc__menu-style px-2 text-center">
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/edit" class="w-100 ">
                                        <span>INFO</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>ORDERS MANAGEMENT</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>ADDRESS</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/wishlist" class="w-100 ">
                                        <span>WISHLIST</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="cus__title d-flex justify-content-between align-items-center">
                            <h4 class="my-0 up-text">Address</h4>
                            <button type="button" class="btn add_address-btn up-text" data-bs-toggle="modal" data-bs-target="#exampleModal">New Category</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-wrap">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalEditAddressExtra">ADD ADDRESS</h5>
                                            </div>
                                            <div class="modal-body">
                                                <form action="POST">
                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Name">
                                                    <input class="input__address my-2 w-100" type="number" name="" placeholder="Phone">
                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Address">
                                                    <textarea class="input__address my-2 w-100" name="" id="" cols="30" rows="1" placeholder="Detailed note about address"></textarea>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-modal-address up-text" data-bs-dismiss="modal">Back</button>
                                                <a href="#" class="btn up-text btn-modal-save-address">Finish</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus__content mb-4 mt-2 py-5 px-4">
                            <div class="cus__content-address mb-3">
                                <div class="cus__content-address-wrapper d-flex justify-content-between align-items-center">
                                    <div class="cus__info-address">
                                        <table class="table table-address">
                                            <tbody>
                                                <tr>
                                                    <td class="title___address text-bold">NAME</td>
                                                    <td class="text-bold">
                                                        <span>VU HOANG</span> <span class="address-default">DEFAULT</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title___address text-bold">PHONE</td>
                                                    <td class="text-bold">0987654321</td>
                                                </tr>
                                                <tr>
                                                    <td class="title___address text-bold">ADDRESS</td>
                                                    <td class=" text-bold" >40/107 HONG MAI STREET</td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>
                                    <div class="cus__info-act">
                                        <div class="cus__info_act-wrap d-flex justify-content-around">
                                            <div class="cus__info_act-edit text-underline" data-bs-toggle="modal" data-bs-target="#modalEdit">EDIT</div>
                                            <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditAddress" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-wrap">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalEditAddressExtra">EDIT ADDRESS</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="POST">
                                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Name">
                                                                    <input class="input__address my-2 w-100" type="number" name="" placeholder="Phone">
                                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Address">
                                                                    <textarea class="input__address my-2 w-100" name="" id="" cols="30" rows="1" placeholder="Detailed note about address"></textarea>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-modal-address up-text" data-bs-dismiss="modal">Back</button>
                                                                <a href="#" class="btn up-text btn-modal-save-address">Finish</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cus__info_act-del">
                                                <a class="text-underline color-red" href="#">DELETE</a>
                                            </div>
                                        </div>
                                        <div class="cus__info_act-default">
                                            MAKE IT DEFAULT
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-opacity"></div>
                            <div class="cus__content-address my-3">
                                <div class="cus__content-address-wrapper d-flex justify-content-between align-items-center">
                                    <div class="cus__info-address">
                                        <table class="table table-address">
                                            <tbody>
                                                <tr>
                                                    <td class="title___address text-bold">NAME</td>
                                                    <td class="text-bold">
                                                        <span>VU HOANG</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="title___address text-bold">PHONE</td>
                                                    <td class="text-bold">0987654321</td>
                                                </tr>
                                                <tr>
                                                    <td class="title___address text-bold">ADDRESS</td>
                                                    <td class=" text-bold" >40/107 HONG MAI STREET</td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>
                                    <div class="cus__info-act">
                                        <div class="cus__info_act-wrap d-flex justify-content-around">
                                            <div class="cus__info_act-edit text-underline" data-bs-toggle="modal" data-bs-target="#modalEditExtra">EDIT</div>
                                            <div class="modal fade" id="modalEditExtra" tabindex="-1" aria-labelledby="modalEditAddressExtra" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-wrap">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalEditAddressExtra">EDIT ADDRESS</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="POST">
                                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Name">
                                                                    <input class="input__address my-2 w-100" type="number" name="" placeholder="Phone">
                                                                    <input class="input__address my-2 w-100" type="text" name="" placeholder="Address">
                                                                    <textarea class="input__address my-2 w-100" name="" id="" cols="30" rows="1" placeholder="Detailed note about address"></textarea>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-modal-address up-text" data-bs-dismiss="modal">Back</button>
                                                                <a href="#" class="btn up-text btn-modal-save-address">Finish</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cus__info_act-del">
                                                <a class="text-underline color-red" href="#">DELETE</a>
                                            </div>
                                        </div>
                                        <div class="cus__info_act-extra">
                                            <a href="#">MAKE IT DEFAULT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@stop