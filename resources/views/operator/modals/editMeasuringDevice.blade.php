<div class="modal fade" id="editMeasuringDeviceModal" tabindex="-1" role="dialog" aria-labelledby="editMeasuringDeviceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Measuring Device</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/operator/measuring_devices/{{ $measuring_device->id }}" method="post">
                    <input type="hidden" name="_method" value="patch">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="manufacturer">Manufacturer</label>
                        <input type="text" name="manufacturer" id="manufacturer" class="form-control" value="{{ $measuring_device->manufacturer }}">
                    </div>

                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{ $measuring_device->model }}">
                    </div>

                    <div class="form-group">
                        <label for="serial">Serial Number</label>
                        <input type="text" name="serial" id="serial" class="form-control" value="{{ $measuring_device->serial }}">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>