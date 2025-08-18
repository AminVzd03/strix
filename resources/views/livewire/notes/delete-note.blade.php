<?php

use Livewire\Volt\Component;

new class extends Component {
    public function delete() {

    }
}; ?>
<div x-data="{open : false}">
    <a>
        <x-monoicon-delete @click="open = true" class="text-white-300 flex justify-center w-5"/>
    </a>
    <div x-show="open" x-transition>
        hello to you

    </div>
</div>
