  <!-- Modal -->  
  @foreach($schedules as $speaker)
    <div class="modal right fade" id="{{$speaker->modal}}" tabindex="-1" role="dialog" aria-labelledby="{{$speaker->modal}}-speaker">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title header-text" id="{{$speaker->modal}}-speaker">{{$speaker->speaker}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <h3 class="modal-title modal-title-text">{{$speaker->title}}</h3>
          
          <div class="modal-body">
            <p>
                {{$speaker->section}}
            </p>
          </div>

        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
  @endforeach