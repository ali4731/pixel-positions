<x-layout>
        <x-pageheading>Login</x-pageheading>
        <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
            @csrf
            <x-forms.input label="Email" name="email" />
            <x-forms.input label="Password" name="password" type="password" />

            <x-forms.button>Log In</x-forms.button>
        </x-forms.form>
</x-layout>