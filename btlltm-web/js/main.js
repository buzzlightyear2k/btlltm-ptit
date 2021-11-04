$('#list_by_score').on('click', function () {
  $('#list_by_score').addClass("active");
  $('#list_by_avgCom').removeClass("active");
  $('#list_by_avgTime').removeClass("active");
  $('#change_password').removeClass("active");

  $('#tbl_score').fadeIn();
  $('#tbl_avgCom').hide();
  $('#tbl_avgTime').hide();
  $('#form_change_password').hide();

  $('.score').addClass("bold");
  $('.avgCom').removeClass("bold");
  $('.avgTime').removeClass("bold");
});

$('#list_by_avgCom').on('click', function () {
  $('#list_by_score').removeClass("active");
  $('#list_by_avgCom').addClass("active");
  $('#list_by_avgTime').removeClass("active");
  $('#change_password').removeClass("active");

  $('#tbl_score').hide();
  $('#tbl_avgCom').fadeIn();
  $('#tbl_avgTime').hide();
  $('#form_change_password').hide();

  $('.score').removeClass("bold");
  $('.avgCom').addClass("bold");
  $('.avgTime').removeClass("bold");
  $('#change_password').removeClass("active");

});

$('#list_by_avgTime').on('click', function () {
  $('#list_by_score').removeClass("active");
  $('#list_by_avgCom').removeClass("active");
  $('#list_by_avgTime').addClass("active");
  $('#change_password').removeClass("active");

  $('#tbl_score').hide();
  $('#tbl_avgCom').hide();
  $('#tbl_avgTime').fadeIn();
  $('#form_change_password').hide();

  $('.score').removeClass("bold");
  $('.avgCom').removeClass("bold");
  $('.avgTime').addClass("bold");
});

$('#change_password').on('click', function () {
  $('#list_by_score').removeClass("active");
  $('#list_by_avgCom').removeClass("active");
  $('#list_by_avgTime').removeClass("active");
  $('#change_password').addClass("active");

  $('#tbl_score').hide();
  $('#tbl_avgCom').hide();
  $('#tbl_avgTime').hide();
  $('#form_change_password').fadeIn();
});

$('#btn-changePw').on('click', function () {
  let username = $('#inputUserName').val();
  let password = $('#inputPassword').val();
  let newPassword = $('#inputNewPassword').val();

  if (username == '' || password == '' || newPassword == '') {
    alert("Don't left blank!");
  } else if (password == newPassword) {
    alert("New password have to different password!");
  } else {
    $.ajax({
      url: "ajax_action.php",
      method: "POST",
      data: { username: username, password: password, newPassword: newPassword },
      success: function (data) {
        if (data == 1) {
          $('#form-changePw')[0].reset();
          alert("Change pasword was successful!");
        } else {
          alert("Account invalid!");
        }
      }
    });
  }
});