<form method="POST" action="/user">
    @csrf
    <label>Name</label><input type="text" name="name">
    <label>Email Address</label><input type="email" name="email">
    <input type="submit" value="Add User">
</form>