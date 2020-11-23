@if(@$check)
    <div
        class="bootstrap-switch-null bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate"
        style="width: 88px;">
        <div class="bootstrap-switch-container" style="width: 129px; margin-left: 0px;"><span
                class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 43px;">ON</span><span
                class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span><span
                class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 43px;">OFF</span><input
                type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger"
                data-on-color="success"></div>
    </div>
@else
    <div
        class="bootstrap-switch-null bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch-undefined bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-focused bootstrap-switch-animate bootstrap-switch-off bootstrap-switch-on"
        style="width: 88px;">
        <div class="bootstrap-switch-container" style="width: 129px; margin-left: -43px;"><span
                class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 43px;">ON</span><span
                class="bootstrap-switch-label" style="width: 43px;">&nbsp;</span><span
                class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 43px;">OFF</span><input
                type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger"
                data-on-color="success"></div>
    </div>
@endif
