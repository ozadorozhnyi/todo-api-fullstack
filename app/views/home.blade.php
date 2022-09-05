<div class="row">
    <div class="col-6">
        <div class="content">
            <h4>All my todos</h4>
        </div>
    </div>
</div>

<script type="module" defer="await">
    
    const todos_url = 'http://localhost:8181/index.php?action=todos.index';
    
    const content_element = document.querySelector('div.content');
    
    const response = await fetch(
        todos_url, {
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
    });

    const todos = await response.json();
    if (todos.length) {
        const ul = document.createElement('ul');
        todos.forEach(function (todo) {
            const li = document.createElement('li');
            li.textContent = `${todo.title}: ${todo.body}`;
            ul.appendChild(li);
        });
        content_element.appendChild(ul);
    } else {
        content_element.textContent = "<p>There is no data found.</p>"
    }
</script>