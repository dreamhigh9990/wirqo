@include('import.process-form', [
    'headingTitle' => __('app.importExcel') . ' ' . __('app.proposal'),
    'processRoute' => route('proposals.import.process'),
    'backRoute' => route('proposals.index'),
    'backButtonText' => __('app.backToProposal'),
])
