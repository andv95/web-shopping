@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="question-body mx-auto">
    <div class="question-title text-center">
        <h3>Let's chat.</h3>
    </div>
    <div class="question-slogan text-center my-2">
        Unlike others, I reply. Reach me via the form below or check out my <a href="#"><span class="text--decoration color-black"> FAQs.</span></a>
    </div>
    <div class="question-form my-5">
        <form action="">
            <div class="form-group form-question mx-auto">
                <label for="">YOUR NAME: <span class="color-red">*</span></label>
                <input type="text" class="w-100 form-control" id="" placeholder="Babe McBabe">
            </div>
            <div class="form-group form-question mx-auto">
                <label for="">EMAIL: <span class="color-red">*</span></label>
                <input type="mail" class="w-100 form-control" id="" placeholder="Email Address">
            </div>
            <div class="form-group form-question mx-auto">
                <label for="">YOUR ORDER NUMBER: <span class="color-red">*</span></label>
                <input type="text" class="w-100 form-control" id="" placeholder="Order Number">
            </div>
            <div class="form-group form-question mx-auto">
                <label for="">REASON FOR CONTACT: <span class="color-red">*</span></label>
                <div class="question-form-select w-100">
                    <select name="" id="" class="w-100 py-2 px-1">
                        <option value="">What's the reason for getting in contact?</option>
                        <option value="">Urgent: Change wrong address for order</option>
                        <option value="">Question about my order/delivery</option>
                        <option value="">Product questions</option>
                        <option value="">Wholesale/discount/promo code query</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-question mx-auto">
                <label for="">YOUR MESSAGE: <span class="color-red">*</span></label>
                <textarea class="w-100" name="" id="" cols="" rows="4"></textarea>
            </div>
            <div class="form-group form-question mx-auto list--cart-info-user-submit">
                <input class="w-100 py-2" type="submit" value="SUBMIT">
            </div>
        </form>
    </div>
</div>

    

@stop