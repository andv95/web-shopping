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
                        <div class="col-xl-3 col-md-12">
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
                        <div class="col-xl-9 col-md-12 mb-4">
                            <div class="cus__title">
                                <h4 class="my-0 up-text">Address</h4>
                                <div class="cus__title-pc">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="cus__title-name cus__title-text">
                                                    <p>Name</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="cus__title-phone cus__title-text">
                                                    <p>Phone</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="cus__title-address cus__title-text">
                                                    <p>Address</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="cus__title-add-address">
                                                    ➕
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn add_address-btn up-text text-bold" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">New Category
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-wrap">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalEditAddressExtra">ADD ADDRESS</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="POST">
                                                        <input class="input__address my-2 w-100" type="text" name=""
                                                               placeholder="Name">
                                                        <input class="input__address my-2 w-100" type="number" name=""
                                                               placeholder="Phone">
                                                        <input class="input__address my-2 w-100" type="text" name=""
                                                               placeholder="Address">
                                                        <textarea class="input__address my-2 w-100" name="" id=""
                                                                  cols="30" rows="1"
                                                                  placeholder="Detailed note about address"></textarea>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-modal-address up-text"
                                                            data-bs-dismiss="modal">Back
                                                    </button>
                                                    <a href="#" class="btn up-text btn-modal-save-address">Finish</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cus__content px-2">
                                <div class="cus__content-address mb-3 pt-3">
                                    <div
                                        class="cus__content-address-wrapper">
                                        <div class="cus__info-address">
                                            <div class="cus__info-address-pc">
                                                <div class="cus__info-address-container">
                                                    <div class="cus__info-address-row">
                                                        <div class="cus__info-address-row-wrap">
                                                            <div class="cus__info-address-col-3">
                                                                <div class="cus__info-address-pc-name">
                                                                    <p class="text-cus__info-address">Name</p>
                                                                    <p>Vu Hoang Lan</p>
                                                                </div>
                                                            </div>
                                                            <div class="cus__info-address-col-3">
                                                                <div class="cus__info-address-pc-phone">
                                                                    <p class="text-cus__info-address">Phone</p>
                                                                    <p>012346789</p>
                                                                </div>
                                                            </div>
                                                            <div class="cus__info-address-col-6">
                                                                <div class="cus__info-address-pc-address">
                                                                    <p class="text-cus__info-address">Address</p>
                                                                    <p>40 ngo 107</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cus__info-address-col-3">
                                                            <div class="cus__info-address-pc-manipulation">
                                                                <div class="cus__info-address-pc-status">
                                                                    <p>default</p>
                                                                </div>
                                                                <div class="cus__info-address-pc-manipulation-wrap">
                                                                <div class="cus__info-address-pc-edit"  data-bs-toggle="modal"
                                                     data-bs-target="#modalEdit">
                                                                    <p>✏️</p>
                                                                </div>
                                                                <div class="cus__info-address-pc-del">
                                                                    <p><i class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#del-address"></i></p>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="del-address" tabindex="-1" aria-labelledby="del-addressLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header modal-header-del">
                                                                                <h5 class="modal-title modal-title-del" id="del-addressLabel">Delete it?</h5>
                                                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                            </div>
                                                                            <div class="modal-footer modal-footer-del">
                                                                                <button type="button" class="btn-delete btn-del">Delete</button>
                                                                                <button type="button" class="btn-del-close btn-del" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cus__info-act">
                                            <div class="cus__info_act-wrap d-flex justify-content-around">
                                                <div class="modal fade" id="modalEdit" tabindex="-1"
                                                     aria-labelledby="modalEditAddress" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-wrap">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalEditAddressExtra">
                                                                        EDIT ADDRESS</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="POST">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name="" placeholder="Name">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="number" name=""
                                                                               placeholder="Phone">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name=""
                                                                               placeholder="Address">
                                                                        <textarea class="input__address my-2 w-100"
                                                                                  name="" id="" cols="30" rows="1"
                                                                                  placeholder="Detailed note about address"></textarea>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-modal-address up-text"
                                                                            data-bs-dismiss="modal">Back
                                                                    </button>
                                                                    <a href="#"
                                                                       class="btn up-text btn-modal-save-address">Finish</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-opacity"></div>
                                <!-- <div class="cus__content-address my-3">
                                    <div
                                        class="cus__content-address-wrapper d-flex justify-content-between align-items-center">
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
                                                    <td class=" text-bold">40/107 HONG MAI STREET</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="cus__info-act">
                                            <div class="cus__info_act-wrap d-flex justify-content-around">
                                                <div class="cus__info_act-edit text-underline text-bold" data-bs-toggle="modal"
                                                     data-bs-target="#modalEditExtra">EDIT
                                                </div>
                                                <div class="modal fade" id="modalEditExtra" tabindex="-1"
                                                     aria-labelledby="modalEditAddressExtra" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-wrap">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalEditAddressExtra">
                                                                        EDIT ADDRESS</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="POST">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name="" placeholder="Name">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="number" name=""
                                                                               placeholder="Phone">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name=""
                                                                               placeholder="Address">
                                                                        <textarea class="input__address my-2 w-100"
                                                                                  name="" id="" cols="30" rows="1"
                                                                                  placeholder="Detailed note about address"></textarea>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-modal-address up-text"
                                                                            data-bs-dismiss="modal">Back
                                                                    </button>
                                                                    <a href="#"
                                                                       class="btn up-text btn-modal-save-address">Finish</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cus__info_act-del">
                                                    <a class="text-underline color-red text-bold" href="#">DELETE</a>
                                                </div>
                                            </div>
                                            <div class="cus__info_act-extra">
                                                <a class="text-bold" href="#">MAKE IT DEFAULT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--  -->
                            </div>
                            <div class="cus__content px-2">
                                <div class="cus__content-address mb-3 pt-3">
                                    <div
                                        class="cus__content-address-wrapper">
                                        <div class="cus__info-address">
                                            <div class="cus__info-address-pc">
                                                <div class="cus__info-address-container">
                                                    <div class="cus__info-address-row">
                                                        <div class="cus__info-address-row-wrap">
                                                            <div class="cus__info-address-col-3">
                                                                <div class="cus__info-address-pc-name">
                                                                    <p class="text-cus__info-address">Name</p>
                                                                    <p>Vu Hoang Lan</p>
                                                                </div>
                                                            </div>
                                                            <div class="cus__info-address-col-3">
                                                                <div class="cus__info-address-pc-phone">
                                                                    <p class="text-cus__info-address">Phone</p>
                                                                    <p>012346789</p>
                                                                </div>
                                                            </div>
                                                            <div class="cus__info-address-col-6">
                                                                <div class="cus__info-address-pc-address">
                                                                    <p class="text-cus__info-address">Address</p>
                                                                    <p>40 ngo 107</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cus__info-address-col-3">
                                                            <div class="cus__info-address-pc-manipulation">
                                                                <div class="cus__info-address-pc-status">
                                                                    <p>default</p>
                                                                </div>
                                                                <div class="cus__info-address-pc-manipulation-wrap">
                                                                <div class="cus__info-address-pc-edit"  data-bs-toggle="modal"
                                                     data-bs-target="#modalEdit">
                                                                    <p>✏️</p>
                                                                </div>
                                                                <div class="cus__info-address-pc-del">
                                                                    <p><i class="fas fa-trash-alt" data-bs-toggle="modal" data-bs-target="#del-address"></i></p>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="del-address" tabindex="-1" aria-labelledby="del-addressLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header modal-header-del">
                                                                                <h5 class="modal-title modal-title-del" id="del-addressLabel">Delete it?</h5>
                                                                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                            </div>
                                                                            <div class="modal-footer modal-footer-del">
                                                                                <button type="button" class="btn-delete btn-del">Delete</button>
                                                                                <button type="button" class="btn-del-close btn-del" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cus__info-act">
                                            <div class="cus__info_act-wrap d-flex justify-content-around">
                                                <div class="modal fade" id="modalEdit" tabindex="-1"
                                                     aria-labelledby="modalEditAddress" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-wrap">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalEditAddressExtra">
                                                                        EDIT ADDRESS</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="POST">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name="" placeholder="Name">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="number" name=""
                                                                               placeholder="Phone">
                                                                        <input class="input__address my-2 w-100"
                                                                               type="text" name=""
                                                                               placeholder="Address">
                                                                        <textarea class="input__address my-2 w-100"
                                                                                  name="" id="" cols="30" rows="1"
                                                                                  placeholder="Detailed note about address"></textarea>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-modal-address up-text"
                                                                            data-bs-dismiss="modal">Back
                                                                    </button>
                                                                    <a href="#"
                                                                       class="btn up-text btn-modal-save-address">Finish</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-opacity"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
