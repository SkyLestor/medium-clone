@props([
    /** @var \App\Models\User */
    'user'
])

<div {{ $attributes }} class="w-[320px] border-l px-8" x-data="{
                        following: {{ $user->isFollowedBy(Auth::user()) ? 'true' : 'false'}},
                        followersCount: {{ $user->followers()->count() }},
                        follow() {
                            this.following = !this.following
                            axios.post('/follow/{{ $user->id }}')
                                .then(res => {
                                    console.log(res.data)
                                    this.followersCount = res.data.followers
                                })
                                .catch(err => {
                                    console.log(err)
                                })
                        }
                    }">
    {{ $slot }}
</div>
