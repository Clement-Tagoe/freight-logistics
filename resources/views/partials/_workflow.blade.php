<section class="ml-6 mt-10">
    <div class="flex flex-col space-y-5 ml-5">
        {{-- <h2 class="font-bold text-2xl">Workflow</h2> --}}
        <div class="max-w-4xl mx-auto w-full">
            <div class="progress-bar">
                <a href="{{route('freights.edit-step-1', $freight)}}">
                    <span class="progress-step" data-title="Data Entry"></span>
                </a>
                <a href="{{route('freights.approval', $freight)}}">
                    <span class="progress-step" data-title="Approval"></span>
                </a>
                <a href="{{route('freights.create-shipping-line-release')}}">
                    <span class="progress-step" data-title="Shipping Line Release"></span>
                </a>
                <a href="{{route('freights.edit-step-1', $freight)}}">
                    <span class="progress-step" data-title="Customs Clearance"></span>
                </a>
                <a href="{{route('freights.edit-step-1', $freight)}}">
                    <span class="progress-step" data-title="Haulage"></span>
                </a>   
            </div>
        </div>
    </div>
</section>