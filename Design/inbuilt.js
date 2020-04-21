

$(document).ready(function () {
    var link = "http://localhost/hotels%20Naivedh/builtin.json"/* API Call - DATA IN JSON; */;
    $.getJSON(link, function (packages) {
        var mainContent = "";
        $.each(packages['packages'], function (index, value) {
            var appendContent = "";
            mainContent += '<div class="col-md-4 col-sm-12 cardx" style="text-align:center"><button type="button" id="button" data-toggle="modal" data-target="#modalCart' + index + '"><div><a href="#popup1"><div class="cardheader"> <h4>' + value.package_name + '</h4> </div><div><img src="' + value.package_image + ' " alt="Mountain" style="height:200px; width:320px;"></div></a></div></button><div class="modal fade check" id="modalCart' + index + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" ><div class="modal-dialog" role="document"><div class="modal-content"><!--Header--><div class="modal-header"><h4 class="modal-title" id="myModalLabel"> ' + value.package_name + ' </h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><table class="table table-hover">'
            $.each(value.content, function (index, v) {
                appendContent += "<tr><th scope='row' style='text-align: left;'>";
                appendContent += v.day + " :  " + v.place + "</th></tr>";
                mainContent += appendContent;
                appendContent = "";
            });
            mainContent += '</table></div><div class="modal-footer">'
            appendContent += "<h4>"+value.package_price+"</h4>";
            mainContent += appendContent;
            appendContent = "";
            mainContent +='<button type="button" class="btn btn-outline-primary"  data-dismiss="modal">Close</button> <form action="book_form.php" method="POST"> <input type="text" name="package_name"style="display:none;" value="'
            mainContent += value.package_name;
            mainContent+='"> <a href="book_form.php" style="color:#fff"><button class="btn btn-primary">Checkout</button></a></form></div></div></div></div></div>';
        });

        $('#main-content').append('' + mainContent);
    });
});
