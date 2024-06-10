<div>
    @section('content')
        <div class="card text-left">
          <div class="card-header">
            <b>Blog</b> | Edit
          <div class="card-body">
            <livewire:edit.page :newsId="$newsId"></livewire:edit.page>  
          </div>
        </div>
    @endsection
</div>
