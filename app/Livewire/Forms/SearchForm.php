<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class SearchForm extends Form
{
    #[Rule('required|string|min:3')]
    public string $q = '';

    #[Rule('sometimes|required|boolean')]
    public bool $is_exact_search = false;

    #[Rule('sometimes|required|string|date_format::Y-m-d')]
    public string $before = '';

    #[Rule('sometimes|required|string|date_format::Y-m-d')]
    public string $after = '';

    #[Rule('sometimes|required|url')]
    public string $site = '';

    #[Rule('sometimes|required|string')]
    public string $exclude = '';
}
