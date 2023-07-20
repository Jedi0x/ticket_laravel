@if( $col == 'name' )
    <span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="First Name">{{$email->name ?? 'N/A'}}</span>

@elseif( $col == 'details')
    <span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Details">{{$email->details ?? 'N/A'}}</span>
    
@elseif( $col == 'created_at' )
    <span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Created Date"> {{ showTwelveHourDateTime($email->created_at) }} </span>

@elseif( $col == 'actions' )
    @if(!auth()->user()->can('edit-emailTemplate') && !auth()->user()->can('delete-emailTemplate'))
    <div class="text-end">
        <a  class="btn btn-sm btn-icon btn-success" id="view" data-id="{{$email->id}}" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="View"><i class="fa-solid fa-eye"></i></a>
        @if(!auth()->user()->can('edit-emailTemplate'))
        <a href="{{ route('email_template.edit', $email->id) }}" class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
        @endif
        
        @if(!auth()->user()->can('delete-emailTemplate'))
        <button type="button" class="btn btn-sm btn-icon btn-danger delete" data-delete-id = {{ $email->id}}  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Delete"><i class="fa-sharp fa-solid fa-trash"></i></button>
        @endif
    </div>
    @endif
@endif

<script>
    $('[data-bs-toggle="tooltip"]').tooltip();
</script>