<div class="modal fade text-left modal-borderless" id="{{ $modalId }}" role="dialog"
    aria-labelledby="{{ $modalId }}Label1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable {{ $modalSize }}" role="document">
        <div class="modal-content">
            <div class="modal-header {{ $modalHeaderBackground }}">
                <h5 class="modal-title {{ $modalTitleColor }}">{{ $modalTitle }}</h5>
            </div>
            <div class="modal-body">
                {{ $modalBody }}
            </div>
            {{ $modalFooter }}
        </div>
    </div>
</div>
