function getData(){
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        type: "GET",
        dataType: "json",
        success: function(data) {
            let output = "";
            data.forEach(post => {
                output += `<li>
                    <a href="/posts/detail/${post.id}">${post.title}</a>
                </li>`;
            });
            $("#post-list").html(output);
        },
        error: function() {
            alert("Error fetching data!");
        }
    });
}

getData()