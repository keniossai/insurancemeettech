<div class="row">
    <div class="col-lg-6">
        <div class="ts-speaker-popup-img">
            <img src="{{  $speaker->photo() }}" alt="Photo">
        </div>
    </div><!-- col end-->
    <div class="col-lg-6">
        <div class="ts-speaker-popup-content">
            <h3 class="ts-title"> {{ strtoupper($speaker->name) }}</h3>
            <span class="speakder-designation">{{ ucwords( $speaker->designation) }}  </span>
            <p>
                {!! str($speaker->bio)->words() !!}

                <a href="{{ route('speakers.show', $speaker) }}">Continue reading...</a>
            </p>

        </div><!-- ts-speaker-popup-content end-->
    </div><!-- col end-->
</div><!-- row end-->
