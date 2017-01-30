@inject('history', 'App\History')

    <div class="section-offset">
        <section id="timeline" class="timeline">
            <header>
                <!-- <h1>Timeline</h1> -->
                <h2>Г.Занданшатар - Танилцуулга</h2>
            </header>
            <div class="timeline-wrapper clearfix cr-container">
                <div class="timeline-navigator cr-nav-container">
                @foreach($history->getListForTimeline() as $key=>$ahistory)
                    <div class="cr-nav-item {!! $key == 0 ? 'cr-nav-item-active' : 'cr-nav-item'!!}"><span>{{$ahistory->title}}</span></div>
                @endforeach                    
                </div>
                <div class="timeline-items cr-content-container">
                @foreach($history->getListForTimeline() as $key=>$ahistory)
                    <div class="clearfix  timeline type-timeline status-publish hentry cr-content-item {!! $key == 0 ? 'cr-content-item-active' : ''!!} ">
                        <header>
                            <!-- <h3>Эхлэл</h3> -->
                        </header>
                        {!!$ahistory->body!!}
                    </div>
                @endforeach
                    
                </div>
            </div>
        </section>
    </div>