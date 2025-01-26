<x-auth-layout>
    <x-forms.form-heading> Register</x-forms.form-heading>
    <x-forms.form>
    @csrf
    <x-forms.input name="userName" >
            User Name
        </x-forms.input> 
        <x-forms.input name="email" type="email" >
            Email
        </x-forms.input> 
        <x-forms.input name="phone" >
            Phone Number
        </x-forms.input> 
        <x-forms.input name="password" type="password" >
            Password
        </x-forms.input>
        <x-forms.input name="password_confirmation" type="password" >
            Confirm Password
        </x-forms.input>
        <x-forms.button>Register</x-forms.button>
    </x-forms.form>

</x-auth-layout>