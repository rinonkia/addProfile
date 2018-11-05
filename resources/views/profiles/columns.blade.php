
<div class="myprofile-columns ">
    @foreach($profiles as $profile)
        <div class="column">
            <div class="column-thema text-muted">
                {{ $profile->thema }}
            </div>
            <div class="column-answer">
                {{ $profile->answer }}
            </div>
        </div>
    @endforeach
    
</div>

        
    
    