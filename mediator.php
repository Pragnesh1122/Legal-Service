<html><head>
    <title>Document Writer Section</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px ;
    border-radius : 0px 0px 100px 100px;
}
main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 28px;
}

h2 {
    font-size: 24px;
}

/* Document Writer Styles */
.document-writers-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two writers per row */
    gap: 20px;
}

.document-writer {
    border: 2px solid black;
    padding: 20px;
    border-radius: 20px;
}

.profile-picture img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 50%;
    margin-right: 20px;
}

.writer-info {
    flex: 1;
}

/* Filter Styles */
.filter {
    margin-top: 20px;
    padding: 10px;
    background-color: #eee;
    border-radius: 10px;
}

/* Button Styles */
.book-appointment {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.book-appointment:hover {
    background-color: #555;
}

    </style> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Mediators</h1>
    </header>
    <main>
        <h2></h2>

        <!-- Filter Options -->
        <div class="filter">
            <label for="experienceFilter">Experience</label>
            <select id="experienceFilter">
                <option value="all">All</option>
                <option value="1">1 year</option>
                <option value="3">3 years</option>
                <option value="5">5 years</option>
                <option value="10">10 years</option>
            </select>

            <label for="serviceChargeFilter">Service Charge:</label>
            <select id="serviceChargeFilter">
                <option value="all">All</option>
                <option value="40">Less than ₹1000 </option>
                <option value="50">Less than ₹1500</option>
                <option value="60">Less than ₹2000</option>
                <option value="60">Less than ₹3000</option>
                <option value="60">Less than ₹4000</option>

            </select>

         

            <label for="ratingFilter">Rating:</label>
            <select id="ratingFilter">
                <option value="all">All</option>
                <option value="4">3.5+</option>
                <option value="4.5">4.0+</option>
                <option value="5">4.5</option>
                <option value="5">5.0</option>
            </select>
        </div>

        <!-- List of Mediators (3x2 Grid) -->
        <div class="document-writers-grid">
            <!-- Document Writer 1 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Jayant pathak.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Jayant Pathak</h3>
                    <p>Experience: 5 years</p>
                    <p>Rating: 4.5</p>
                    <p>Service Charge: ₹1499</p>
                    <p>City: Ahmedabad</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 2 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Harsh yadav.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Harsh Yadav</h3>
                    <p>Experience: 3 years</p>
                    
                    <p>Rating: 4.0</p>
                    <p>Service Charge: ₹999</p>
                    <p>City: Delhi</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 3 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Ramam Vyas.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Raman Vyas</h3>
                    <p>Experience: 10 years</p>
                    
                    <p>Rating: 4.9</p>
                    <p>Service Charge: ₹1999</p>
                    <p>City: Mumbai</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Add 3 more mediators here -->
            <!-- Document Writer 4 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Riya patel.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Riya Patel</h3>
                    <p>Experience: 6 years</p>
                  
                    <p>Rating: 4.4</p>
                    <p>Service Charge: ₹2199 </p>
                    <p>City: Pune</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 5 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Trupti.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Trupti Pandya</h3>
                    <p>Experience: 4 years</p>
                   
                    <p>Rating: 3.9</p>
                    <p>Service Charge: ₹2499</p>
                    <p>City: Bengaluru</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 6 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="images/Ritam.jpg" alt="Mediator profile">
                </div>
                <div class="writer-info">
                    <h3>Ritam Shah</h3>
                    <p>Experience: 5 years</p>
                    
                    <p>Rating: 4.5</p>
                    <p>Service Charge: ₹3999 </p>
                    <p>City: Surat</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Add footer content here -->
    </footer>

    <script>
        // Filter document writers by experience, service charge, documents written, and rating
        document.getElementById('experienceFilter').addEventListener('change', filterWriters);
        document.getElementById('serviceChargeFilter').addEventListener('change', filterWriters);
        document.getElementById('documentWrittenFilter').addEventListener('change', filterWriters);
        document.getElementById('ratingFilter').addEventListener('change', filterWriters);

        function filterWriters() {
            const selectedExperience = parseInt(document.getElementById('experienceFilter').value);
            const selectedServiceCharge = parseInt(document.getElementById('serviceChargeFilter').value);
            const selectedDocumentWritten = parseInt(document.getElementById('documentWrittenFilter').value);
            const selectedRating = parseFloat(document.getElementById('ratingFilter').value);
            const writers = document.querySelectorAll('.document-writer');

            writers.forEach((writer) => {
                const writerExperience = parseInt(writer.querySelector('p:nth-child(2)').textContent.split(' ')[1]);
                const writerServiceCharge = parseInt(writer.querySelector('p:nth-child(5)').textContent.split(' ')[2]);
                const writerDocumentWritten = parseInt(writer.querySelector('p:nth-child(3)').textContent.split(' ')[2]);
                const writerRating = parseFloat(writer.querySelector('p:nth-child(4)').textContent.split(' ')[1]);

                const meetsExperience = (selectedExperience === 'all' || writerExperience >= selectedExperience);
                const meetsServiceCharge = (selectedServiceCharge === 'all' || writerServiceCharge <= selectedServiceCharge);
                const meetsDocumentWritten = (selectedDocumentWritten === 'all' || writerDocumentWritten >= selectedDocumentWritten);
                const meetsRating = (selectedRating === 'all' || writerRating >= selectedRating);

                if (meetsExperience && meetsServiceCharge && meetsDocumentWritten && meetsRating) {
                    writer.style.display = 'block';
                } else {
                    writer.style.display = 'none';
                }
            });
        }
    </script>


</body></html>