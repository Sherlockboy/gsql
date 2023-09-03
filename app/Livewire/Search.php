<?php

namespace App\Livewire;

use App\Livewire\Forms\SearchForm;
use App\Services\GoogleSearchApi;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Search extends Component
{
    public SearchForm $searchForm;

    public string $searchResult = '';

    public function render(): View
    {
        return view('livewire.search')->title('gSQL');
    }

    public function search(GoogleSearchApi $searchService): void
    {
        $this->searchResult = $searchService->search($this->searchForm->all());
    }
}
