<script>
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    // console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(1, e.data);
};

// conn.send('Hello world')

</script>