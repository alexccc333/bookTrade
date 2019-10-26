$('#search').on('input keyup', function (e) {
    let search = $('#search').val();
    getData(search)
        .then((res) => {
            // $(".search-list").empty();
            res.forEach((item) => {
                $('.search-list').append(`<li class="list-group-item list-group-item-success"><a href='/book/${item.id}'>${item.name}</a></li>`);
                console.log(item)
            })

        })


});
//пофиксить
$('.search-list').blur(function () {
    $(".search-list").empty();
});


async function getData(search) {
    try {
        let res = await axios.post('/search', {search})
        if (res.status == 200) {
            // test for status you want, etc
            console.log(res.status);
        }
        // Don't forget to return something
        return res.data
    } catch (err) {
        console.error(err);
    }
}





