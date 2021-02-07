<x-filament::field-group
    :errorKey="$field->errorKey"
    :for="$field->id"
    :help-message="__($field->helpMessage)"
    :hint="__($field->hint)"
    :label="__($field->label)"
    :required="$field->required"
>
    <x-filament::textarea
        :autocomplete="$field->autocomplete"
        :autofocus="$field->autofocus"
        :disabled="$field->disabled"
        :error-key="$field->errorKey"
        :extra-attributes="$field->extraAttributes"
        :id="$field->id"
        :name="$field->name"
        :name-attribute="$field->nameAttribute"
        :placeholder="__($field->placeholder)"
    />
</x-filament::field-group>
