@if( $col == 'name' )
    <span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="First Name">{{$category->name ?? 'N/A'}}</span>
    
@elseif( $col == 'created_at' )
    <div class="@if(!auth()->user()->can('edit-category') && !auth()->user()->can('delete-category') ) text-end  @endif">
        <span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Created Date"> {{ showTwelveHourDateTime($category->created_at) }} </span>
    </div>

@elseif( $col == 'actions' )
    @canany(['edit-category','delete-category'])
    <div class="text-end">
        @can('edit-category')
        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Edit Role"><i class="fa-solid fa-pen-to-square"></i></a>
        @endcan
        
        @can('delete-category')
        <button type="button" class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="Delete Role"><i class="fa-sharp fa-solid fa-trash"></i></button>
        @endcan
    </div>
    @endcanany
@endif
