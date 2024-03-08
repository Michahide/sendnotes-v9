<div class="">
    <form wire:submit='submit' class="space-y-4">
        <x-text-input wire:model="noteTitle" type="text" label="Note Title" placeholder="Greetings!" />
        <x-textarea wire:model="noteBody" label="Body" placeholder="Tell a story or something to your friend" />
        <x-text-input wire:model="noteRecipient" type="text" label="Recipient" placeholder="Your friend email" />
        <x-date-picker icon="calendar" wire:model="noteSendDate" type="date" label="Send Date" />
        <x-primary-button wire:click="submit" primary right-icon="calendar" spinner>Schedule Note</x-primary-button>
    </form>
</div>
