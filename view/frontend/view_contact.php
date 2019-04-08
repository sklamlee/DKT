
<style>
    #mapCanvas {
        height: 550px;
    }
</style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGv5cpHSkuAHn4Hw9YIHZ6txcFR9iMBE4&callback=initMap"></script>
    <script src="/assets/client/js/controller/contactController.js"></script>
    <script>

        // This example displays a marker at the center of Australia.
        // When the user clicks the marker, an info window opens.

        function initMap() {
            var uluru = { lat: 21.053963, lng: 105.734492 };
            var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                zoom: 18,
                center: uluru
            });

            var contentString = '@(Html.Raw(Model.Content))';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'Địa chỉ'
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, "load", initMap);
    </script>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <h2>Thông tin liên hệ</h2>
                <h4>DKT Store:<br></h4><h4> 68/132 - Nguyen Xa Commune - Bac Tu Liem District - Ha Noi. </h4>
                <h4>Email: lam-dv@vinacapitalvn.com</h4>
                <br /><br />
                <fieldset>
                    <h2>Gửi thông tin</h2>
                    <form>
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" name="txtName" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Điện thoại</label>
                            <input type="text" name="txtMobie" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="txtAddress" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="txtEmail" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu</label>
                            <textarea id="txtContent" class="form-control"></textarea>
                        </div>
                        <button id="btnSend" class="btn btn-success">Gửi đi</button>
                    </form>
                </fieldset>

            </div>
            <div class="col-md-6">
                <h2>Bản đồ</h2>
                <div class="map" id="mapCanvas"></div>
            </div>
        </div>
    </div>
</div>

