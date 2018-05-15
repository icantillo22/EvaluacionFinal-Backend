$(function () {
  var Propiedades = {
    formulario: $('#formulario'),
    btnMostrar: $('#mostrarTodos'),
    contProp: $('#Propiedades'),

    Init: function () {
      var self = this
      self.cargarSelect()
      self.cargarTodos()
      self.formulario.submit(function (e) {
        e.preventDefault()
        self.buscar()
      })
    },

    cargarSelect: function () {
      $('select').material_select()
    },

    buscar:function(e){
      var self = this
      var ciudad = $('form').find('select[id="selectCiudad"]').val()
      var tipo = $('form').find('select[id="selectTipo"]').val()
      var from = self.toNumero($('.irs-from').text())
      var to = self.toNumero($('.irs-to').text())

      var datos = {ciudad: ciudad, tipo: tipo, from: from, to: to}
      self.ajaxData(datos)
    },
  }
})
