
$(document).ready(function() {	
	if ($('#sidebarnav').length) {
		$('#sidebarnav').ready(function() {
		  cargarCategorias()
			  return false;
	   
		});
	  } else {
		//alert('no existo')
	  }
    $('.pagination li a').on('click', function(){
        $("#preload").show();
        var page = $(this).attr('data');		
        var dataString = 'page='+page;

        $.ajax({
            type: "GET",
            url: 'admin/core/modules/index/view/index/index.php?action=paginar', 
            data: dataString,
            success: function(data) {
                $("#preload").hide();
                $('.items').fadeIn(2000).html(data);
                $('.pagination li').removeClass('active');
                $('.pagination li a[data="'+page+'"]').parent().addClass('active');
            }
        });
        return false;
    });      
	//filterSearch();	

    $('.productDetail').click(function(){
        filterSearch();
    });	


	
    $('.estadoDetail').click(function(){
        filterSearch();
    });	

	$('.ciudadDetail').click(function(){
        filterSearch();
    });	


	if ($('#priceSlider').length) {
	$('#priceSlider').slider({		
	}).on('change', priceRange); 

} else {
	//alert('no existo')
  }
	

        
});   

function priceRange(e){
	$('.priceRange').html($(this).val() + " - 500");
	$('#minPrice').val($(this).val());
	filterSearch();	
}
function filterSearch() {
	//$("#preload").show();
	$("#preload").show();
	var minPrice = $('#minPrice').val();
	var maxPrice = $('#maxPrice').val();
	var estado = getFilterData('estado');
	var brand = getFilterData('brand');
	var ciudad = getFilterData('ciudad');

	$.ajax({		
	  	url: 'admin/core/modules/index/view/index/index.php?action=catalogar', 
		method:"POST",
		dataType: "json",		
		data:{minPrice:minPrice,maxPrice:maxPrice,brand:brand,estado:estado,ciudad:ciudad},		
		success:function(data){
		console.log(data);
			$('.items').fadeIn(2000).html(data.html);
			$("#preload").hide();
			
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}


function cargarCategorias(){
	$.ajax({
	  type: "GET",
	  url: 'admin/core/modules/index/view/index/index.php?action=combos&c=CategoriaData&t=categoria', 
  }).done(function(categorias) {  
	var i = 0;
	var tope =categorias.length;
	for (var i = 0; i < tope; i++) {  	
	  $('#sidebarnav').append('<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">'+categorias[i].categoria+'</span></a><ul aria-expanded="false" class="collapse  first-level"><li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classic </span></a></li></ul></li>');
	}  
  
  });
  
 //alert('hola');
  }



/*
  <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>hace 2 dias</a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="#">
                                                <h4>Viajar a europa</h4>
                                                <p>Aqui un pequeño parrafo extraido del tema a tratar</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

							*/