function changeModel(id,p_id,type) {
    $.ajax({
    type:"POST",
    url:"change_model.php",
    data:"model="+id+"&id="+p_id+"&type="+type,
    success:function(data)
      {
        $('#model_select').html(data);
      }
  });
}
