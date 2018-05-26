<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content"  placeholder="聊聊新鲜事..." rows="3" class="form-control">{{ old('content') }}</textarea>
        <button class="btn btn-primary pull-right">发布</button>
</form>