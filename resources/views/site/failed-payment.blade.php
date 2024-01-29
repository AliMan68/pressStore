@component('site.layouts.content',['title'=>'خطا در پرداخت'])
    @slot('headerTitle')
        خطا در پرداخت
    @endslot
    <div class="container" id="auth-container" style="margin-top:2rem!important;height: auto;min-height: 260px">
        <div id="phoneNumber">
            <div class="d-flex flex-column w-100 h-100">
                <h style="text-align: center;font-size: 2rem;font-weight: 600;padding-bottom: 20px;color: black" id="login-title">
                    <i class="feather icon-slash"></i> خطا در پرداخت
                </h>
                <p>{{$error}}</p>
            </div>
        </div>
    </div>
@endcomponent
