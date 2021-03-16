<form method="POST" action="/user/{{$getData[0]->id}}">
    @csrf
    @method('PATCH')
    <label>Name</label><input type="text" name="name" value="{{$getData[0]->name}}">
    <label>Email Address</label><input type="email" name="email" value="{{$getData[0]->email}}">
    <input type="submit" value="Save">
</form>