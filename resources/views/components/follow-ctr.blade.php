@props(['user'])

<div {{ $attributes }} class="w-[320px] border-l px-8" data-user-id="{{ $user->id }}"
    data-following="{{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }}"
    data-followers-count="{{ $user->followers()->count() }}">
    {{ $slot }}
</div>

@once
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll("[data-user-id]").forEach(container => {
                const userId = container.dataset.userId;
                let following = container.dataset.following === "true";
                let followersCount = parseInt(container.dataset.followersCount);

                const followBtn = container.querySelector("[data-follow-btn]");
                const countEl = container.querySelector("[data-followers-count]");

                // Initialize UI
                updateUI();

                followBtn.addEventListener("click", (e) => {
                    e.preventDefault();

                    fetch(`/community/follow/${userId}`, {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                            "Accept": "application/json"
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            console.log(data, 'data ==>')
                            following = !following;
                            followersCount = data.followersCount;
                            updateUI();
                        })
                        .catch(err => console.error(err));
                });

                function updateUI() {
                    followBtn.textContent = following ? "Unfollow" : "Follow";
                    followBtn.classList.toggle("text-red-600", following);
                    followBtn.classList.toggle("text-emerald-600", !following);

                    if (countEl) {
                        countEl.textContent = followersCount;
                    }
                }
            });
        });
    </script>
@endonce