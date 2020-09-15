<button type="button" data-id="{{$row->id}}" data-name="{{$row->name}}" data-address="{{$row->address}}" data-city="{{$row->city}}" data-phone_office="{{$row->phone_office}}" data-phone_mobile="{{$row->phone_mobile}}" data-pic="{{$row->pic}}" data-section="{{$row->section}}" data-email="{{$row->email}}" data-retail="{{$row->retail}}" data-active="{{$row->active}}" data-created_at="{{$row->created_at}}" id="detailModal" class="btn btn-success btn-sm"><i class="fas fa-eye"> </i></button>
<button type="button" data-id="{{$row->id}}" data-name="{{$row->name}}" data-address="{{$row->address}}" data-city="{{$row->city}}" data-phone_office="{{$row->phone_office}}" data-phone_mobile="{{$row->phone_mobile}}" data-pic="{{$row->pic}}" data-section="{{$row->section}}" data-email="{{$row->email}}" data-retail="{{$row->retail}}" data-active="{{$row->active}}" data-created_at="{{$row->created_at}}" id="editBtn" class="btn btn-info btn-sm"><i class="fas fa-edit"> </i></button>
<!-- <a href="{{route("contact.edit", [$row->id])}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a> -->



<button type="button" data-id="{{$row->id}}" id="deleteBtn" class="btn btn-danger btn-sm"><i class="fas fa-trash"> </i></button>
