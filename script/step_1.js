
function showPass(e) {
    
    let device_pass = document.getElementById(`pass-${e}`).value;
    let device_ssid =  document.getElementById(`ssid-${e}`).innerText;

    var data = {
        'pass'    : device_pass,
        'ssid'    : device_ssid,
    };
      
    $.ajax({
        url: 'wifi/api/connect.php',
        method: 'POST',
        data: data,
        success: function(response) {
            console.log(response);
        },
    });
}


