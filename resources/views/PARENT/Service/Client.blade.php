@extends('admin')
@section('content')
<section>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Liste partenaire</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
        <tr>
            <th>Id</th>
            <th>Prenom Nom</th>
            <th>Email</th>
            <th>téléphone</th>
            <th>Logo</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0
            </td>
            <td>Win 95+</td>
            <td class="center">4</td>
            <td class="center">X</td>
        </tr>
        <tr class="gradeC">
            <td>Trident</td>
            <td>Internet
                Explorer 5.0
            </td>
            <td>Win 95+</td>
            <td class="center">5</td>
            <td class="center">C</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 5.5
            </td>
            <td>Win 95+</td>
            <td class="center">5.5</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet
                Explorer 6
            </td>
            <td>Win 98+</td>
            <td class="center">6</td>
            <td class="center">A</td>
        </tr>
        <tr class="gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center">7</td>
            <td class="center">A</td>
        </tr>


        </tbody>

        </table>
            </div>

        </div>
    </div>

<div class="footer">
<div class="pull-right">
    10GB of <strong>250GB</strong> Free.
</div>
<div>
    <strong>Copyright</strong> Example Company &copy; 2014-2017
</div>
</div>





<!-- Mainly scripts -->


<!-- Page-Level Scripts -->
<script>
$(document).ready(function(){
$('.dataTables-example').DataTable({
    pageLength: ,
    responsive: true,
    dom: '<"html5buttons"B>lTfgitp',
    buttons: [
        {extend: 'copy'},
        {extend: 'csv'},
        {extend: 'excel', title: 'ExampleFile'},
        {extend: 'pdf', title: 'ExampleFile'},

        {extend: 'print',
         customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
        }
        }
    ]

});

});

</script>

</section>

@endsection
