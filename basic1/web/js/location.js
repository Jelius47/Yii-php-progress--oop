$(function () {
    // alert('hey');
  
    $("#teacherForm").submit(ev => {
        ev.preventDefault();
        const $mod= $('#moduleCode').val();
        const $note =$('#notes').val();
        console.log($mod);
    

     
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(savePosition, positionError, {
                    timeout: 10000
                });
            } else {
                // Geolocation is not supported by this browser
            }
        

        // handle the error here
        function positionError(error) {
            var errorCode = error.code;
            var message = error.message;
            alert(message);
        }

        function savePosition(position) {
            //console.log(position.coords.latitude);
            $.post('create', {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
                code: $mod,
                notes: $note
            });
        }

       // getLocation(); // Call getLocation function to start geolocation
    });
});
