<x-head />
<style>
.title {
    text-align: center;
    color: white;
}

td,th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}
table{
    width: 100%;
    border-collapse: collapse ;
}

</style>
<div class="container-fuild border border-dark">
    <div class="row">
        <div class="col-8 offset-2 bg-info">
            <h3 class="text-center text-white">This is view - 1</h3>

        </div>
    </div>
</div>
<button id="click" class="btn btn-danger offset-6">click</button>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Button</th>
        </tr>
    </thead>
    <tbody id="load-data">

    </tbody>
</table>

<x-foot />

<script>
$("document").ready(function() {
    $("#click").click(function(){
        $.ajax({
            url: "{{route('get.data')}}",
            type: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                    if(response.success) {
                        let rows = '';

                        $.each(response.message, function(index, item) {
                            rows += `<tr>
                                <td>${item.name}</td>
                                <td>${item.email}</td>
                                <td>${item.age}</td>
                                <td><a href="" class="btn btn-info btn-sm" style="padding:1px">click</td>
                            </tr>`;
                        });
                        $('#load-data').html(rows);
                    }
                },
        });
    });
});
</script>
