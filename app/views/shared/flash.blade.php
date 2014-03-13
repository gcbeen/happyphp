@if(Session::get('error'))
<div class="alert fade in alert-error"><button data-dismiss="alert" class="close">×</button>{{ Session::get('error') }}</div>
@endif

@if(Session::get('status'))
<div class="alert fade in alert-status"><button data-dismiss="alert" class="close">×</button>{{ Session::get('status') }}</div>
@endif

@if(Session::get('success'))
<div class="alert fade in alert-success"><button data-dismiss="alert" class="close">×</button>{{ Session::get('success') }}</div>
@endif
