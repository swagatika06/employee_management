<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" id="mobile">
    </div>
    <div>
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
    </div>
    <div>
        <label for="state">State:</label>
        <input type="text" name="state" id="state">
    </div>
    <button type="submit">Save</button>
</form>
