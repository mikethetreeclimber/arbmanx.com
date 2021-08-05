    <main class="h-full col-span-9">
        @if ($currentCategory === 'tree_species')
            @livewire('trees.tree-species-select')
        @elseif ( $currentCategory === 'tree_details')
            @livewire('trees.tree-details', ['treeSpecies' => $treeSpecies])
        @else
            @livewire('trees.tree-assessment-categories-form',
            [
            'categories' => $categories,
            'assessment' => $assessment
            ])
        @endif
    </main>
    @if (session()->has('success'))
        <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
            <p class="font-bold">
                {{ session('success') }}
            </p>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
            <p class="font-bold">
                {{ session('error') }}
            </p>
        </div>
    @endif
