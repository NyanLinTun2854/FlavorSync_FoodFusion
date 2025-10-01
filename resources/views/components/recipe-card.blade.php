{{-- {{ dd($recipe->toArrary()) }} --}}
{{-- {{ dd($recipe->toArray()['id']) }} --}}

<a href="{{ route('recipes.show', $recipe->toArray()['id']) }}">
    <div
        class="bg-card text-card-foreground py-6 flex flex-col gap-6 rounded-xl border shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group cursor-pointer">
        <div class="aspect-video relative overflow-hidden">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                src="{{$recipe->imageUrl()}}" />
            {{-- <div class="absolute top-3 left-3">
                <span
                    class="px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 rounded-md bg-white border inline-flex justify-center items-center">{{
                    $recipe->toArray()->dietary_preferences[0]->name }}</span>
            </div> --}}
            <div class="absolute top-3 right-3">
                <span
                    class="px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 rounded-md bg-white border inline-flex justify-center items-center">{{ $recipe->toArray()['category']['name'] }}</span>
            </div>
        </div>
        <div class="px-6 pb-3 flex flex-col gap-1.5 items-start">
            <h6 class="font-semibold text-xl leading-tight group-hover:text-primary transition-colors">
                {{ $recipe->toArray()['name'] }}
            </h6>
            <p class="text-muted-foreground">{{ $recipe->toArray()['description'] }}
            </p>
        </div>
        <div class="px-6">
            <div class="text-sm text-muted-foreground mb-3 flex justify-between items-center">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-clock h-4 w-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span>{{ $recipe->toArray()['prep_time'] + $recipe->toArray()['cook_time'] }} min</span>
                </div>
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users h-4 w-4">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>{{  $recipe->toArray()['servings'] }} servings</span>
                </div>
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chef-hat h-4 w-4">
                        <path
                            d="M17 21a1 1 0 0 0 1-1v-5.35c0-.457.316-.844.727-1.041a4 4 0 0 0-2.134-7.589 5 5 0 0 0-9.186 0 4 4 0 0 0-2.134 7.588c.411.198.727.585.727 1.041V20a1 1 0 0 0 1 1Z">
                        </path>
                        <path d="M6 17h12"></path>
                    </svg>
                    <span>{{$recipe->toArray()['difficulty_level']['name']}}</span>
                </div>
            </div>
            <div class="flex items-center gap-1 text-sm text-muted-foreground">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-star h-4 w-4">
                    <path
                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                    </path>
                </svg>
                <span>by Nyan Lin Tun</span>
            </div>
        </div>
    </div>
</a>