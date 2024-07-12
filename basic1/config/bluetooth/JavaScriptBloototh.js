const express = require('express');
const app = express();
const bodyParser = require('body-parser');

// Parse incoming JSON requests
app.use(bodyParser.json());

// POST endpoint to handle Bluetooth device connection
app.post('/connect', (req, res) => {
    const deviceId = req.body.deviceId;

    // Perform Bluetooth connection logic here (e.g., pairing and data exchange)
    // Replace this with your actual Bluetooth connection code

    // Simulated response for demonstration purposes
    setTimeout(() => {
        console.log('Device connected:', deviceId);
        res.status(200).send('Device connected successfully');
    }, 2000); // Simulate a delay before responding
});

// Start the server
const port = 3000;
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
