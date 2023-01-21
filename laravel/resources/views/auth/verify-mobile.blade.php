

<form method="POST" action="/verify-mobile">
            @csrf
            

            <label class="label_form_account" for="input">{{ __('Entrez le numéro envoyé à votre n° :') }}</label>
            <div>
                <input class="input_form_account" id="input" name='code'/>
            </div>
            <button type="submit" class="button_style_edit">
                {{ __('Valider') }}
            </button>
</form>