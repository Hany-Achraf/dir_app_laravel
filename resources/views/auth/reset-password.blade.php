<form action="{{ url('reset-password') }}" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="New Password" required><br>
    <input type="password" name="password_confirmation" placeholder="Confirm new password" required><br>
    <button type="submit">Reset password</button>
</form>
